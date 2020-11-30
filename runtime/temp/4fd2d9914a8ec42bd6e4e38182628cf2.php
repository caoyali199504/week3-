<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"D:\gwc\public/../application/gwc\view\goods\goods.html";i:1606704554;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>商品展示</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>商品展示</h2>
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>商品名称</th>
            <th>商品价格</th>
            <th>商品数量</th>
            <th>商品图片</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($data as $v): ?>
        <tr>
            <td><?php echo $v['id']; ?></td>
            <td><a href="<?php echo url('gwc/Goods/index',['id'=>$v['id']]); ?>" id="<?php echo $v['id']; ?>"><?php echo $v['goods_name']; ?></a></td>
            <td><?php echo $v['goods_price']; ?></td>
            <td><?php echo $v['goods_num']; ?></td>
            <td>无</td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>