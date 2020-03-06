<?php
$mail = '';
while (false !== ($line = fgets(STDIN))) $mail .= $line;
$file = '/www/'.date('d.m.Y_H-i-s').'.eml';
file_put_contents($file, $mail);