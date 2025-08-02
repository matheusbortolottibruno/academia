<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário Academia</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form>
        <h2>Formulário de Inscrição</h2>

        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required />

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required />

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="" disabled selected>Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required />

        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" />

        <label for="objetivo">Objetivo principal:</label>
        <select id="objetivo" name="objetivo" required>
            <option value="" disabled selected>Selecione</option>
            <option value="perda_peso">Perda de peso</option>
            <option value="ganho_muscular">Ganho muscular</option>
            <option value="melhora_saude">Melhora da saúde</option>
        </select>

        <label>Já treinou antes?</label>
        <label><input type="radio" name="experiencia" value="sim" required /> Sim</label>
        <label><input type="radio" name="experiencia" value="nao" /> Não</label>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>