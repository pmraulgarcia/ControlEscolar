<?php

class Usuario {

        private $Id;
        private $Nombre;
        private $ApellidoPaterno;
        private $ApellidoMaterno;
        private $Telefono;
        private $Calle;
        private $NumeroExterior;
        private $NumeroInterior;
        private $Colonia;
        private $Municipio;
        private $Estado;
        private $CP;
        private $Correo;
        private $Usuario;
        private $Contrasena;
        private $Nivel;
        private $Estatus;

        public function readUsuarioG(){
            //echo "<br><br>readusuarioG";
            $sql01 = "SELECT * FROM usuario WHERE estatus = 1 ORDER BY ApellidoPaterno ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            echo "<div class=table-responsive>";
             echo "<table class=\"table table-striped\">";
                echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
                echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th><tr>";
            while($field = mysql_fetch_array($result01)){
                $this->Id = $field['id'];
                $this->Nombre = utf8_decode($field['Nombre']);
                $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
                $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
                $this->Nivel = $field['Nivel'];
                switch($this->Nivel){
                    case 1:
                            $type = "Administrador";
                        break;
                    case 2:
                            $type = "Maestro";
                        break;
                    case 3:
                            $type = "Alumno";
                        break;
                }
                echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
            }
            echo "</table>";
            echo "</div>";
        }

        public function readUsuarioS($id){
            //echo "<br><br>readusuarioS";
            $sql01 = "SELECT * FROM usuario WHERE estatus = 1 AND id = $id ORDER BY ApellidoPaterno ASC";
            $result01 = mysql_query($sql01)or die("Error $sql01");
            echo "<div class=table-responsive>";
            echo "<table class=\"table table-striped\">";
            echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
            echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th><tr>";
            while($field = mysql_fetch_array($result01)){
                $this->Id = $field['id'];
                $this->Nombre = $field['Nombre'];
                $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
                $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
                $this->Nivel = $field['Nivel'];
                switch($this->Nivel){
                    case 1:
                        $type = "Administrador";
                        break;
                    case 2:
                        $type = "Maestro";
                        break;
                    case 3:
                        $type = "Alumno";
                        break;
                }

                echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";

            }
                echo "</table>";
            echo "</div>";
        }
        public function createUsuario($nombre,$apellidop,$apellidom,$nivel){
            //echo "<br>createUsuario";
            $insert01 = " INSERT INTO usuario (Nombre,ApellidoPaterno,ApellidoMaterno,Nivel,Estatus)
                                 VALUES('$nombre','$apellidop','$apellidom',$nivel,1)";
            $execute01 = mysql_query($insert01) or die("Error  $insert01");
        }
        public function updateUsuario($id,$nombre,$apellidop,$apellidom,$nivel){
            //echo "<br>updateUsuario";
            $delete01 = " UPDATE usuario SET Nombre='$nombre', ApellidoPaterno='$apellidop',
            ApellidoMaterno = '$apellidom', Nivel='$nivel' WHERE id = $id";
            $execute01 = mysql_query($delete01) or die("Error  $delete01");
        }
        public function deleteUsuario($id){
            //echo "<br>deleteUsuario";
            $delete01 = " DELETE FROM alumno_grupo WHERE id = $id";
            $execute01 = mysql_query($delete01) or die("Error  $delete01");
        }

}





