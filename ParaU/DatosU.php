<!DOCTYPE html>
<html>
   <head>
       <title> Datos para la uni </title>
   </head>
<body>
<table border='1'>
        <thead>
            <tr>
            <th colspan="5"><h2>Solicitud de ingreso a la UNAM</h1></th>
            </tr>
        </thead>
<tbody>
    <tr align="center">
        <td><?php
        echo " ".$_POST["Apellidop"]."<br>";
   ?></td>
        <td><?php
        echo " ".$_POST["Apellidom"]."<br>";
   ?></td>
        <td colspan="2"><?php 
        echo " ".$_POST["nombre"]."<br>";
   ?></td>
    </tr>
    <tr align="center">
        <td><strong><u>Apellido paterno</u></strong></td>
        <td><strong><u>Apellido materno</u></strong></td>
        <td colspan="2"><strong><u>Nombre(s) </u></strong></td>

    </tr>
    <tr align="center">
        <td align="center"><strong><u>Sexo:</u></strong></td>
        <td><?php
        echo " ".$_POST["sexo"]."<br>";
   ?></td>
        <td align="center" ><strong><u>Edad:</u></strong></td>
        <td><?php
        echo " ".$_POST["edad"]."<br>";
   ?></td>
    </tr>
    <tr align="center">
        <td colspan="2"><?php
       echo " ".$_POST["Correo"]."<br>";
   ?></td>
        <td><?php
       echo " ".$_POST["Telefono"]."<br>";
   ?></td>
        <td><?php 
       echo " ".$_POST["Celular"]."<br>";
   ?></td>
    </tr>
    <tr align="center">
        <td colspan="2" align="center"><strong><u>Correo electronico</strong><u></td>
        <td><strong><u>Telefono</u></strong></td>
        <td colspan="2"><strong><u>Celular</u></strong></td>
    </tr>
    <tr>
    <td align="center"><strong><u>Escuela de procedencia:</u></strong></td>
        <td align="center"><?php
       echo " ".$_POST["escuela"]."<br>";
   ?></td>
   <td align="center"><strong><u>Promedio:</u></strong></td>
   <td align="center"><?php 
      echo " ".$_POST["prom"]."<br>";
   ?></td>
   </tr>
   <tr align="center">
   <td colspan="2"><strong><u>Primera opcion</u></strong> </td>
       <td colspan="3"><?php
       echo "".$_POST["p1"]."<br>";
       ?>
       </td>
   </tr>
   <tr align="center">
       <td colspan="2"><strong><u>Segunda opcion</u></strong> </td>
       <td colspan="3"><?php
       echo " ".$_POST["p2"]."<br>";
       ?> </td>
   </tr>

</tbody>

</html>
   
   