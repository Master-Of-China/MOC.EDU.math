<?php
  include 'mathsq.html';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $a = $_POST['Ka'];
      $b = $_POST['Kb'];
      $c =  $_POST['Kc'];
      $D = Pow($b,2) - (4 * $a * $c);
      $sqrtD = sqrt($D);
      $x1r = -$b + $sqrtD;
      $x2r = -$b - $sqrtD;
      $a2 = (2*$a);
      echo "<strong>$a", "x<sup>2</sup> + ", $b,"x + ", "$c = 0</strong><br>";
      echo "<strong>a = $a b = $b c = $c</strong><br>";
      echo "D = b&sup2; - 4ac =",Pow($b,2), "-", (4 * $a * $c), "= $D";
      if ($D > 0)
      {
        $x1 = $x1r / $a2;
        $x2 = $x2r / $a2;
        echo " > 0 => Есть 2 корня.<br>";
        echo "X<sub>12</sub> = (-b ± √D) / 2a = (", (-$b), "±",sqrt($D),") / $a2<br>";
        echo "X<sub>1</sub> = ", "(",(-$b), "+",sqrt($D), ")/", $a2,'=', $x1, "<br>";
        echo "X<sub>2</sub> = ", "(",(-$b), "-",sqrt($D), ")/", $a2,'=', $x2, "<br>";
        echo "Ответ: X<sub>1</sub> = <strong>$x1</strong> X<sub>2</sub> = <strong>$x2</strong>";


      }
      elseif ($D == 0) {
        echo " = 0 => Есть 1 корень.<br>";
        echo "X = (-b + √D) / 2a = ", (-$b), "+",sqrt($D),"/ $a2<br>";
        echo "X = ", "(",(-$b), "+",sqrt($D), ")/", $a2,'=', $x1, "<br>";
        echo "Ответ: X = <strong>$x1</strong>";
      }
      elseif ($D < 0) {
        echo " < 0 => Нет корней.<br>";
        echo "<strong>Ответ: Нет корней.</strong>";
      }
    }
?>
