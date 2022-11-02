<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url,1,strlen($url)-5);
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
  <link rel="stylesheet" href="./style/style.css">

</head>

<body style="background: url(./img/oceanback.jpeg) no-repeat">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
  <p id='head1' class='header'>Текст1</p>
  <p id='head2' class='header'>Текст2</p>
  <p id='head3' class='header'>Текст3</p>
  <p id='head4' class='header'>Текст4</p>
  <p id='head5' class='header'>Текст5</p>
  <div class='light x1'></div>
  <div class='light x2'></div>
  <div class='light x3'></div>
  <div class='light x4'></div>
  <div class='light x5'></div>
  <div class='light x6'></div>
  <div class='light x7'></div>
  <div class='light x8'></div>
  <div class='light x9'></div>


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









</body>

</html>