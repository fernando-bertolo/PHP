<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de pessoas</title>
</head>

<style>
    label, input {
        display: block;
    }
</style>
<body>
    <fieldset>
        <legend>Cadastro de Pessoas</legend>

        <form method="post" action="/form">
            <label>Nome:</label>
            <input id="nome" name="nome" type="text"/>
            
            <label>CPF:</label>
            <input id="cpf" name="cpf" type="text"/>

            <label>Data de nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" type="date"/>
        
            <button type="submit">Salvar</button>
        </form>
    </fieldset>


    
</body>
</html>