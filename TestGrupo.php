<?php

    require ('Alumno.php');
    require ('Grupo.php');
    require ('bd.php');
    require ('header.php');

    $alumno = new Alumno();
    $grupo = new Grupo();


    if (isset($_GET['accion'])){
     switch($_GET['accion']){
         case 1:
             echo "<div class=\"alert alert-info\" role=alert>
                        Alumno asignado exit&oacute;samente.
                    </div>";
             break;
         case 2:
             $grupo->desasignarAlumnoGrupo($_GET['alumno_id']);
             echo "<div class=\"alert alert-danger\" role=alert>
                        Alumno desasignado exit&oacute;samente.
                    </div>";
             break;
     }
    }

    echo  "<div class=row>";
        echo "<div class=col-md-4>Columna IZQ (1/3)</div>";
        echo "<div class=col-md-4>";
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
                echo "<form action=asignar-grupo.php method=POST>";
                $alumno->readAlumno();
                $grupo->readGrupo();
                echo "<tr><td align=center><input type=submit name=opcion value=Agregar></td></tr>";
                echo "</form>";
            echo "</table>";
            echo "</div>";
        echo "</div>";
        echo "<div class=col-md-4>Columna DER (3/3)</div>";
    echo "</div>";

    require ('footer.php');
?>