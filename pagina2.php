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

  $registros = mysqli_query($conexion, "select español,русский from diccionary where english='$_REQUEST[engword]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
   echo $engflag = "<img src='engflag.jpg'>";
   echo "Entered English word: " . $_REQUEST['engword'] . "<br>";

  if ($reg = mysqli_fetch_array($registros)) {
    echo $espflag = "<img src='espflag.jpg'>";
    echo "Traducción en español: " . $reg['español'] . "<br>";
    echo $rusflag = "<img src='rusflag.jpg'>";
    echo "Перевод на русский: " . $reg['русский'] . "<br>";
  } else {
    echo "Still there is no translation of this word in my diccionary, sorry..". "<br>"."<br>";
  }
  mysqli_close($conexion);
  ?>
  <button><a href = "index.html">return</a></button>
</body>

</html>