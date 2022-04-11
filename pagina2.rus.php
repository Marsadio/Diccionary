<html>

<head>
  <title>Diccionary Query</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <body background="background1.jpg">
  <img src="images.png"><br>
  <h1>DICCIONARY</h1>
  <h2>English => Spanish => Russian</h2>
  <h4>Created by: Oleg Marchenko</h4>
  
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "diccionary") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select english,español from diccionary where русский='$_REQUEST[rusword]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
   echo $rusflag = "<img src='rusflag.jpg'>";
   echo "Введенное русское слово: " . $_REQUEST['rusword'] . "<br>";

  if ($reg = mysqli_fetch_array($registros)) {
    echo $engflag = "<img src='engflag.jpg'>";
    echo "English translation: " . $reg['english'] . "<br>";
    echo $espflag = "<img src='espflag.jpg'>";
    echo "Перевод на русский: " . $reg['español'] . "<br>";
  } else {
    echo "Извиняюсь, пока перевода этого слова в словаре нет..". "<br>"."<br>";
  }
  mysqli_close($conexion);
  ?>
  
  <br>
  <button><a href = "DiccionaryRus.html">вернуться</a></button>
  <button><a href = "index.html">return to home</a></button>
</body>

</html>