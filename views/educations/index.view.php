<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="row mt-2">
        <div class="col-2">
            <h2 id="h2-1">Education</h2>
            <h2 id="h2-2">Education</h2>
            <h2 id="h2-3">Education</h2>
            <h2 id="h2-4">Education</h2>
            <h2 id="h2-5">Education</h2>
        </div>
        <div class="col-8">
            <?php foreach ($vars['educations'] as $education) : ?>
                <p>
                <div class="edu_name"><?= $education->edu_name ?></div>
                <div><b>Start Date:</b> <?= $education->start_date ?></div>
                <div><b>End Date:</b> <?= $education->end_date ?></div>
                </p>
            <?php endforeach ?>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>


<?php require 'views/partials/footer.view.php' ?>