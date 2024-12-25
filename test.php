<?php
try{
    $cnx = new pdo ("Mysql:host=localhost; databse=africadataexplorer","root","");
    var_dump($cnx);
}catch(Expetion $e){
    echo "ERROR connection problem";
}
?>