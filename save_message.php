<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $message = $_POST["message"];
  
  $file = fopen("messages.txt", "a");
  fwrite($file, "Name: " . $name . "\n");
  fwrite($file, "Message: " . $message . "\n\n");
  fclose($file);
  
  echo "留言已保存！";
}
?>
