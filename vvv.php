<!doctype html>
<html>
<head>
	<title>테스트페이지</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style01.css">
<body>
	<div class="topnav">
	  <a href="index.html">홈</a>
	  <a href="order_list.php">주문내역</a>
	  <a href="p_list.php">가격표</a>
		<a href="order_check.php">확인</a>
	  <a class="active" href="vvv.php">테스트페이지</a>
	  <a href="#a">임시1</a>
	  <a href="#b">임시2</a>
	</div>
	<header>
		<font color="white">테스트 페이지</font>
		<button onclick="return delchk(1212)">dd</button>

	</header>

	<select name="tex" style="width:100px;">
	<option value="11">무
	<option value="22">세금계산서
	<option value="33">현금영수증
	<option value="44">사업자증빙
	</select>
	<td colspan="2"><input type="submit" value="추가" size="40"></td>
	<p value="$tex"></p>
	<button class="button" value="aa" onclick="window.open('order_new0.html','window_name','width=1200,height=300,location=no,status=no,scrollbars=yes');">주문추가</button>
	<input type="number">d</p>
	<input type="range">d</p>
	<input type="color">d</p>
	<input type="checkbox">d</p>
	<input type="radio" name="ra" values="1">세금
	<input type="radio" name="ra" values="2">현금
	<input type="radio" name="ra" values="3">증빙</br>

	<form action="order_new0.php">
		<input type="hidden" name="ra" values="1">

<?php
	$aaa = 1234;
	echo "$aaa";
	echo '$aaa';
echo "<table border=\"1\">\n";
echo "<tr><th width=50% bgcolor=\"#CCCCFF\"></th>
					<th width=50% bgcolor=\"#CCCCFF\">임시</th>
					<tr>";

echo "<tr>
			<td>ㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁㅁ</td>
			<td>ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ</td>
			</tr>";

?>
</form>



</body>
</html>
