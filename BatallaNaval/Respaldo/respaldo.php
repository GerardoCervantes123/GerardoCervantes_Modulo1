<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>---Batalla Naval---</title>
</head>
<body>
    
        <?php
            $fila=13;
            $tamc=40;
            $i=0;
            $j=0;
            $k=1;
            $vidas=8; 
            $randomX;
            $randomY;
            $barcoMedioY="";
            $barcoMedioX="";
            $newBarcoY="";
            $newBarcoX="";
           
            if(isset($_POST["disparo"]))
            {
                $coordenadasX=$_POST["coordX"];
                $coordenadasY=$_POST["coordY"];
                $Unir= $coordenadasX . $coordenadasY;  
                $r=$_POST['c'];
                $c=$r . $Unir . ",";
            
                switch($coordenadasX){
                    case 'A':
                        $coordenadasX=1;
                    break;
                    case 'B':
                        $coordenadasX=2;
                    break;
                    case 'C':
                        $coordenadasX=3;
                    break;
                    case 'D':
                        $coordenadasX=4;
                    break;
                    case 'E':
                        $coordenadasX=5;
                    break;
                    case 'F':
                        $coordenadasX=6;
                    break;
                    case 'G':
                        $coordenadasX=7;
                    break;
                    case 'H':
                        $coordenadasX=8;
                    break;
                    case 'I':
                        $coordenadasX=9;
                    break;
                    case 'J':
                        $coordenadasX=10;
                    break;
                    case 'K':
                        $coordenadasX=11;
                    break;
                    case 'L':
                        $coordenadasX=12;
                    break;
                    case 'M':
                        $coordenadasX=13;
                    break;
                    default:
                    echo "indice invalido";
                    break;
                }
            }

            echo "<h1>Batalla Naval</h1>"; 
            echo "<br>";
            echo "<h2>Vidas:</h2>";
            for($i = 1; $i <= $vidas; $i++){
            
                echo "<img src='https://e1.pngegg.com/pngimages/929/425/png-clipart-minecon-1-minecraft-minecraft-raw-meat.png' width='20px' height='20px'>";
            }
           // echo $randomY;
            echo "<br>";
            //echo $randomX;
            echo "<br>";
            echo "<strong>" . "Historial de disparos:" . "<strong>" . "<br>";
            if(isset($_POST['c']))
            {
                echo $c. ","; 
            }else{
                $c="";
                echo "No has disparado aún";
            }
            echo "<br>" ." <br>". "Coordenada actual:";

            $coordenadasX= [" ", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $coordenadasY= [" ","1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"];
           
            $barcoX=$coordenadasX; //[$randomX];
            $barcoY=$coordenadasY; //[$randomY];

           
            // checa si existe post
             if(isset($_POST["coordX"]) && isset($_POST["coordY"]))
             {
                    $barcoX=$_POST['barcoX'];
                    $barcoY=$_POST['barcoY'];
                    $corX=$_POST["coordX"];
                    $corY=$_POST["coordY"];
                    $randOrienta=$_POST["orientacion"];
                    $newBarcoX=$_POST["newbarcoX"];
                    $newBarcoY=$_POST["newbarcoY"];
                    $barcoMedioX=$_POST["barcoMedioX"];
                    $barcoMedioY=$_POST["barcoMedioY"];

                    echo $barcoX;
                    echo "<br>";
                    echo $barcoY;
                    $coordenadas="$corX$corY";
                    echo "<br>";
                    echo "C: " .$coordenadas;

                    //tabla cuando ya entran los datos
                    echo "<table border=1>";

                    // tabla vacía
                    echo "<tr>";
                    // para fila de coordenadas en x
                    for($i=0; $i<=$fila; $i++)
                        {
                            echo "<td>";
                                echo $coordenadasX[$i];  
                            echo "</td>";
                        }
                    echo "</tr>";
                    
                    // este for hace las filas de la tabla
                    for($i=0; $i<$fila; $i++)
                    {   
                        echo "<tr>";
                            echo "<td>";
                                // escribe coordenadas en y cada vez que hay una nueva linea
                                echo $coordenadasY[$i+1];
                            echo "</td>";
                        // este for hace cada casilla
                        for($j=0; $j<$fila; $j++)
                        {                        
                            echo "<td>";
                            // mis x son mis y y mis y son mis x    
                                if($coordenadasX[$j+1]==$corX && $coordenadasY[$i+1]==$corY)
                                {
                                    echo $barcoMedioX . "<br>" . $barcoMedioY . "<br>" . $newBarcoX . "<br>" . $newBarcoY . "<br>";                          
                                    
                                    if(($corX== $barcoX && $corY == $barcoY) || ($corX == $barcoMedioX && $corY == $barcoMedioY) || ($corX == $newBarcoX && $corY == $newBarcoY))
                                    {
                                        echo '<img src="https://www.naturgy.com/filesImagesCOM/energia_servicio_humanidad_fuego.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                                    
                                    }
                                    else
                                    {
                                        echo '<img src="https://www.eneos.mx/wp-content/uploads/2019/06/paloma-y-tache-png-2.png" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                                    }
                                    
                                }
                                else
                                    echo '<img src="https://okdiario.com/img/2017/05/08/mar-655x368.png" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">'; 

                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo $randOrienta;
                echo "</table>";

        
             }
             
             else
             {
                    
               /* $coordenadasX= [" ", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
                $coordenadasY= [" ","1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"];*/
           
                 
                $randomX=rand(1, $fila);
                $randomY=rand(1, $fila);
                // 1 arriba, 2 abajo, 3 derecha y 4 izquierda
                echo "<br>";
                $randOrienta=rand(1,4);
                echo $randOrienta;
                echo "<br>";
                $barcoX=$coordenadasX[$randomX];
                $barcoY=$coordenadasY[$randomY];
                $var=array_search($barcoX, $coordenadasX);
                $var1=array_search($barcoY, $coordenadasY);
                $newBarcoY=$var1;
                $newBarcoX=$var;
                $barcoMedioY=$var1;
                $barcoMedioX=$var;

                if($randOrienta == 1 && $newBarcoY >= 3) /*&& $barcoMedioY-2 < intval($coordenadasY[1]))*/
                {
                        $newBarcoY-=2;
                        $barcoMedioY-=1;
                        echo '<img src="https://www.naturgy.com/filesImagesCOM/energia_servicio_humanidad_fuego.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';

                }
                elseif($randOrienta == 2 && $newBarcoY <= 11)
                {
                        $newBarcoY+=2;
                        $barcoMedioY+=1;
                        echo '<img src="https://www.naturgy.com/filesImagesCOM/energia_servicio_humanidad_fuego.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';

                }
                elseif($randOrienta == 3 && $newBarcoX <= 11)
                {
                        $newBarcoX+=2;
                        $barcoMedioX+=1;
                        echo '<img src="https://www.naturgy.com/filesImagesCOM/energia_servicio_humanidad_fuego.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                        
                }
                else/*($randOrienta == 4 && $barcoX-=2 < $coordenadasX[1])*/
                {
                        $newBarcoX-=2;
                        $barcoMedioX-=1;
                        echo '<img src="https://www.naturgy.com/filesImagesCOM/energia_servicio_humanidad_fuego.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';

                }

                    echo $var . "<br>";
                    echo $newBarcoX . "<br>";
                    echo $barcoMedioX . "<br>";
                    echo $var1 . "<br>";
                    echo $barcoMedioY;
                    echo $newBarcoY . "<br>"; 
                    $barcoMedioX=$coordenadasX[$barcoMedioX];
                    $newBarcoX=$coordenadasX[$newBarcoX];    

                echo "X: " .$barcoX;
                echo "<br>";
                echo "Y: " .$barcoY;
                echo "<br>";

                //if($randOrienta == 1 && )

                echo "<table border=1>";

                // tabla vacía
                echo "<tr>";
                // para fila de coordenadas en x
                for($i=0; $i<=$fila; $i++)
                    {
                        echo "<td>";
                            echo $coordenadasX[$i];  
                        echo "</td>";
                    }
                echo "</tr>";
                // este for hace las filas de la tabla
                for($i=0; $i<$fila; $i++)
                {   
                    echo "<tr>";
                        echo "<td>";
                            // escribe coordenadas en y cada vez que hay una nueva linea
                            echo $coordenadasY[$i+1];
                        echo "</td>";
                    // este for hace cada casilla
                    for($j=0; $j<$fila; $j++)
                    {                        
                        echo "<td>";
                             echo '<img src="https://okdiario.com/img/2017/05/08/mar-655x368.png" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">'; 
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";
             }
             $arreglo=array();
             //arraypush para rellenar el arreglo vacío
              
            //formulario
            //var_dump($_POST);
            //var_dump($c);
            echo '<form action="juegofinal.php" method="POST">';
            echo "<br><br>";
            echo "<label for='coordX'>";
                echo "Coordenada en X (letra): <input type='text' name='coordX' required>";
            echo "</label>";
            echo "<label for='coordY'>";
                echo "Coordenada en Y (numero) : <input type='text' name='coordY' required>";
            echo "</label>";
            echo "<button type='submit' name='disparo'>Dispara</button>";
            echo "<input type='hidden' name='c' value=$c>";
            echo "<input type='hidden' name='barcoX' value='$barcoX'>";
            echo "<input type='hidden' name='barcoY' value='$barcoY'>";
            echo "<input type='hidden' name='barcoMedioY' value='$barcoMedioY'>";
            echo "<input type='hidden' name='barcoMedioX' value='$barcoMedioX'>";
            echo "<input type='hidden' name='newbarcoY' value='$newBarcoY'>";
            echo "<input type='hidden' name='newbarcoX' value='$newBarcoX'>";
            echo "<input type='hidden' name='orientacion' value='$randOrienta'>";

            echo '</form>';
           
           
            
        ?>   
    
</body>
</html>
