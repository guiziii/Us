<?php 

$sql = "SELECT * FROM estado";

require_once('dbConnect.php');

$r = mysqli_query($con,$sql);

$result = array();

while($row = mysqli_fetch_array($r)){
    array_push($result,array(
        'id'=>$row['id'],
        'nome'=>$row['nome'],
        'uf'=>$row['uf'],
        'pais'=>$row['pais']
    ));
}

echo json_encode(array('result'=>$result));

mysqli_close($con);