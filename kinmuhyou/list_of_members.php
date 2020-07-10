<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
try
{
    $number =$_POST['staff_number'];



    $dsn = 'mysql:dbname=勤務表;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql='select * from tbl_staff';
    $stmt=$dbh->prepare($sql);

    $stmt->execute();
$dbh = null;




} catch (Exception $e) {
print'ただいま障害がはっせいしております。';
exit();
}
?>
<h3>社員一覧</h3>
<table border=1  cellspacing="0" cellpadding="5">
<tr>
<td>
選択
</td>
<td>
社員番号
</td>
<td>
氏名
</td>
<td>
ステータス
</td>

</tr>



</table>
</body>
</html>