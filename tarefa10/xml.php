<?php

$carregador = simplexml_load_file('dom.xml');

//echo $carregador->sabores[1]->tempero[0];

foreach($carregador->sabores as $sabores){
        echo "<b>Tipo:</b>".$sabores->tipo."</br>".
        "<b> ingrediente1:: </b>".$sabores->ingrediente1."</br>".
        "<b> ingrediente2: </b>".$sabores->ingrediente2."</br>".
        "<b> ingrediente3:: </b>".$sabores->ingrediente3."</br>".
        "<b> ingrediente4:: </b>".$sabores->ingrediente4."</br>".
        "<b> ingrediente5:: </b>".$sabores->ingrediente5."</br>".
        "<b> tempero: </b>".$sabores->tempero."</br>".
        "<b> Preço: </b>".$sabores->preco."</br>";

}

?>
