<!DOCTYPE html>
<html>

<head>
    <title>Judiciary Cabinet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome/css/brands.css" rel="stylesheet">
    <link href="/fontawesome/css/solid.css" rel="stylesheet">

    <script src="/js/jquery-3.4.1.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JScript -->
    <script src="/js/script.js"></script>
</head>

<body>

    <nav id="navbar-example2" class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Judiciary Cabinet
            </a>

            <?php
            if (isset($_SESSION['type'])) {
            ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/respondent.php">Respondent Entry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/appellant.php">Appellant Entry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/case.php">Case Entry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/judge.php">Judge Data Entry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/adjourned.php">Adjourned Case Entry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/scripts/logout.php">Logout</a>
                        </li>
                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form> -->
                </div>
            <?php } else { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>

</body>

</html>