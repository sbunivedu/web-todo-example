<?php
  $data_file = "todos.txt";
  $new_todo = $_REQUEST["new_todo"];
  //$new_todo = "world";
  if(isset($new_todo)){
    file_put_contents($data_file, "\n".$new_todo, FILE_APPEND);
  }
  header("Location: list.php");
?>