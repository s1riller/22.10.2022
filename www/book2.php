<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url, 1, strlen($url) - 5);
setlocale(LC_ALL, 'ru_RU.UTF-8');

//echo $_GET['id'];

$text = file_get_contents('./book/text.txt');
$pred = explode(". ", $text);

/*
function abzac($str)
{
  $pred = explode('.', $str);
  //$pred = explode("!", $pred);
  $pz   = 0;
  for ($i = 0; $i < count($pred); $i++) {
    $lench   = strlen($pred[$i]);
    $pz = $pz + $lench;
    if ($pz > 40) {
      $abzac[] = implode('. ', $abz) . '. ';
      $abz = array();
      $pz   = $lench;
    }
    $abz[] = $pred[$i];
  }
  return '<p>' . implode('</p><p>', $abzac) . '</p>';
}
*/


function MyArray($array)
{
  for ($i = 0; $i < count($array); $i++) {
    $pos      = strripos($array[$i], "? ");

    if ($pos !== false) {
      echo $pos;
      echo "<p>" . $array[$pos] . "</p>";
    }
  }
  return $array;
}


$entry;
$p = 0;
for ($i = 0; $i < count($pred); $i++) {
  $pos = strripos($pred[$i], "! ");
  if ($pos !== false) {
    $entry[$p] = $pred[$i];
    $p = $p + 1;
  }
  $pos = "";
  //echo "<p>" . $i . "   " . $pred[$i] . "</p>";

}


$j = 0;
for ($i = 0; $i < count($entry); $i++) {
  $sstr = explode("! ", $pred[$j]);
  echo $sstr[0];
  //array_splice($pred, 7, 0, $pred[]);
  $j++;
}
for ($i = 0; $i < count($pred); $i++) {
  echo  "<p>" . $i . " " . $pred[$i] . "</p>";
}
