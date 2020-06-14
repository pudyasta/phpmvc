<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About index</title>
    <link rel="stylesheet" href="<?=BASEURL?>/css/bootstrap.css">
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
            <a class="nav-link" href="<?=BASEURL?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=BASEURL?>/about">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=BASEURL?>/about/page" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=BASEURL?>/mahasiswa" tabindex="-1" aria-disabled="true">Mahasiswa</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>