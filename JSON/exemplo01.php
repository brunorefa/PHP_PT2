<?php

$pessoas = array();
array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>'20'
));
array_push($pessoas, array(
    'nome'=>'Glaudio',
    'idade'=>'25'
));
echo json_encode($pessoas);   
?>