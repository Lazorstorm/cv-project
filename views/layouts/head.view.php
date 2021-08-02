<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $_ENV['APP_NAME'] ?></title>

    <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="public/css/main.css" />
    <link rel="stylesheet" href="public/js/main.js" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body class="fadeOnLoad">
    <div class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/users">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/educations">Education</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/jobs">Jobs</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/skills">Skills</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/hobbies">Hobbies</a>
                    </li>
                </ul>
                <form method="POST" action="/search" class="my-2 my-lg-0" name="search-form" id="search-form">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>