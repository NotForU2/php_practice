
<?php
$a = 'Вот';
$b = 'и';
$c = 'все'; 
?>

<?php
  echo 'Разные типы: ', 1, ' ', 1.18, ' ',true, ' ', 'aboba', '<br><br>';
  
  echo 'Что там с if else<br>';
  function fizzBuzz($i)
  {
      if ($i % 15 === 0) {
        echo "FizzBuzz<br>";
      }
      else if($i % 3 == 0){
        echo "Fizz<br>";
      }
      else if($i % 5 == 0){
        echo "Buzz<br>";
      }
  }
  
  $one = 15;
  $two = 81;
  $three = 5;
  
  echo $one, ' ', $two, ' ', $three, '<br>';
  fizzBuzz($one);
  fizzBuzz($two);
  fizzBuzz($three);
  
  echo '<br>';
  echo 'Умеем в массивы<br>';
  
  $arr = array(1, 2, 3, 4);
  print_r($arr);
  echo '<br>';
  foreach ($arr as &$value) {
    $value = $value ** 2;
  }
  print_r($arr);
?>
