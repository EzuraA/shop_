<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>会員登録画面</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php require 'menu.php'; ?>

    <form method="POST" action="customer_output.php">
        <table>
            <tr>
                <th><label for="name">お名前</label></th>
                <td><input type="text" name="name"><br></td>
            </tr>
            <tr>
                <th><label for="address">ご住所</label></th>
                <td><input type="text" name="address"><br></td>
            </tr>
            <tr>
                <th><label for="login">ログイン名</label></th>
                <td><input type="text" name="login"><br></td>
            </tr>
            <tr>
                <th><label for="password">パスワード</label></th>
                <td><input type="text" name="password"><br></td>
            </tr>
            <tr><th></th><td><input type="submit" value="確定"></td></tr>
        </table>
    </form>
</body>

</html>

