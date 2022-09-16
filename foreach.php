<?php


$nabi = array("Muhammad", "Isa", "Musa", "Ismail", "Ibrahim", "Nuh");
$x = 1;

     foreach ($nabi as $row){
     echo $x++ .". $row <br>";
     var_dump($nabi);
}


/*$panjangArray = count($nabi);
for($i = 0; $i < $panjangArray; $i++){
    echo $i+1 . ". " .$nabi[$i];
    echo "<br>";
}*/

// Loop Continue

/*for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        break;
    }
    echo "The number is: $x <br>";
}*/


?>