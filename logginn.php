<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="root.css" alt="Root css-fil">
    <link rel="stylesheet" type="text/css" href="mystyle.css" alt="Main css-fil">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"
        alt="Import av Google-font">
    <title>DragQueen Valgomat 2k</title>
</head>

<body>

    <!-- Header -->
    <header>
    <?php include 'includes/nav.inc.php';?>
    </header>


    <!-- Main -->
    <main>
        <section class="grid-main">

            <!--        <a href="index.html">Index</a>
            <a href="avstemming.html">Avstemming</a>
            <a href="logginn.html">Loginn</a>
            <a href="nominering.html">Nominering</a>
            <a href="registrering.html">Registreering</a> -->

            <section class="grid-login-avatar">
                <section id="avatar-bilde"><img id="loginn-avatar" src="https://camu.in/assets/img/avatar1.svg"
                        alt="login avatar">
                </section>
                <section id="Login-overskrift">
                   <!--  <h1>Logg inn</h1> -->
                </section>
            </section>

            <section class="logginn-wrapper">
                <section id="logginn-a">
                    <form action="includes/login.inc.php" method="post">
                        <input class="loggin-input"  type="text" id="epost" placeholder="E-post/Brukernavn">
                </section>
                <section id="logginn-b">
                    <input class="loggin-input" type="password " id="loginn-pasword " name="loginn-pasword " placeholder="Passord" required>
                </section>
                <section id="logginn-c">
                    <input name="login-knapp" class="button loggin-input" id="logginn " type="submit" value="Logg inn ">
                    <input class="button loggin-input" id="glemtpassord " type="submit" value="Glemt passord ">
                </section>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <footer>
    <?php include 'includes/footer.inc.php';?>
    </footer>
</body>

</html>