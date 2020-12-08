<?php

/* Funkjson for å sjekke om bruker kom inn på siden på riktig måte, om han ikke gjorde det send han tilbake til startsiden */
if (isset($_POST['login-knapp'])){
    echo "Her kommer det en profilside/dashbord eller lignenede";
}
else{
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
    window.location='../index.html';
    </script>";
}
