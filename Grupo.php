<?php

    require ('bd.php');

    class Grupo {

        private $id;
        private $nombre;
        private $avatar;
        private $orden;
        private $estatus;

        public function createGrupo(){
            echo "<br>Create Grupo";
        }
        public function readGrupoG(){
            echo "<br>Read Grupo G";
        }
        public function readGrupoS(){
            echo "<br>Read Grupo S";
        }
        public function deleteGrupo(){
            echo "<br>Delete Grupo";
        }
        public function updateGrupo(){
            echo "<br>Update Grupo";
        }
        public function asignarAlumnoGrupo($alumno_id,$grupo_id){
                $insert01 = " INSERT INTO alumno_grupo (id_alumno, id_grupo)
                                  VALUES($alumno_id,$grupo_id)";
                $execute01 = mysql_query($insert01) or die("Error  $insert01");
        }
        public function desasignarAlumnoGrupo($alumno_id){
            $delete01 = " DELETE FROM alumno_grupo WHERE id_alumno = $alumno_id";
            $execute01 = mysql_query($delete01) or die("Error  $delete01");
        }
        public function readGrupo(){
            echo "<tr><td align=center><select name=grupo>";
            $sql01 = "SELECT * FROM grupo WHERE estatus = 1 ORDER BY nombre ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            while($field = mysql_fetch_array($result01)){
                $opcion = utf8_decode($field['nombre']);
                echo "<option value=$field[id]>".$field['id']." - ".$opcion."</option>";
            }
            echo "</select></td></tr>";
        }
    }