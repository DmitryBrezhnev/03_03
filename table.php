<?php



require_once("../../config.php");


$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_dmibre");
$stmt = $mysql->prepare("INSERT INTO messages_sample (recipient, message) VALUES (?,?)");

$stmt = $mysql ->prepare("SELECT id, recipient, message, FROM
messages_sample");

$stmt-> bind_result($id, $recipient, $message,);

if$stmt->execute();

while($stmt->fetch()){
	
	echo $id." ".$message."<br>"; ,
	
	}
		

?>

<a href="app.php">app</a>