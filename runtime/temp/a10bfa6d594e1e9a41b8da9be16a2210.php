<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:54:"D:\gwc\public/../application/gwc\view\goods\index.html";i:1606705824;}*/ ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>我的购物车</title>

    <link rel="stylesheet" type="text/css" href="/static/home/css/all.css" />
    <link rel="stylesheet" type="text/css" href="/static/home/css/pages-cart.css" />

	<script type="text/javascript" src="/static/home/js/all.js"></script>
	<script type="text/javascript" src="/static/home/js/pages/index.js"></script>
</head>

<body>

	
	<!--主内容-->
	<div class="cart py-container">
		<!--All goods-->
		<div class="allgoods">
			<h4>全部商品<span>
			<div class="cart-main">
				<div class="yui3-g cart-th">
					<div class="yui3-u-1-4"><input type="checkbox" name="" id="" value="" /> 全部</div>
					<div class="yui3-u-1-4">商品</div>
					<div class="yui3-u-1-8">单价（元）</div>
					<div class="yui3-u-1-8">数量</div>
					<div class="yui3-u-1-8">小计（元）</div>
					<div class="yui3-u-1-8">操作</div>
				</div>
				<div class="cart-item-list">
					<div class="cart-shop">
						<input type="checkbox" name="" id="" value="" />
						<span class="shopname self">传智自营</span>
					</div>
					<div class="cart-body">
						<div class="cart-list">
							<ul class="goods-list yui3-g">
								<li class="yui3-u-1-24">
									<input type="checkbox" class="row_check" name="" id="" value="" />
								</li>
								<li class="yui3-u-6-24">
									<div class="good-item">
										<div class="item-img"><img src="/static/home/img/goods.png" /></div>
										<div class="item-msg"><?php echo $data['goods_name']; ?></div>
									</div>
								</li>
								<li class="yui3-u-5-24">
									<div class="item-txt">颜色MzcBook爱人 银色（Corei5）处理器/8GB内存 尺寸：13.3英寸</div>
								</li>
								<li class="yui3-u-1-8"><span class="price"><?php echo $data['goods_price']; ?></span></li>
								<li class="yui3-u-1-8">
									<a href="javascript:void(0)" class="increment mins">-</a>
									<input autocomplete="off" type="text" value="1" minnum="1" class="itxt current_number" />
									<a href="javascript:void(0)" class="increment plus">+</a>
								</li>
								<li class="yui3-u-1-8"><span class="sum">8848.00</span></li>
								<li class="yui3-u-1-8">
									<a href="#none" class="delete">删除</a><br />

								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="cart-tool">
				<div class="select-all">
					<input type="checkbox" class="check_all" name="" value="" />
					<span>全选</span>
				</div>

				<div class="money-box">
					<div class="chosed">已选择<span id="total_number">0</span>件商品</div>
					<div class="sumprice">
						<span><em>总价（不含运费） ：</em><i id="total_price" class="summoney">¥0</i></span>
						<span><em>已节省：</em><i>-¥0</i></span>
					</div>
					<div class="sumbtn">
						<a class="sum-btn" href="javascript:;" target="_blank">结算</a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

		</div>
	</div>



</body>

</html>
<script>
	$(function () {
		$(".plus").click(function () {
		alert(1);
		})
	})
</script>