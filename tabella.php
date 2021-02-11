<!DOCTYPE html>
<html>

<head>
<title>Tavola Pitagorica</title>
</head>

<body>
  <h1>Tavola Pitagorica</h1>
  <?php
    echo "<table border = 1>";
    for ($i = 1; $i < 11; $i++) {
      echo "<tr>";
      for ($j = 1; $j < 11; $j++) {
        $r = $i * $j;
        echo "<td align = center>",$r,"</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>
</body>
</html>
