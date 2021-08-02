<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="row mt-2">
        <div class="col-2">
            <h2 id="h2-1">Hobbies</h2>
            <h2 id="h2-2">Hobbies</h2>
            <h2 id="h2-3">Hobbies</h2>
            <h2 id="h2-4">Hobbies</h2>
            <h2 id="h2-5">Hobbies</h2>
        </div>
        <div class="col-8">
            <?php foreach ($vars['hobbies'] as $hobby) : ?>
                <div class="row">
                    <p>
                    <div class="hobby_name"><?= $hobby->name ?></div>
                    <div><?= $hobby->description ?></div>
                    <p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>