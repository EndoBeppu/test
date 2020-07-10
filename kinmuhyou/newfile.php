
<?php

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
$errors = array();

if(isset($_POST['submit']) && $_POST['submit'] === "ログイン"){

    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if($mail === ""){
        $errors['mail'] = "メールアドレスが入力されていません。";
    }

    if($password === ""){
        $errors['password'] = "パスワードが入力されていません。";
    }

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>初めてのPHP</title>
</head>
<body>
<font color="red">
<?php
echo "<ul>";
foreach($errors as $message){
    echo "<li>";
    echo $message;
    echo "</li>";
}
echo "</ul>";
?>
</font>
<div align="center">

<form action="newfile.php" method="post">
<p>
メール：<input type="text" name="mail">
</p>
<p>
パスワード：<input type="password" name="password">
</p>
<p>
<input type="submit" name="submit" value="ログイン">
</p>
</form>
</div>
</body>
</html>