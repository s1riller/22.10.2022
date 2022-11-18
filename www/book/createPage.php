<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url, 1, strlen($url) - 5);
setlocale(LC_ALL, 'ru_RU.UTF-8');

//echo $_GET['id'];
function createPage($url, $pageLength)
{
  $text = file_get_contents($url);

  $item =  preg_split("/[. ? ! ] /", $text);


  for ($i = 0; $i < count($item); $i++) {
    $itemLen[$i] = strlen($item[$i]);
  }


  $page = array();
  $p = 0;
  $page[0] = "";
  for ($i = 0; $i < count($item); $i++) {
    $page[$p + 1] = "";
    $page[$p] .= $item[$i] . ". ";
    if (strlen($page[$p]) > $pageLength) {
      $p++;
    }
  }

  for ($i = 0; $i < count($page); $i++) {
    if (strlen($page[$i]) == 0) {
      unset($page[$i]);
    }
  }

  return $page;
}


/*
function createPage($item)
{
  $page = "";
  $i = 0;
  $p = 0;
  $yes = true;
  while ($i < count($item)) {
    while ($yes === true) {
      $page .= $item[$i];
      if (strlen($page) > 10) {
        $yes = false;
        echo "Пака";
        $p++;
      }
      $i++;
    }
  }

  return $page;
}

echo createPage($item);*/