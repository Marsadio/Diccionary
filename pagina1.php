<html>

<head>
  <title>Word list</title>
</head>

<body>
  <body background="background1.jpg">
  <img src="images.png"><br>
  <h1>DICCIONARY</h1>
  <h2>English => Spanish => Russian</h2>
  <h4>Created by: Oleg Marchenko</h4>

  <button><a href = "index.html">return</a></button>
  <br>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "diccionary") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select english,español,русский from diccionary") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "English: " . $reg['english'] . "<br>";
    echo "Español: " . $reg['español'] . "<br>";
    echo "Русский: " . $reg['русский'] . "<br>";
    echo "---------------------------------";
    echo "<br>";
    }
    
    echo "<br>";
    echo "<hr>";
    
  mysqli_close($conexion);
  ?>

<button><a href = "index.html">return</a></button>
</body>

</html>