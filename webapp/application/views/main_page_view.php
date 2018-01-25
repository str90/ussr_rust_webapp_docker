<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server site">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/index.css">
    <title>USSR_Rust</title>
</head>

<body>
<div class="wrapper">
    <div class="top"></div>
    <ul class="navigation">
        <li><?php echo anchor('MainPage/index', 'Главная', 'class="link-class"') ?></li>
        <li><a href="">Услуги</a>
            <ul>
                <li><?php echo anchor('Market/display', 'Магазин игровых вещей', 'class="link-class"') ?></li>
                <li><a href="">Разбан</a></li>
            </ul>
        </li>
        <li><?php echo anchor('Contacts/display', 'Контакты', 'class="link-class"') ?></li>
        <div class="clear"></div>
    </ul>

    <div class="footer">
        <h1 class="pageTitle">Новости сервера</h1>
        <ul class="news_bulleted_list">
            <li>2.10.2017: Начало разработки</li>
        </ul>
    </div>
</div>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


