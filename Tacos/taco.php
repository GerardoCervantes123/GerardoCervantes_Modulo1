<?php
/*
Taco al pastor (Que “A” aparezca más veces que las demás )
Taco de suadero (Que “B” aparezca más veces que las demás)
Taco de barbacoa (Que “C” aparezca más veces que las demás)
Taco Lagunero (Que “D” aparezca más veces que las demás)
Taco campechano (“A” y “B” aparecen el mismo número de veces)
Taco de carnitas (“B” y ”C” aparecen el mismo número de veces)
Taco bell (“C” y ”D” aparecen el mismo número de veces)
Taco light (“A” y “D” aparecen el mismo número de veces)
Taco placero (“A” y ”C” aparecen el mismo número de veces)
Taco de mixiote (“B” y ”D” aparecen el mismo número de veces)
Taco de sal (Si no es ninguna de las opciones anteriores)*/

//Se declaran variables según para cada una de las posibles respuestas
$opcA=0;
$opcB=0;
$opcC=0;
$opcD=0;
    
    //Se usa un foreach para tomar las raices de cada arreglo
    foreach($_POST as $taco)
    {
        if($taco == "A"){
            $opcA++;
        }elseif($taco == "B"){
            $opcB++;
        }elseif($taco == "C"){
            $opcC++;
        }elseif ($taco == "D") {
            $opcD++;
        }
    }
    //Se coloca un echo fuera del if para no tener que ponerlo dentro de cada elemento y salga en general 
     echo "<h2>Eres un:</h2>";
    
    /*Se usa un primer if con el caso uno donde a es mayor que todas las posibilidades, y luego elseif indicando las otras posibilidades, 
    y finalmente en caso de que ninguna de estas posibilidades se cumpla se usa un else mandando un mensaje*/
    if($opcA>$opcB && $opcA>$opcC && $opcA>$opcD)
    {
        echo "Taco al pastor";
    }elseif ($opcB>$opcA && $opcB>$opcC && $opcB>$opcD) {
        echo "Taco de suadero";
    }elseif ($opcC>$opcA && $opcC>$opcB && $opcC>$opcA) {
        echo "Taco de barbacoa";
    }elseif ($opcD>$opcA && $opcD>$opcB && $opcD>$opcC) {
        echo "Taco lagunero";
    }elseif ($opcA==$opcB && $opcA>$opcC && $opcA>$opcD) {
        echo "Taco campechano";
    }elseif ($opcB==$opcC && $opcB>$opcA && $opcB>$opcD) {
        echo "Taco de carnitas";
    }elseif ($opcC==$opcD && $opcC>$opcA && $opcC>$opcB) {
        echo "Taco bell";
    }elseif ($opcA==$opcD && $opcA>$opcB && $opcA>$opcC) {
        echo "Taco light";
    }elseif ($opcA==$opcC && $opcA>$opcB && $opcA>$opcD) {
        echo "Taco placero";
    }elseif ($opcB==$opcD && $opcB>$opcA && $opcB>$opcC) {
        echo "Taco de mixiote";
    }else {
        echo "Taco de sal:(";
    }

    
?>
