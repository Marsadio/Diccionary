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

  $registros = mysqli_query($conexion, "select english,русский from diccionary where español='$_REQUEST[espword]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
   echo $espflag = "<img src='espflag.jpg'>";
   echo "Palabra español ingresada: " . $_REQUEST['espword'] . "<br>";

  if ($reg = mysqli_fetch_array($registros)) {
    echo $engflag = "<img src='engflag.jpg'>";
    echo "English translation: " . $reg['english'] . "<br>";
    echo $rusflag = "<img src='rusflag.jpg'>";
    echo "Перевод на русский: " . $reg['русский'] . "<br>";
  } else {
    echo "No hay traducción de esta palabra en mi diccionario todavía, perdon..". "<br>"."<br>";
  }
  mysqli_close($conexion);
  ?>
  <br>
  <button><a href = "DiccionaryEsp.html">regresar</a></button>
  <button><a href = "index.html">return to home</a></button>
</body>

</html>