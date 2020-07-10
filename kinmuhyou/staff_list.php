<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
	<?php
try {
    // データベースに接続する処理
    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // $sql = 'select name FROM mst_staff WHERE 1';
    $sql = 'select * FROM  mst_staff';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $dbh = null;

    print 'スタッフ一覧<br><br>';

    print '<form method="post"action="staff_edit.php">';

    print'<table border=1>';

    while (true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) {
            break;
        }
        print '<tr><td>';
        print '<input type="checkbox"name="staffcode"value="'.$rec['code'].'">';
        print ' <td>';
        print $rec['code'];
        print ' <td>';
        print $rec['name'];
        print '<br>';
        print '</td></tr>';

    }

    print"</table>";
    print '<input type="submit" value="修正">';
    print'</form>';
} catch (Exception $e) {

    print 'ただいま障害が発生しています。';
    exit();
}

?>
</body>
</html>