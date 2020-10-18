<?php
include ('db.php');

$content = $_POST['content'];
$username = $_POST['username'];

if(trim($content)==''or trim($username)==''){
    echo '用户名和留言内容不可为空';
    exit;
}
if(trim($username)=='admin' ||trim($username)=='root'){
    echo '用户名不可为敏感字';
    exit;
}


$sql=  "insert into msg (username,content) values ('{$username}','{$content}')";
echo $sql;

write($pdo,$sql);


header('location:bootstrap.php');
?>
