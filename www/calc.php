<?php
$url = $_SERVER['REQUEST_URI'];
$url = mb_substr($url,1,strlen($url)-5);
$c=0;
if(isset($_POST['submit'])){
  $a=(int)$_POST['first'];
  $b=(int)$_POST['second'];
  $p=(int)$_POST['operation'];
  $c??0;
  if($p=="1")
  $c=$a+$b;
  else if($p=="2")
  $c=$a-$b;
  else if($p=="3")
  $c=$a*$b;
  else if($p=="4")
  $c=$a/$b;
  else
  $c=0;
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
  <link rel="stylesheet" href="./style/style.css">

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



  <form action="" method="post">
    <div class="container">
      <div class="row w-100 align-items-center">
        <div class="col-sm-16">
          <input type="text" class="form-control" placeholder="Username" name="first" aria-label="Число"
            aria-describedby="basic-addon1" require>
        </div>
        <div class="col-sm-16 align-items-center">
          <select class="form-select" name="operation" require>
            <option selected>Выберете знак</option>
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">÷</option>
          </select>

        </div>
        <div class="col-sm-16 align-items-center">
          <input type="text" class="form-control" placeholder="Username" name="second" aria-label="Число"
            aria-describedby="basic-addon1" require>

        </div>
        <div class="col-sm-16 align-items-center">
          <h4 class="text-center">=</h4>

          <h2 class="text=center">Ответ: <?php if($c) echo $c; ?></h2>

        </div>

        <input type="submit" name="submit" require>

      </div>
    </div>




  </form>

</body>

</html>