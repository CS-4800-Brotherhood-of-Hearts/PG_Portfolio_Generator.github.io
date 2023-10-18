from flask import Flask, render_template, request, redirect, url_for
import os

app = Flask(__name__)
app.config['UPLOAD_FOLDER'] = 'portfolios'

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/generate', methods=['POST'])
def generate():
    name = request.form['name']
    phone = request.form['phone']

    # Create a directory for each user (if it doesn't exist)
    user_dir = os.path.join(app.config['UPLOAD_FOLDER'], name)
    os.makedirs(user_dir, exist_ok=True)

    # Create a unique HTML file for the portfolio
    portfolio_file = os.path.join(user_dir, 'portfolio.html')

    # Render the portfolio template with user data and save it as HTML
    with open(portfolio_file, 'w') as file:
        portfolio_content = render_template('portfolio_template.html', name=name, phone=phone)
        file.write(portfolio_content)

    return redirect(url_for('show_portfolio', username=name))

@app.route('/portfolio/<username>')
def show_portfolio(username):
    portfolio_file = os.path.join(app.config['UPLOAD_FOLDER'], username, 'portfolio.html')
    if os.path.exists(portfolio_file):
        return render_template('portfolio_template.html', name=username)
    else:
        return "Portfolio not found."

if __name__ == '__main__':
    app.run(debug=True)
