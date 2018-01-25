<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server contacts">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/index.css">
    <title>Contacts</title>
</head>
<body>
<div class="wrapper">
    <div class="top"></div>
    <ul class="navigation">
        <li><?php echo anchor('MainPage/index', 'Главная', 'class="link-class"') ?></li>
        <li><a href="">Услуги</a>
            <ul>
                <li><a href="donate.html">Донат</a></li>
                <li><a href="">Разбан</a></li>
            </ul>
        </li>
        <li><a href="contacts.html">Контакты</a></li>
        <div class="clear"></div>
    </ul>

    <div class="footer">
        <h1 class="pageTitle">Контакты администрации сервера</h1>
        <ul class="news_bulleted_list">
            <li>Главный админ (тайм-зона мск-1): <ul>
                    <li>skype: lx3036</li>
                    <li>vk: vk.com/kyctbi</li>
                </ul></li>
            <li>Зам админа (тайм-зона мск): <ul><li>skype: forgottenjino</li></ul></li>
            <li>Зам админа (тайм-зона мск-8): <ul><li>skype: iwoke32</li></ul></li>
        </ul>
    </div>
</div>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

