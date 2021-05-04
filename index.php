<?php
  $conexion=mysqli_connect('localhost','root','','expedientemedico');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=S, initial-scale=1.0">
  <link rel="stylesheet" href="librerias/bootstrap.css">
  <link rel="stylesheet" href="librerias/dataTables.bootstrap4.min.css">
  <title>Document</title>
</head>
<body>
  <table id="tablaObjetivo" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>telefono</th>
        <th>E mail</th>
        <th>Fecha de nacimiento</th>
        <th>Sexo</th>
        <th>Nacionalidad</th>
      </tr>
    </thead>
    <tbody>
      <?php
          $sql="SELECT * FROM t_personas";
          $resultado=mysqli_query($conexion,$sql);
          while ($mostrar=mysqli_fetch_array($resultado)) {
      ?>
      <tr>
        <td><?php echo $mostrar['nombre'];?></td>
        <td><?php echo $mostrar['apellido_paterno'];?></td>
        <td><?php echo $mostrar['apellido_materno'];?></td>
        <td><?php echo $mostrar['telefono'];?></td>
        <td><?php echo $mostrar['email'];?></td>
        <td><?php echo $mostrar['fecha_de_nacimiento'];?></td>
        <td><?php echo $mostrar['sexo'];?></td>
        <td><?php echo $mostrar['nacionalidad'];?></td>
      </tr>
      <?php
          }
      ?>
    </tbody>
  </table>
  <script src="librerias/jquery-3.5.1.js"></script>
  <script src="librerias/jquery.dataTables.min.js"></script>
  <script src="librerias/dataTables.bootstrap4.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#tablaObjetivo').DataTable();
    });
  </script>