<?php require 'view/_partials/head.view.php'; ?>

<div class="container" style="margin-top: 30px">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/add-task">Nauja uzduotis</a>
            <a class="navbar-brand" href="/">I pradzia</a>
        </div>
    </nav>
</div>

    <div class="container">
        <table class="table" style="margin-top: 30px">
            <thead>
                <tr>
                    <th scope="col">Imones pavadinimas</th>
                    <th scope="col">Adresas</th>
                    <th>El. pastas</th>
                    <th>Salinimas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tasks->allTasks() as $key=>$task) :?>
                    <tr>
                        <td>
                            <a href="" style="text-decoration: none; color: black;" data-bs-toggle="modal" data-bs-target="#viewModal<?= $task['id'] ;?>">
                                <?= $task['pavadinimas']; ?>
                            </a>
                            <?php require 'view/_partials/modalView.php'?>
                        </td>
                        <td>
                            <?= $task['adresas']; ?>
                        </td>
                        <td>
                            <?= $task['el_pastas']; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $task['id'] ;?>">
                                Trinti
                            </button>
                            <?php require 'view/_partials/modalDelete.php'?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php require 'view/_partials/htmlEnd.php'; ?>
