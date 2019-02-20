/*
PHPでの登録画面の実装
PHP内でのDBへの処理などを学んだ

セキュリティー対策が必要

クエリの発行で必要になったエスケープシーケンスがうまくいかなかったため、
$escを使ってやや強引に実装。
*/

<?php
  
$user = "root";
$pass = "root";

$esc = '"';

$V_id = $esc .$_POST['user_id']. $esc;
$V_mail =$esc.$_POST["mail_address"]. $esc;
$V_pass = $esc.$_POST["password"]. $esc;

    // MySQLへの接続
    $dbh = new PDO("mysql:host=localhost;dbname=zendo_local", $user, $pass);

    // SQLの処理
    $dbh->query("INSERT INTO user(username,email,password) VALUES($V_id,$V_mail,$V_pass)");
