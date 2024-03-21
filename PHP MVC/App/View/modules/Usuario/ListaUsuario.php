<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listagem pessoas</title>
</head>

<body>

    <table class="table table-hover">


        <thead class="col-4">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th class="col-2">Ações</th>
            </tr>
        </thead>

    


        <tbody>
            <?php foreach ($model->rows as $item): ?>
            <tr>
                <td><?= $item->idUser?></td>
                <td><?= $item->name?></td>
                <td><?= $item->cpf?></td>
                <td><?= $item->data_nascimento?></td>
                <td>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
                        <a href="/usuario/edit?idUser= <?= $item->idUser?>" style="text-decoration: none; color: white;" data-bs-toggle="modal" data-bs-target="#editUser<?= $item->idUser?>">
                            Editar
                        </a>
                    </button>
                    <button type="button" class="btn btn-light">
                        <a href="/usuario/delete?idUser=<?= $item->idUser?>" style="text-decoration: none; color: black;">Excluir</a>
                    </button>

                </td>
            </tr>
        <?php endforeach ?>

        </tbody>

    </table>

    <?php foreach ($model->rows as $item): ?>

    <!-- Modal -->
    <div class="modal fade" id="editUser<?= $item->idUser?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edição de Usuário</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="/usuario/edit">

                        <input type="" name="idUser" id="idUser" value="<?= $item->idUser?>">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $item->name?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControl" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?= $item->cpf?>">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Data de Nascimento</label>
                            <input type="date" id="data_nascimento" name="data_nascimento" value="<?= $item->data_nascimento?>">
                        </div>
                    
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach ?>


    <a href="/">Home</a>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>