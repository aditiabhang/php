<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <title>My HTML Page</title>
</head>


<body>
  <header>
      <h1>

        <?php
        echo "Hello " .$_GET['name'] . '!';
        ?>

      </h1>
    </header>


</body>
</html>
