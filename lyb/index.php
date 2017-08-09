<?php
//处理添加功能
//载入函数库文件
include 'functions.php';
//一、载入数据库文件，并且把数组返给$data，默认为空数组
$data = include 'shujuku.php';
//如果用户点了"添加留言"按钮
if(IS_POST){
    //二、在数据库的数组上追加一条留言
    array_push($data,$_POST);
    //合法化代码，组合字符串
    $phpCode = var_export($data,true);
    $str = <<<str
<?php
return {$phpCode};
?>
str;
    //三、保存到数据库
    //file_put_contents('./data.php',"<?php return " . var_export($data,true) . ";");
    file_put_contents('shujuku.php',$str);
    $str = <<<str
<script>
//    跳转到默认主页面
location.href='index.php';
</script>
str;
    echo $str;

}
//载入模板
include 'add.php';
