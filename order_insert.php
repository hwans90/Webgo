<html>
<head>
  <title>주문추가 확인</title>
  <meta charset="utf-8">
</head>

<body>
<h1>주문내역</h1>
<?php
  $date = date('ymd');
  $tex = $_POST['tex'];
  $lic = $_POST['lic'];
  $com_name = $_POST['com_name'];
  $tran = $_POST['tran'];
  $oname = $_POST['oname'];
  $pay = $_POST['pay'];
  $cnum = $_POST['cnum'];
  $oadd = $_POST['oadd'];
  $olist = $_POST['olist'];

  if (!get_magic_quotes_gpc()) {
    $tex = addslashes($tex);
    $lic = addslashes($lic);
    $com_name = addslashes($com_name);
    $tran = addslashes($tran);
    $oname = addslashes($oname);
    $pay = doubleval($pay);
    $cnum = addslashes($cnum);
    $oadd = addslashes($oadd);
    $olist = addslashes($olist);
  }

  @ $db = new mysqli('localhost', 'kim00', '1212', 'order');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }
  $auto_icre = "alter table orders auto_increment=1;";
  $auto_icre1 = "alter table day_check auto_increment=1;";
/*              set @count = 0;
              update orders set orders.orderid = @count:=@count+1;";   */

  $re = $db->query($auto_icre);
  $re = $db->query($auto_icre1);

  $query = "insert into orders values
            ('','".$date."','".$tex."', '".$lic."', '".$com_name."', '".$tran."', '".$oname."', '".$pay."', '".$cnum."', '".$oadd."')";
  $aaa = '"-"';
  $query1 = "insert into day_check values
            ('', $aaa, $aaa, $aaa, $aaa)";
  $result = $db->query($query);
  $result1 = $db->query($query1);

  echo "날짜: ".$date."</p>";
  echo "종류: ".$tex."</p>";
  echo "사업자: ".$lic."</p>";
  echo "회사명: ".$com_name."</p>";
  echo "명세서: ".$tran."</p>";
  echo "입금명: ".$oname."</p>";
  echo "입금액: ".$pay."</p>";
  echo "연락처: ".$cnum."</p>";
  echo "배송: ".$oadd."</p>";

  if ($result) {
      echo  $db->affected_rows."건 주문등록완료";
      } else {
        echo "주문등록실패";  }
  $db->close();

?>

</body>
</html>
