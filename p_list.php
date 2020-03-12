<!DOCTYPE html>
<html>
<head>
  <title>가격표</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style01.css">
</head>
<body>

<div class="topnav">
  <a href="index.html">홈</a>
  <a href="order_list.php">주문내역</a>
  <a class="active" href="p_list.php">가격표</a>
  <a href="vvv.php">테스트페이지</a>
  <a href="#a">임시1</a>
  <a href="#b">임시2</a>
</div>

<div style="padding-left:16px">
  <h1>가격표</h1>
  <button onclick="location.href='p_listT.php'" id="11" name="aaa">송신기</a>
  <button onclick="location.href='p_listR.php'" id="22" name="sss">수신기</a>
  <button onclick="location.href='p_listS.php'" id="33" name="ddd">스위치</a>
  <button onclick="location.href='p_listF.php'" id="44" name="44">RF모듈<br>

  <button class="button" value="가격표추가" href="order_new.html" onclick="window.open('order_new.html','window_name','width=700,height=800,location=no,status=no,scrollbars=yes');">가격표추가</button>

<?php

  echo "<table border=\"1\">\n";
  echo "<tr><th width=1% bgcolor=\"#CCCCFF\"></th>
            <th width=10% bgcolor=\"#CCCCFF\">위치</th>
            <th width=10% bgcolor=\"#CCCCFF\">품번</th>
            <th width=30% bgcolor=\"#CCCCFF\">품명</th>
            <th width=10% bgcolor=\"#CCCCFF\">금액</th>
            <th width=10% bgcolor=\"#CCCCFF\">세액포함</th>
            <th width=10% bgcolor=\"#CCCCFF\">임시</th>
            <tr>";

    @ $db = new mysqli('localhost', 'kim00', '1212', 'order');

    if (mysqli_connect_errno()) {
       echo 'Error: Could not connect to database.  Please try again later.';
       exit;
    }

    $query = "select * from plist";
    $result = $db->query($query);

    while($board=mysqli_fetch_array($result)){
      $tx=$board['pay']*1.1;
      echo "<tr>
        <td>".$board['type']."</td>
        <td>".$board['posi']."</td>
        <td>".$board['isbn']."</td>
        <td>".$board['pname']."</td>
        <td>".number_format($board['pay'])."</td>
        <td>".number_format($tx)."</td>
        </tr>";
    }
    echo $board;

    echo "</table>";
    $result->free();
    $db->close();

  ?>

</div>
</body>
</html>
