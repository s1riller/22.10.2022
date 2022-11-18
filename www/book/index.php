<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url, 1, strlen($url) - 5);
setlocale(LC_ALL, 'ru_RU.UTF-8');
require_once('./createPage.php');
$page = createPage('./text.txt', 5000);

for ($i = 0; $i < count($page); $i++) {
  // echo "<br>" . "Страница - " . $i . " " . $page[$i] . "</br>";
}



$numPage = $_GET["page"];
echo $page[$numPage];
echo "<p>" . $numPage . "/" . count($page) - 1 . "</p>";

if ($_GET["page"] == "") {

  header('Location: ' . "http://s1riller.istu.webappz.ru/book/index.php?page=0");
}



$searchText = $_POST["searchText"] ?? "";
setcookie("text" . $i, $searchText);



for ($i = 0; $i < count($page); $i++) {
  if ($key = strripos($page[$i], $searchText) != "") {
    print('<div class="list-group-item">');
    echo '<a href = "http://s1riller.istu.webappz.ru/book/index.php?page=' . $i . '">' . $searchText . " на странице " . $i . '</a>';
    print('</div>');
  }
}

?>







<html>

<body>



  <a href="?page=<?php
                  $show = true;
                  if ($_GET["page"] > 0) {
                    print($_GET["page"] - 1);
                  } else {
                    if ($_GET["page"] == 0) {
                      $show = false;
                    }
                  } ?>"><?php if ($show == true) {
                          echo "prev page";
                        } ?></a>

  <a href="?page=<?php
                  $show = true;
                  if ($_GET["page"]  < count($page) - 1) {
                    print($_GET["page"] +
                      1);
                  } else {
                    if ($_GET["page"] == count($page) - 1) {
                      $show = false;
                    }
                  } ?>"><?php if ($show == true) {
                          echo "next page";
                        } ?></a>
  <p>
  <form method="post">
    <input placeholder="Слово для поиска" name="searchText" type="text">
    <input type="submit" value="Найти">
  </form>
  </p>
</body>

</html>