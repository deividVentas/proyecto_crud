<?php
function primo($numero)
{
    $n_primo = 0;
    $num_variable = $numero;
    while($num_variable > 0)
    {
        if ($numero % $num_variable == 0)
        {
            $n_primo++;
        }
        $num_variable--;
    }
    if ($n_primo < 3)
    {
        return "El número $numero es primo <br>";
    }
    else
    {
        return "El número $numero no es primo <br>";
    }
}



function media($num1, $num2, $num3, $num4)
{
    $suma = $num1 + $num2 + $num3 + $num4;
    $saco_media = $suma / 4 ;
    return "La media de es $saco_media ";
}






function cuentavocales($texto_vocales)
{
    $a = substr_count($texto_vocales, "a");
    $e = substr_count($texto_vocales, "e");
    $i = substr_count($texto_vocales, "i");
    $o = substr_count($texto_vocales, "o");
    $u = substr_count($texto_vocales, "u");
    $suma_vocales =  $a+$e+$i+$o+$u;
    
    return "Hay $a A, $e E, $i I, $o O, $u U, que suman $suma_vocales vocales <br>";
}





function cuadrado($texto,$cantidad){
    for($i=1; $i <= $cantidad; $i++){
        
        for($j=1; $j <= $cantidad; $j++){
            echo $texto;
            
        }
        echo "<br>";
    }
}

?>