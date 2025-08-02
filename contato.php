<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Formulário Academia</title>
</head>
<body>
  <h1>Cadastro de Aluno - Academia</h1>
  <form action="/submit" method="POST">
    <label for="nome">Nome completo:</label><br />
    <input type="text" id="nome" name="nome" required /><br /><br />

    <label for="idade">Idade:</label><br />
    <input type="number" id="idade" name="idade" min="10" max="100" required /><br /><br />

    <label>Sexo:</label><br />
    <input type="radio" id="masculino" name="sexo" value="masculino" required />
    <label for="masculino">Masculino</label><br />
    <input type="radio" id="feminino" name="sexo" value="feminino" />
    <label for="feminino">Feminino</label><br /><br />


    <label for="objetivo">Objetivo Principal:</label><br />
    <textarea id="objetivo" name="objetivo" rows="4" cols="30" placeholder="Ex: Perder peso, ganhar massa muscular..." required></textarea><br /><br />

    <input type="submit" value="Enviar" />
  </form>
</body>
</html>