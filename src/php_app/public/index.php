<?php
define('DSN','mysql:host=mysql;dbname=mydb;charset=utf8mb4');
define('DB_USER','root');
define('DB_PASS','secret');

try {
  $pdo = new PDO(
    DSN,
    DB_USER,
    DB_PASS,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
  );
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My todo</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Todos</h1>
<ul>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
    <li>
      <input type="checkbox" checked>
      <span class="done">Title</span>
    </li>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
  </ul>
</body>
</html>
