<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container" style="width: 600px">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>排序id</th>
            <th>下标</th>
            <th>昵称</th>
            <th>内容</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody style="background: fuchsia;">
        <?php $i = 0; ?>
        <?php foreach($data as $k => $v){ ?>
            <tr>
                <td>
                    <?php
                    $i++;
                    echo $i;
                    ?>
                </td>
                <td><?php echo $k; ?></td>
                <td><?php echo $v['nickname'] ?></td>
                <td><?php echo $v['content'] ?></td>
                <td>
<!--                      获取点击编辑 删除的$k（键名）-->
                    <a href="bianji.php?i=<?php echo $k; ?>" class="btn btn-primary btn-xs">编辑</a>
                    <a href="shuanchu.php?i=<?php echo $k; ?>" class="btn btn-danger btn-xs">删除</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <hr>
    <form action="" method="post" class="form-horizontal" role="form">
        <div class="form-group">
            昵称：
            <input type="text" name="nickname" class="form-control">
        </div>
        <div class="form-group">
            内容：
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">添加留言</button>
        </div>
    </form>
</div>
</body>
</html>