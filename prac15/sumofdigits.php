<html>
  <head>
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

    echo "Sum of " . $number_string . " is " . $total;
  ?>
</body>
</html>
