<html>
<body>
<h1>TODOs</h1>
<form action="add.php">
  <input type="text" name="new_todo"/>
  <input type="submit" value="Add"/>
</form>
<ul>
<?php
  $data_file = "todos.txt";
  $todos = file($data_file);
  for ($i=0; $i<sizeof($todos); $i++){
    $todo = $todos[$i];
?>
  <li><?=$todo?><a href="delete.php?id=<?=$i?>">X</a></li>
<?php
  }
?>
</ul>
</body>
</html>