<?php

$conn = new mysqli("127.20.0.3","root","haloapakabar","trucorp");
if(!$conn){
    echo "Cannot connect to MySQL";
    exit;
}

$rows=array();
$query ='SELECT * FROM users';
$result = $conn->query($query);

while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
}

$count= 0;
foreach($rows as $row){
    echo"<br>";
    $count+=1;
    echo $row['ID'] . " | " . $row['Nama'] . " | " . $row['Alamat'] . " | " . $row['Jabatan'];
    echo "<br>";
}

echo"<br>";
echo"Total Member Blackpink: $count";

?>

