
<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form results</title>
  </head>

<body>
  <h3> Form results </h3>
  name: <?php echo htmlspecialchars($_GET['Name']); ?> <br>
  email: <?php echo $_GET['Email']; ?> <br>
  desciption: <?php echo $_GET['Description'];?>

</br> <a href ="index.html"> Return Home </a>
</body>
</html>
