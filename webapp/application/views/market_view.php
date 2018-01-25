<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server store">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/donate.css">
    <title>Магазин</title>
</head>
<body>
<div class="wrapper">
    <div class="top"></div>
    <ul class="navigation">
        <li><?php echo anchor('MainPage/index', 'Главная', 'class="link-class"') ?></li>
        <li><?php echo anchor('MarketWeapons/display', 'Оружие', 'class="link-class"') ?></li>
        <li><a href="donate_ammo.html">Патроны</a></li>
        <li><a href="donate_resources.html">Ресурсы</a></li>
        <li><a href="donate_items.html">Предметы</a></li>
        <li><a href="donate_clothes.html">Одежда</a></li>
        <li class="basket"> <li><?php echo anchor('CartUSSR/display', 'Корзина', 'class="link-class"') ?></li></li>
        <div class="clear"></div>
    </ul>

    <div class="footer">
        <h1 class="pageTitle">Магазин вещей</h1>
        <div class="guide">
            <p>1) Выберите сверху раздел исходя из того что вы хотите приобрести</p>
            <p>2) Для каждого товара укажите количество и добавьте в корзину кнопкой под товаром</p>
            <p>3) В меню сверху нажмите красный прямоугольник "Корзина" для оплаты товара</p>
            <p>4) Один товар добавляйте в корзину только 1 раз за сессию !!!</p>
        </div>
    </div>
</div>
</body>
</html>


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

