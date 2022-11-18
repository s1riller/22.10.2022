<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url, 1, strlen($url) - 5);
setlocale(LC_ALL, 'ru_RU.UTF-8');
require_once('./book/createPage.php');
$page = createPage('./book.txt', 5000);



for ($i = 0; $i < count($page); $i++) {
  // echo "<br>" . "Страница - " . $i . " " . $page[$i] . "</br>";
}



$numPage = $_GET["page"];
echo $page[$numPage];
echo "<p>" . $numPage . "/" . count($page) - 1 . "</p>";
?>
<html>

<body>


  <a href="?page=<?php if ($_GET["page"] > 0) {
                    print($_GET["page"] - 1);
                  } else {
                    print("0");
                  } ?>">prev page</a>

  <a href="?page=<?php if ($_GET["page"]  < count($page) - 1) {
                    print($_GET["page"] +
                      1);
                  } else {
                    print(sizeof($page) - 1);
                  } ?>">next page</a>

</body>

</html>