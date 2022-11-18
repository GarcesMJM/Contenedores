from flask import Flask, render_template

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.php')

@app.route('/registrar')
def registrar(): 
    return render_template('registrar.html')

@app.route('/perfil')
def perfil():
    return render_template('perfil.html')
    
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)

    

