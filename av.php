<?php
$question = $_POST['q'];
$server = "localhost";
$user = "root";
$pass = "";
$database = "auto_av";

$conection = new mysqli($server , $user ,$pass ,$database);
if ($conection -> connect_error) {
    die ("connect DB failed");

}
$stmt = $conection -> prepare("SELECT answer from english WHERE question = ?");
$stmt -> bin_param("s", $question);
$stmt -> execute();
$result = $stmt -> get_result();
$answer = $result -> fetch_assoc();
if (isset($answer)) {
    echo $answer['answer'];
}
else {
    echo "câu trả lời sai rồi bạn ơi";
}
?>