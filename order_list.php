<!DOCTYPE html>
<html>
<head>
  <title>주문내역</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style01.css">
</head>
<body>

<div class="topnav">
  <a href="index.html">홈</a>
  <a class="active" href="order_list.php">주문내역</a>
  <a href="p_list.php">가격표</a>
  <a href="order_check.php">확인</a>
  <a href="vvv.php">테스트페이지</a>
  <a href="#a">임시1</a>
  <a href="#b">임시2</a>
</div>

<div style="padding-left:16px">
  <h1>주문내역</h1><br>
  <button class="button" value="주문추가" onclick="window.open('order_new.html','window_name','width=700,height=800,location=no,status=no,scrollbars=yes');">주문추가</button>

<?php

  echo "<table border=\"1\">\n";
  echo "<tr><th bgcolor=\"#CCCCFF\"></th>
            <th bgcolor=\"#CCCCFF\">주문일</th>
            <th bgcolor=\"#CCCCFF\">종류</th>
            <th bgcolor=\"#CCCCFF\">사업자</th>
            <th bgcolor=\"#CCCCFF\">회사명</th>
            <th bgcolor=\"#CCCCFF\">명세서</th>
            <th bgcolor=\"#CCCCFF\">입금명</th>
            <th bgcolor=\"#CCCCFF\">입금액</th>
            <th bgcolor=\"#CCCCFF\">연락처</th>
            <th bgcolor=\"#CCCCFF\">배송</th>
            <th bgcolor=\"#CCCCFF\">입금</th>
            <th bgcolor=\"#CCCCFF\">발송</th>
            <th bgcolor=\"#CCCCFF\">세금</th>
            <th bgcolor=\"#CCCCFF\">명세서</th>
            <tr>";

    @ $db = new mysqli('localhost', 'kim00', '1212', 'order');

    if (mysqli_connect_errno()) {
       echo 'Error: Could not connect to database.  Please try again later.';
       exit;
    }

    $query = "select * from orders order by 1 desc";
    $query2 = "select * from day_check order by 1 desc";
    $result = $db->query($query);
    $result2 = $db->query($query2);

    while($board=mysqli_fetch_array($result)){
      echo "<tr>
          <td>".$board['orderid']."</td>
          <td>".$board['date']."</td>
          <td>".$board['tex']."</td>
          <td>".$board['lic']."</td>
          <td>".$board['com_name']."</td>
          <td>".$board['tran']."</td>
          <td>".$board['oname']."</td>
          <td>".$board['pay']."</td>
          <td>".$board['cnum']."</td>
          <td>".$board['oadd']."</td>";
        $board2=mysqli_fetch_array($result2);
          echo "<td>".$board2['pay_ox']."</td>
                <td>".$board2['add_ox']."</td>
                <td>".$board2['tex_ox']."</td>
                <td>".$board2['tran_ox']."</td>
          </tr>";
    }
    echo"</table>";
    $result->free();
    $db->close();
  ?>

</div>
</body>
</html>
