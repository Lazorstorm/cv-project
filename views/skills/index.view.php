<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="row mt-2">
        <div class="col-2">
            <h2 id="h2-1">Skills</h2>
            <h2 id="h2-2">Skills</h2>
            <h2 id="h2-3">Skills</h2>
            <h2 id="h2-4">Skills</h2>
            <h2 id="h2-5">Skills</h2>
        </div>
        <div class="col-8">
            <?php foreach ($vars['skills'] as $skill) : ?>
                <p>
                <div><?= $skill->skill_name ?> - <?= $skill->skill_level ?></div>
                </p>
            <?php endforeach ?>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>