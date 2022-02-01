<?php require 'view/_partials/head.view.php'; ?>

    <div class="container" style="margin-top: 30px">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/visosImones">Visos imones</a>
                <a class="navbar-brand" href="/">I pradzia</a>
            </div>
        </nav>
    </div>

<div class="container" style="margin-top: 30px">
    <?php foreach ($errors as $error): ?>
        <div class="alert alert-danger" role="alert">
            <?= $error; ?>
        </div>
    <?php endforeach; ?>
    <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Imones kodas</span>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">PVM kodas</span>
            <input type="text" class="form-control" name="pvm_kodas">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Imones pavadinimas</span>
            <input type="text" class="form-control" name="pavadinimas">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Adresas</span>
            <input type="text" class="form-control" name="adresas">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Tel. nr.</span>
            <input type="text" class="form-control" name="tel_nr">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">El. pastas</span>
            <input type="text" class="form-control" name="el_pastas">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Veikla</span>
            <input type="text" class="form-control" name="veikla">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Vadovas</span>
            <input type="text" class="form-control" name="vadovas">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" name="save">Saugoti</button>
        </div>
    </form>


</div>

<?php require 'view/_partials/htmlEnd.php'; ?>