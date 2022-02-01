<?php require 'view/_partials/head.view.php'; ?>

    <div class="container" style="margin-top: 30px">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="/add-task">Nauja uzduotis</a>
                    <a class="navbar-brand" href="/visosImones">Visos imones</a>
                </div>
                <form class="d-flex" method="post">
                    <a class="navbar-brand">Ieskoti imones</a>
                    <select class="form-select" style="margin-right: 20px" name="select">
                        <option value="pavadinimas">Imones pavadinimas</option>
                        <option value="id">Imones kodas</option>
                    </select>
                    <input class="form-control me-2" type="search" placeholder="Ieskoti" aria-label="Search" name="input_search">
                    <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                </form>
            </div>
        </nav>
    </div>


    <div class="container">
        <?php if(isset($_POST['search'])) :?>
            <?php if(!empty($fields)) :?>
                <table class="table table-bordered border-dark" style="margin-top: 30px">
                    <tbody>
                        <thead>
                            <tr>
                                <th scope="col">Imones kodas</th>
                                <th scope="col">Imones pavadinimas</th>
                                <th scope="col">PVM kodas</th>
                                <th scope="col">Adresas</th>
                                <th>Tel. nr.</th>
                                <th>El. pastas</th>
                                <th>Veikla</th>
                                <th>Vadovas</th>
                            </tr>
                        </thead>
                        <?php foreach ($fields as $field) :?>
                            <tr>
                                <td>
                                    <?= $field['id']; ?>
                                </td>
                                <td>
                                    <?= $field['pavadinimas']; ?>
                                </td>
                                <td>
                                    <?= $field['pvm_kodas']; ?>
                                </td>
                                <td>
                                    <?= $field['adresas']; ?>
                                </td>
                                <td>
                                    <?= $field['tel_nr']; ?>
                                </td>
                                <td>
                                    <?= $field['el_pastas']; ?>
                                </td>
                                <td>
                                    <?= $field['veikla']; ?>
                                </td>
                                <td>
                                    <?= $field['vadovas']; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-danger" role="alert" style="margin-top: 30px">
                    <h1>Rezultatu nera!</h1>
                </div>
            <?php endif; ?>
        <?php endif; ?>

<!--        <div class="alert alert-danger" role="alert" style="margin-top: 30px">-->
<!--            <h1>--><?php //$errors; ?><!--</h1>-->
<!--        </div>-->

    </div>

<?php require 'view/_partials/htmlEnd.php'; ?>