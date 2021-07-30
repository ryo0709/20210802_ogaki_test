<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>problem1</title>
</head>
<style>
  table {
    border-spacing: 0;
    font-size:30px;
    border-bottom:1px solid black;
  }
  table td {
    border-top:1px solid black;
    border-left:1px solid black;
  }
  table td:last-child {
    border-right:1px solid black;
  }
</style>
<body>
  <table>
    <tr>
<?php
  for ($y = 1; $y <= 9; $y++) {
    echo '<tr>';
    for ($x = 1; $x <= 9; $x++) {
      echo '<td>' . $x * $y . '</td>';
    }
    echo '</tr>';
  }
?>
  </table>
</body>
</html>

