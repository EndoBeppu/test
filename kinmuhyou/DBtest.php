<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
try {

    $dsn = 'mysql:dbname=勤務表;host=localhost;charset=utf8';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'select * FROM  tbl_summary';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    $sql1 = 'select * FROM  tbl_staff';
    $stmt1 = $dbh->prepare($sql1);
    $stmt1->execute();

    $dbh = null;

    print '<h3>社員一覧</h3>';
    print '<table border=1  cellspacing="1" cellpadding="5">';

    print '<tr><td>';
    print '選択';
    print '</td>';

    print '<td>';
    print '社員番号';
    print '</td>';

    print '<td>';
    print '氏名';
    print '</td>';

    print '<td>';
    print 'ステータス';
    print '</td>';


    while (true) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        $rec1 = $stmt1->fetch(PDO::FETCH_ASSOC);

        if ($rec == false) {
            break;
        }
        print '<tr><td>';
        print '<input type="radio"name="staffcode"value="' . $rec['staff_number'] . '">';
        print '<td>';
        print $rec['staff_number'];
        print '</td>';
        print '<td>';

        print $rec1['familyname'];
        print $rec1['firstname'];

        print '<td>';
        $status = $rec['status'];
        if ($status == '0') {
            print ' 未入力';
        } else if ($status == '1') {
            print '途中完了';
        } else if ($status == '2') {
            print '完了';
        }
        print '</td></tr>';

        print '</table>';
    }

} catch (Exception $e) {
    print 'ただいま障害が発生しております';
    exit();
}
?>

</body>
</html>