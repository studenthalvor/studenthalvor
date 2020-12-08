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

    <!-- -Start. Denne kodebiten har blitt kodet av Halvor - Studentnr 233208 - Dato: 16.11.2020 -->



    <!-- Main -->
    <main>
        <section class="grid-main">
            <article class="sideskiller">
                <section id="nom-innledning">
                    <h1>Nominering:</h1>
                    <p>
                        Her kan du nominere en kandidat du tror kan vinne årets DragQueen!
                    </p>
                </section>
                <h2>Nominer en person:</h2>
                <container id="nom-wrapper">
                    <section id="nom-formwrapper">
                        <section id="venstrekolonne">
                            <form>
                                <label>Artistnavn:</label>
                                <label>Fornavn:</label>
                                <label>Etternavn:</label>
                        </section>
                        <section id="høyrekolonne">
                            <input type="text" id="sokekriterie" name="sokekriterie" style="width: 130px" alt="">
                            <input type="text" id="sokekriterie" name="sokekriterie" style="width: 130px" alt="">
                            <input type="text" id="sokekriterie" name="sokekriterie" style="width: 130px" alt="">
                            </form>
                        </section>
                    </section>
                    <section id="nom-knappwrapper">
                        <button>Nominer</button>
                    </section>
                </container>
            </article>
            <article class="sideskiller">
                <h2>Nominasjonsforslag:</h2>
                <section id="nominasjonsforslag">

                    <div id="forslag">

                        <table>
                            <th>
                                Artistnavn
                            </th>
                            <th>
                                Fornavn
                            </th>
                            <th>
                                Etternavn
                            </th>
                            <th>

                            </th>
                            <tr>
                                <td>
                                    Piccolo Dolores
                                </td>
                                <td>
                                    Halvor
                                </td>
                                <td>
                                    Blindheim
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </section>
            </article>
            <article class="sideskiller">
                <h2>Nominerte queens:</h2>
                <section id="nom-tablewrapper">
                    <section id="nominasjon-a">
                        <form id="nominasjonsform">
                            <select id="sokekriterievalg" alt="Rullgardin for valg av søkekriterie">
                                <option value="1" alt="Artistnavn">Artistnavn</option>
                                <option value="2" alt="Fornavn">Fornavn</option>
                                <option value="3" alt="Etternavn">Etternavn</option>
                            </select>
                            <input type="text" id="sokekriterie" name="sokekriterie" style="width: 130px" alt="">
                            <button alt="Søk på nominert etter fornavn/etternavn">Søk</button>
                            <button alt="Vis alle nominerte">Vis alle</button>
                        </form>
                    </section>
                    <section id="nominasjon-b">

                        <table>
                            <th>
                                Artistnavn
                            </th>
                            <th>
                                Fornavn
                            </th>
                            <th>
                                Etternavn
                            </th>
                            <th>

                            </th>
                            <tr>
                                <td>
                                    Piccolo Dolores
                                </td>
                                <td>
                                    Halvor
                                </td>
                                <td>
                                    Blindheim
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Vulva Rektalis
                                </td>
                                <td>
                                    Kristian
                                </td>
                                <td>
                                    Singsaas
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Miss Behave
                                </td>
                                <td>
                                    Henrik
                                </td>
                                <td>
                                    Hansen
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Carpe Scrotum
                                </td>
                                <td>
                                    Ketil
                                </td>
                                <td>
                                    Ustad
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Benny Banalklang
                                </td>
                                <td>
                                    Edvin
                                </td>
                                <td>
                                    Handeland
                                </td>
                                <td>
                                    <a href="#">Velg</a>
                                </td>
                            </tr>
                        </table>

                    </section>
                </section>
        </section>

        </article>

    </main>
    <!-- -Slutt -->
    <!-- Footer -->
    <footer>
    <?php include 'includes/footer.inc.php';?>
    </footer>

</body>

</html>