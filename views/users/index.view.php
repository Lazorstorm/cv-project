<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="row mt-2">
        <div class="col-2">
            <h2 id="h2-1">About</h2>
            <h2 id="h2-2">About</h2>
            <h2 id="h2-3">About</h2>
            <h2 id="h2-4">About</h2>
            <h2 id="h2-5">About</h2>
        </div>
        <div class="col-8">
            <?php foreach ($vars['users'] as $user) : ?>
                <p>
                <div>Name: <?= $user->first_name ?></div>
                <div>Email: <?= $user->email ?></div>
                <div>Date of birth: <?= date('d-m-Y', strtotime($user->date_of_birth)) ?></div>
                <div>Location: <?= $user->location ?></div>
                </p>
            <?php endforeach ?>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>