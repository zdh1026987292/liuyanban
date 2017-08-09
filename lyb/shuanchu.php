<?php
//处理删除功能
//载入函数
include 'functions.php';

//一、载入数据库
$data = include 'shujuku.php';
//二、删除\
//点击删除的时候获得当前点击的下标（键名）
$id = $_GET['i'];
//删除当前点击的下标
unset($data[$id]);
//三、保存到数据库文件中
//把修改后的文件存到数据库
file_put_contents('shujuku.php',"<?php return " . var_export($data,true) . ";");

$str = <<<str
<script>
//alert('删除成功');
location.href='index.php';
</script>
str;
echo $str;