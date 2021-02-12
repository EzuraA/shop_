<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>購入履歴画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>
	<?php
	require 'db_connect.php';
	if(isset($_SESSION['customer'])){
		$sql = "select * from purchase where customer_id = :id";
		$stm = $pdo->prepare($sql);
		$stm->bindValue(':customer_id', $_SESSION['customer']['id'], PDO::PARAM_STR);
		$stm->execute();
		$result = $stm->fetchAll(PDO::FETCH_ASSOC);

		foreach($result as $row){
			
		}
	?>
	<table>
		<th>商品番号</th>
		<th>商品名</th>
		<th>価格</th>
		<th>個数</th>
		<th>小計</th>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>合計</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<hr>
	<?php	
	}else{
	?>
	購入履歴を表示するには、ログインしてください。
	<?php
		}
	?>


</body>

</html>