<html>
<html>

<head>
  <title>Diccionary Input Confirm</title>
</head>

<body>
  <body background="background1.jpg">
  <img src="images.png"><br>
  <h1>DICCIONARY</h1>
  <h2>English => Spanish => Russian</h2>
    <h4>Created by: Oleg Marchenko</h4>

  <?php
  $conexion = mysqli_connect("localhost", "root", "","diccionary") or
    die("Problemas con la conexión");

  mysqli_query($conexion,"insert into diccionary(english,español,русский) values 
             ('$_REQUEST[engword]','$_REQUEST[espword]','$_REQUEST[rusword]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);

  echo "El registro de la palabra es correcto";
  ?>
</body>

</html>