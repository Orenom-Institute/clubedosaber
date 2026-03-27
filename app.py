from flask import Flask, render_template

app = Flask(__name__)

# ----------
# Inicio
# ----------
@app.route('/')
def inicio():
    return render_template('index.html')

# ----------
# Blog
# ----------
@app.route('/blog')
def blog():
    return render_template('blog/blog.html')

# ----------
# Contato
# ----------
@app.route('/contato')
def contato():
    return render_template('contato/contato.html')

# ----------
# Empresa
# ----------
@app.route('/projeto')
def empresa():
    return render_template('projeto.html')

@app.route('/projeto/empresa')
def empresa():
    return render_template('projeto/empresa.html')

@app.route('/projeto/quemsomos')
def quemsomos():
    return render_template('projeto/quemsomos.html')

# ----------
# Servicos
# ----------
@app.route('/servicos')
def empresa():
    return render_template('servicos.html')

@app.route('/servicos/consultoria')
def consultoria():
    return render_template('servicos/consultoria.html')

@app.route('/servicos/treinamentos')
def treinamentos():
    return render_template('servicos/treinamentos.html')

@app.route('/servicos/curadoria')
def curadoria():
    return render_template('servicos/curadoria.html')

if __name__ == '__main__':
    app.run(debug=True)