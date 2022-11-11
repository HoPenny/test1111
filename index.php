<?php
$add = "test";
$add2 = "test2";
$add4 = "test4";
$add3 = "test3";
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: ' . $uri . '/dashboard/');
echo 'test1' . $add . "<br>";
$devtest = 'dev1';

exit;
?>
Something is wrong with the XAMPP installation :-(