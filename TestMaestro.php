<?php

    require('Maestro.php');
    require ('bd.php');
    require('header.php');

    $maestro = new Maestro();

    $maestro->showGroups(13);

    require ('footer.php4');
?>