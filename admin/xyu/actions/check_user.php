<?php
if ($_SESSION['loginin'] == '1') {
if ($_SESSION['groupu'] == '2') {
$qchuf = $dbh1->prepare("SELECT * FROM users WHERE id = '".$_SESSION['id']."'");
$qchuf->execute();
$chuf = $qchuf->fetch();
if($_SESSION['pass'] != $chuf['password']){
session_destroy();
$_SESSION['errormsg'] = "Пожалуйста, переавторизируйтесь.";
header("Location: index.php");
}
}else{exit();}
}else{exit();}
?>