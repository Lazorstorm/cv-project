<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <?php foreach ($vars['cvs'] as $cv) : ?>
        <div>Naam: <?= $user->name ?></div>
        <div>Email: <?= $user->email ?></div>
        <div>Geboortedatum: <?= $user->date_of_birth ?></div>
    <?php endforeach ?>
</div>

<?php require 'views/partials/footer.view.php' ?>