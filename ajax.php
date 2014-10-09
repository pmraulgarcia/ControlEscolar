<script src="jquery.min.js"></script>

<?php
    //Comentario Ejemplo
    require('bd.php');
    require ('Materia.php');
    require ('header.php');
    $materia = new Materia();
    $id_maestro = $_POST['idmae'];
    $materia->datosMaestro($id_maestro);
    $materia->materiasAsignadas($id_maestro);
    $materia->asignarMateriaMaestro($id_maestro);
    require ('footer.php');
?>



