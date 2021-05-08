<!DOCTYPE html>
<html lang="en">
<head>
    <title>AJEDREZ</title>
</head>
<body>
<h1>AJEDREZ</h1>
    <?php
    /*Perdon por entregar este ejercicio tan tarde, tuve algunos compromisos y por falta de tiempo no me pude dedicar a terminar el trabajo*/
        //Se declaran las variables iniciales "x" servira para definir el tamaño del tablero
        $x=7;
        $y=1;
        //Se inicia una tabla para poder introducer la imagen
        echo "<table border=1>";
            echo "<tbody>";
                //se usaran 1 for para desplegar la tabla
                for ($i=0; $i<$x; $i++){
                    echo "<tr>";
                    //Se usara otro anidado para
                        for ($j=0; $j<$x; $j++){
                            echo "<td>";
                            //Se usa un if donde si se cumple que 1%2==1 se muestra la imagen balnca y se aumenta y, en caso contrario manda un else 
                                if ($y%2 == 1){
                                    echo "<img src='statics/blanco.jpg' width=100>";
                                    $y++;
                                    //Aquí se despliega la imagen negra y se aumenta y
                                }else {
                                    echo "<img src='statics/negro.jpg' width=100>";
                                    $y++;
                                }
                            echo "</td>";
                        }
                        //Cuando x%2 sea identico a 0 se detendra la tabla
                        if ($x%2==0) {
                            $y++;    
                        }
                        
                    echo "</tr>";
                }
            echo"</tbody>";
        echo "</table>";
    ?>    
</body>
</html>