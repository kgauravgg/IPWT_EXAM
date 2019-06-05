<?php
require 'test.php';

$sql="insert into complain (id, mob, name, msg) values (?,?,?,?)";
$stmnt=$conn->prepare($sql);
$stmnt->execute(array($_POST["id"], $_POST["mob"], $_POST["name"], $_POST["msg"]));
echo "Your Data is added in database scussflly plz go back <-- "
?>