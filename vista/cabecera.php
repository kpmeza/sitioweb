<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
<script>
  function prueba(){
    $.ajax({
        type :"post",
        url : "../procesos.php",
        data : "",
        success : function(cont) {
            $("#pantalla").html(cont);
           
        }
      });
    
}
function prueba2(){
  alert("ok")
}
</script>  
 


</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Zona Administrativa</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link"  onclick="prueba2()" href="#">Usuario1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" onclick="prueba()" href="#">Productos1</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Proveedor
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Registro</a>
        <a class="dropdown-item" href="#">Consulta</a>
        <a class="dropdown-item" href="#">Ediccion</a>
      </div>
    </li>
  </ul>
</nav>
<br>

  
<div class="container" id="pantalla">
    