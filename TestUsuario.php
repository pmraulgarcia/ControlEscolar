<?php

    require ('Usuario.php');
    require ('bd.php');
    require ('header.php');



    $usuario = new Usuario();

    /*$usuario->readUsuarioG();
    $usuario->readUsuarioS(2);
    $usuario->createUsuario("Raul","G","M",1);
    $usuario->updateUsuario(5,"Arturo","M","G",2);
    $usuario->deleteUsuario(1);*/





    if (isset($_POST['submit'])) {
        switch($_POST['submit']){
            case "Alta":
                echo "<div class=\"alert alert-danger\" role=alert>";
                echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "</div>";
                $usuario->createUsuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
                break;
            case "Borrar":
                echo "<div class=\"alert alert-info\" role=alert>";
                echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "</div>";
                $usuario->deleteUsuario($_POST['idb']);
                break;
            case "Modificar":
                echo "<div class=\"alert alert-success\" role=alert>";
                echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "</div>";
                $usuario->updateUsuario($_POST['idm'],".$_POST[nombre].",".$_POST[apellidop].",".$_POST[apellidom].",$_POST['nivel']);
                break;
            case "Buscar":
                echo "<div class=\"alert alert-warning\" role=alert>";
                echo "<br>Bot&oacute;n: " . $_POST['submit'];
                echo "</div>";
                $usuario->readUsuarioS($_POST['idbuscar']);
                break;
        }

    }

    echo "
        <div class=table-responsive>
            <form name=alumno action=TestUsuario.php method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Nombre(s):</td><td><input type=text name=nombre> </input></td> </tr>
                    <tr> <td>Apellido Paterno:</td><td><input type=text name=apellidop> </input></td> </tr>
                    <tr> <td>Apellido Materno:</td><td><input type=text name=apellidom> </input></td> </tr>
                    <tr><td>Nivel:</td><td><select name=nivel>
                        <option value=1> Administrador</option>
                        <option value=2> Maestro</option>
                        <option value=3> Alumno</option>
                        </select></td></tr>
                    <tr><td colspan=2 align=center><input type=submit name=submit value=Alta> </input></td></tr>
                    <tr><td>ID: <input type=text name=idm></td><td><input type=submit name=submit value=Modificar> </input></td></tr>
                    <tr><td>ID: <input type=text name=idb></td><td><input type=submit name=submit value=Borrar> </input></td></tr>
                    <tr><td>ID: <input type=text name=idbuscar></td><td><input type=submit name=submit value=Buscar> </input></td></tr>
                </table>
            </form>
        </div>
    ";

    $usuario->readUsuarioG();

    require ('footer.php');
?>