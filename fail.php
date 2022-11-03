<?php
$D = $_GET['vai1'];
$File = "file";
$u = "\r\n \n";
$itog = $D.$u;
file_put_contents($File, $itog, FILE_APPEND);

header('Location: index.php');
exit;
?>
