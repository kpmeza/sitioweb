<?php
include("vista/cabecera.php")?>
<?php  
require("conexion.php");
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$codigo=(isset($_POST['codigo']))?$_POST['codigo']:"";
$conexion = retornarConexion();
session_start();
$nombre=(isset($_POST['nombre']))?$_POST['nombre']:"";
echo $nombre;

    
    
    switch ($accion) {
      case "registro":
        $respuesta = mysqli_query($conexion, "INSERT INTO `cursos`(`codigo`, `nombrecurso`) VALUES (NULL,'$nombre')");
        break;
      case "eliminar":
        $respuesta = mysqli_query($conexion,"DELETE FROM `cursos` WHERE codigo=$codigo");
        break;
      
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    

$respuesta=("SELECT * FROM `cursos`");

?>
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
  <form method="post">
    Ingrese su nombre:
    <input type="text" name="nombre">
    <br>
    <input type="submit" name="accion" value="registro">
  </form>
  <table>
    <thead>
      <tr>
        <th>codigo</th>
        <th>nombre</th>
        <th>accion</th>
      </tr>
    </thead>
    <tbody>
      <?php
    foreach ($conexion->query($respuesta) as $lista) { ?>
      <tr>
        <th><?php echo $lista['codigo']; ?></th>
        <th><?php echo $lista['nombrecurso']; ?></th>
        <th><form method="post">
        <input type="hidden" name="codigo" id="codigo" value="<?php echo $lista['codigo']?> ">  
        <input type="submit" name="accion" value="eliminar"></form></th>
      </tr>
    </tbody>
    <?php } ?>
  </table>
  
  <?php
include("vista/pie.php")?>