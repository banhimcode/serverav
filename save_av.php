<?php
$answer = $_POST['a'];
$server = "localhost";
$user = "root";
$pass = "";
$database = "auto_av";

$conec = new mysqli($server , $user ,$pass ,$database);
if ($conec -> connect_error) {
    die ("thất bại rồi");

}
$sql = INSERT INTO MyGuests ($answer);
if ($conec->query($sql)=== TRUE) {
    echo "đã tiếp thu thành công";
}
else {
    echo "error : " . $sql . $conec->error;
}
conec->close();
?>