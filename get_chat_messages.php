<?php
$chatFile = 'chat.dat';
$chatMessages = file_get_contents($chatFile);
echo $chatMessages;
?>
