<?php
$apiToken = "YOUR_TELEGRAM_BOT_HERE";
$response = file_get_contents("https://api.telegram.org/bot".$apiToken."/sendMessage?chat_id="."YOUR_ID_HERE"."&text=" . "HRER_TEXT");
?>
