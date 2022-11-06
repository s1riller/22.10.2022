<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url,1,strlen($url)-5);

setlocale(LC_ALL, 'ru_RU.UTF-8');
$text = file_get_contents('./book.txt');

$pieces = explode(".", $text);

$page = " ";

for($i=0;$i<10;$i++){
  $page .= $pieces[$i].".";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $url; ?></title>
  <link rel="shortcut icon" href="./img/ico.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ENOT</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="table.php">Таблица умножения</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="calc.php">Калькулятор</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="book.php">Книга</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="XO.php">Крестки нолики</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <div class="page container-sm p-3">
    <?php

?>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>

  <?php

echo $page;
  
?>


</body>

</html>
<?php
$data = $pieces;
$q = $_POST["q"] ?? "";
$result = [];

if ($q != "")
{
  foreach($data as $el){
    $pos = strpos($el,$q);
    if($pos !== false){
      $result[] = $el;
      echo $el;
    }
  }

}
?>



<style>
input.q {
  width: 60%;
  .center (text-align: center; )
}
</style>
<div class="center">
  <form method="post">
    <input type="text" class="q" name="q">
    <input type="submit" value="Искать">
  </form>
</div>

<link rel="stylesheet" href="./style/stylebook.css">
<div id="slider">
  <ul>
    <li>
      <div class="slider-container">
        <h4>Pure CSS slider Content</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries,</p>
      </div>
    </li>
    <li>
      <div class="slider-container">
        <h4>Pure CSS slider Content</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries,</p>
      </div>
    </li>
    <li>
      <div class="slider-container">
        <h4>Pure CSS slider Content</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries,</p>
      </div>
    </li>
    <li>
      <div class="slider-container">
        <h4>Pure CSS slider Content</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
          industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
          scrambled it to make a type specimen book. It has survived not only five centuries,</p>
      </div>
    </li>
  </ul>
</div>

