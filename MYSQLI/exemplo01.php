<?php
$conn = new MYSQLI;
if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
while ($row->$result->fetch_array()){
var_dump($row);
}