<html>
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <title> Sum Of Numbers </title>
  </head>
  <body>

  <form>
    Enter a number: <input type="number" name="num"></br>
    <input type="submit" value="submit">  
  </form>

  <?php 
    
    if(!isset($_GET["num"])){
      return;
    }
    $number_string_arr = str_split($_GET["num"]);
    $total = 0;
    foreach ($number_string_arr as $num) {
      $total += (int)$num;
    }

    echo "<h1>" . join("+", $number_string_arr) . " = " . $total . "</h1>";
  ?>
</body>
</html>
