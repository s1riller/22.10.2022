<?php
$host = "localhost";
$user = "DB2022_s1riller";
$password = "DB2022_s1riller";
$db = "DB2022_s1riller";
$conn = new mysqli($host, $user, $password, $db);

$message = $_POST["text"] ?? "";
if ($message != "") {
  $user = $_POST["user"] ?? "Guest";
  $conn->query("insert into chatik (user,message) 
        values('$user','$message')");
}
$result = $conn->query("select user,message from chatik");
while ($row = $result->fetch_assoc()) {
  print "<div>Как-то раз заходит {$row['user']} и говорит:";
  print "{$row['message']}</div>";
}
print_r($row);
?>
<form method="post">
  <input name="user" type="text" value="Владик">
  <input name="text" type="text">
  <input type="submit" value="Послать!">
</form>