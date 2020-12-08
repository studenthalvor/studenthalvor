<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="root.css" alt="Root css-fil">
    <link rel="stylesheet" type="text/css" href="mystyle.css" alt="Main css-fil">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" alt="Import av Google-font">
    <title>DragQueen Valgomat 2k</title>
</head>
<body>
    <!-- Header -->
    <header>
    <?php include 'includes/nav.inc.php';?>
    </header>
  <!--   <header>
        <nav class="navigasjon">
            <a href="/" class="logo">DQ2020</a>
            <input class="menyknapp" type="checkbox" id="menyknapp" />
            <label class="menyikon" for="menyknapp"><span class="navicon"></span></label>
            <ul class="menu">
                <li><a href="index.html">Hjem</a></li>
                <li><a href="logginn.html">Logg inn</a></li>
                <li><a href="registrering.html">Registrering</a></li>
                <li><a href="avstemming.html">Avstemming</a></li>
                <li><a href="nominering.html">Nominering</a></li>
            </ul>
        </nav>
    </header> -->

    <!-- Main -->
    <!-- -Start. Denne kodebiten har blitt kodet av Kristian - Studentnr 233216 - Dato: 18.11.2020 -->
    <main>    

                      <section class="grid-main">
        <form class="reg-form">
            <section class="reg-desktop-bilde">
                <img src="images/jup.jpg" style=width:150px;height:477px>
            </section>
            <section class="reg-skjema" method=post oninput='pass2.setCustomValidity(pass2.value != pass1.value ? "Passordene stemmer ikke overens." : "")'>
                <h1 class="regh1">Velkommen til registrering</h1>      

            <h1>Registrering</h1>
            <h2>Form</h2>
            <p>
            Her kan man registrere seg!


            </p>
            <section class="grid-form">
                <form method=post oninput='pass2.setCustomValidity(pass2.value != pass1.value ? "Passordene stemmer ikke overens." : "")'>

                <section class="form-elements">

                    <label for="fnavn">Fornavn: </label>
                        <input type="text" id="fnavn" name="fnavn" placeholder="Skriv inn ditt fornavn">    
                    <label for="enavn">Etternavn: </label>
                        <input type="text" id="fnavn" placeholder="Skriv inn ditt etternavn">
                    <label for="epost">E-post: </label>
                        <input type="text" id="epost" required name="un" placeholder="Skriv inn din e-post">
                    <label for="pass1">Passord: </label>
                        <input type="password" id="pass1" name="pass1" placeholder="Skriv inn ditt passord">
                    <label for="pass2">Gjenta passord: </label>
                        <input type="password" id="pass2" name="pass2" placeholder="Gjenta ditt passord">
                    <a href="avstemming.html">
                        <input class="button" type=button value="Registrer bruker">
                    </a>
                </section>
                <!-- "type=button" blir senere "type=submit" -->       
            
            </form>
    </main>
    <!-- -Slutt -->
    <!-- Footer -->
    <footer>
    <?php include 'includes/footer.inc.php';?>
    </footer>
</body>
</html>