<?php require 'views/partials/header.view.php' ?>

<div class="main">
    <div class="row mt-2">
        <div class="col-2">
            <h2 id="h2-1">Jobs</h2>
            <h2 id="h2-2">Jobs</h2>
            <h2 id="h2-3">Jobs</h2>
            <h2 id="h2-4">Jobs</h2>
            <h2 id="h2-5">Jobs</h2>
        </div>
        <div class="col-8">
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="row">
                    <p>
                    <div class="job_name"><?= $job->job_name ?></div>
                    <div><b>Description</b> <br><?= $job->description ?></div>
                    <div><i>Type: <?= $job->type ?></i></div>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-2">
        </div>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>