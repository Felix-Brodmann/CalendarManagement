<?php
    session_start();

    if(isset($_SESSION['wrongEmail'])) {
        if ($_SESSION['wrongEmail'] == "true"){
        echo '<style type="text/css">
        .wrongEmail {
            visibility: visible !important;
        }
        </style>';
        }
    }
    if(isset($_SESSION['wrongPassword'])) {
        if ($_SESSION['wrongPassword'] == "true"){
        echo '<style type="text/css">
        .wrongPassword {
            visibility: visible !important;
        }
        </style>';
        }
    }

    session_destroy();
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="row">
        <div class="col-1 col-d-4 placeholder"></div>
        <a href="index.html"><img src="logo.png" alt="logo" class="col-10 col-d-4"></a>
        <div class="col-1 col-d-4 placeholder"></div>
    </div>
    <div class="row col-12 col-d-12" style="height: 2px;"></div>

    <div class="row">
        <div class="col-1 col-d-5 placeholder"></div>
        <form class="col-10 col-d-2" action="loginCheck.php" method="post">

            <div>
                <label class="questionnaire"><p>E-Mail</p></label>
                <input type="email" name="email" class="input">
            </div>
            <div>
                <label class="questionnaire"><p>Passwort</p></label>
                <input type="password" name="password" class="input">
            </div>

            <div style="height: 25px;"></div>

            <input class="submit" type="submit" value="Login">
        </form>
        <div class="col-1 col-d-5 placeholder"></div>
    </div>
    <div class="row">
        <div class="col-1 col-d-4 placeholder"></div>
        <p class="col-10 col-d-4 wrongEmail">Bitte überprüfen sie ihre Email!</p>
        <div class="col-1 col-d-4 placeholder"></div>
    </div>
    <div class="row">
        <div class="col-1 col-d-4 placeholder"></div>
        <p class="col-10 col-d-4 wrongPassword">Bitte überprüfen sie ihr Passwort!</p>
        <div class="col-1 col-d-4 placeholder"></div>
    </div>
</body>
</html>