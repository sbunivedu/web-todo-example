<?php
  $data_file = "todos.txt";
  $id = $_REQUEST["id"];
  $todos = file($data_file);
  array_splice($todos, $id, 1);
  file_put_contents($data_file, $todos);
  header("Location: list.php");
?>