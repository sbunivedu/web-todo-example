<html>
<body>
<h1>TODOs</h1>
<form action="todos.php">
  <input type="text" name="new_todo"/>
  <input type="submit" value="Add"/>
</form>
<ul>
<?php
  $data_file = "todos.txt";
  $new_todo = $_REQUEST["new_todo"];
  $id = $_REQUEST["id"];

# add new todo?
  if(isset($new_todo)){
    file_put_contents($data_file, "\n".$new_todo, FILE_APPEND);
  }

# delete existing todo?
  if(isset($id)){
    $todos = file($data_file);
    array_splice($todos, $id, 1);
    file_put_contents($data_file, $todos);
  }

# display todos
  $todos = file($data_file);
  for ($i=0; $i<sizeof($todos); $i++){
    $todo = $todos[$i];
?>
  <li><?=$todo?><a href="todos.php?id=<?=$i?>">X</a></li>
<?php
  }
?>
</ul>
</body>
</html>