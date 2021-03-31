<?php
header('Content-type: text/plain; charset=utf-8');

$vurban = rand (0, 1);
$text = "Чоп: ";
$text .= $vurban ? "ези" : "тура";
echo $text;
?>