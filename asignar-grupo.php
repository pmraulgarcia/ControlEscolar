<?php

    //var_dump($_POST);
    require ('Grupo.php');

    $grupo = new Grupo();

    $ultimo = $_POST['ultimo'];
    $id_grupo = $_POST['grupo'];

    for ($x=1; $x<=$ultimo; $x++){
        $temp = "al".$x;
        if(isset($_POST[$temp])){
            $grupo->asignarAlumnoGrupo($x,$id_grupo);
        }
    }

?>

<meta http-equiv="refresh" content="0; url=TestGrupo.php?accion=1" />