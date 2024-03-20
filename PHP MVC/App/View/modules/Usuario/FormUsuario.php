<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de pessoas</title>
</head>

<style>
    label,
    input {
        display: block;
    }
    body{
        background-color: black;
    }
</style>

<body>
    <fieldset>
        <legend>Cadastro de Pessoas</legend>

        <form method="post" action="/usuario/form/save">
            <label>Nome:</label>
            <input id="name" name="name" type="text" />

            <label>CPF:</label>
            <input id="cpf" name="cpf" type="text" />

            <label>Data de nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" type="date" />

            <button type="submit">Salvar</button>
        </form>
    </fieldset>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>