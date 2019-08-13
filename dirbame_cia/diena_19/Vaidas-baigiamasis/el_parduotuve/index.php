<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <!-- galimos klaidos -->
        <!-- blogas kelias iki failo -->
        <!-- "/" ne i ta puse -->
        <!-- neuzdarete ">" -->
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>


        <!-- <nav class="float-kaire">
            <ul>
                <li class="float-kaire"> <a href="#">home</a> </li>
                <li class="float-kaire"> <a href="#">our team</a> </li>
                <li class="float-kaire"> <a href="#">projects</a> </li>
                <li class="float-kaire"> <a href="#">contact</a> </li>
                <div class="isjungiu-float"> </div>
            </ul>
        </nav> -->

        <div class="container">
            <div class="top-header">
        <div class="container d-flex justify-content-between">
            <div class="top-menu-left d-flex justify-content-center align-items-center">

                <nav class="float-kaire">

                        <ul>
                            <li class="float-kaire">
                                <a href=" ">Pristatymas</a>
                            </li class="float-kaire">

                            <li class="float-kaire">
                                <a href=" ">Apmokėjimas</a>
                            </li class="float-kaire">

                            <li class="float-kaire">
                                <a href=" ">Informacija</a>
                            </li class="float-kaire">

                            <div class="isjungiu-float"> </div>
                        </ul>

                </nav>

            </div>
            <div class="top-menu-center d-flex justify-content-center align-items-center">
                <span>Susisiekite <b>+370 674 03397</b> </span>
            </div>
            <div class="top-menu-right">
                <ul>
                    <li>
                        <img src="img/marker.png" <img src="..."  alt="Kontaktai">
                        <a href="/kontaktai/">Kontaktai</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
            <header class="row  aukstis-100  bg-info">
                <div class="col-md-12   bg-warning">
                    Header
                </div>
            </header>

            <div class="row  mt-2 mb-2">
                <nav class="col mr-2 aukstis-300   bg-warning">
                    Nav
                </nav>
                <main class="col-md-10  aukstis-300   bg-warning">
                    <h3> Visos mano prekes </h3>
                </main>


            </div>

            <footer class="row aukstis-100  bg-warning">
                <div class="col-md-12">
                    &#169; Copyright 2019
                </div>
            </footer>

        </div>




            <p>
                <?php
                include('el-parduotuves-db-prekes-functions.php');


                ?>


<a class="btn btn-success" href="page-prekes-form.php"> Nauja preke </a>




<?php

//--------------------------------------------su while ciklu-------


                    $visosPrekes = getPrekes(); // gryzta MySQL objektas, ne masyvas (jo viduje yra daug prekiu)
                    // print_r($visosPrekes);

                    $prekesARRAY = mysqli_fetch_assoc( $visosPrekes );  // array masyvas
                    // print_r($prekesARRAY);

                    while ($prekesARRAY){
                        echo "<ul>" .
                                    "<li>" .
                                        "<h4>" .
                                            "<a href='page-prekes.php?nr={$prekesARRAY['id']}'>" .
                                                $prekesARRAY['id'] . " " .
                                                $prekesARRAY['pavadinimas'] . " " .
                                                // $prekesARRAY['aprasymas'] . " " .
                                                // $prekesARRAY['kaina'] . " " .
                                                // $prekesARRAY['nuolaida'] . " " .
                                                // $prekesARRAY['pozicija'] . " " .
                                                // $prekesARRAY['kiekis'] . " " .
                                                // $prekesARRAY['ar_rodyti'] .
                                                "</a>" . " " .
                                                "<a class='btn bg-warning text-white' href='page-prekes-update-form.php?nr={$prekesARRAY['id']}'> KEISTI </a>" . " " .
                                                "<a class='btn bg-danger text-white' href='preke-delete.php?nr={$prekesARRAY['id']}'> DELETE </a>" . " " .
                                        "</h4>" .
                                    "</li>" .
                            "</ul>" .
                            "<hr />";
                        $prekesARRAY = mysqli_fetch_assoc($visosPrekes);
                    }

//---------------------------------------------------------
 ?>

            </p>


        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js">

        </script>


    </body>
</html>