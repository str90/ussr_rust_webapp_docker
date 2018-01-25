<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server store">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/cart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/cart.js"></script>
    <title>Магазин</title>
</head>
<body>
<div class="wrapper">
    <div class="top"></div>
    <ul class="navigation">
        <li><a href="">Выберете способ оплаты</a>
            <ul>
                <li><a id="YM_Native" href="">Яндекс деньги</a></li>
                <li><a id="YM_Card" href="">Банковская карта</a></li>
            </ul>
        </li>
        <li id="clear_basket" class="basket_clear"><a href="">Очистить корзину</a></li>
        <div class="clear"></div>
    </ul>
    <div class="footer">
        <h1 class="pageTitle">Ваша корзина</h1>
        <h2 class="welcoming">Выберете способ оплаты</h2>

        <form class="pay_form" id="YM_Native_form" method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
            <h2>Данные платежа</h2>
            <input type="hidden" name="receiver" value="410015333396361">
            <input type="hidden" name="quickpay-form" value="shop">

            <div class="pay_form_input_field_group">
                <div class="pay_form_input_field">
                    <label class="pay_form_input_label" for="player_name">Имя игрока</label>
                    <input type="text" name="player_name" value="" placeholder="Введите имя игрока на сервере" type="text" id="player_name">
                </div>
                <div class="pay_form_input_field">
                    <label class="pay_form_input_label" for="pay_amount">К оплате</label>
                    <input class="pay_amount" type="text" name="sum" value="10" data-type="number" readonly>
                </div>
            </div>
            <input type="hidden" name="need-fio" value="false">
            <input type="hidden" name="need-email" value="false">
            <input type="hidden" name="need-phone" value="false">
            <input type="hidden" name="need-address" value="false">
            <input type="hidden" name="paymentType" value="PC">
            <input type="hidden" name="targets" value="Донат">
            <input class="pay_form_input_field_button" type="submit" value="Заплатить">
        </form>

        <form class="pay_form" id="YM_Card_form" method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">
            <h2>Данные платежа</h2>
            <input type="hidden" name="receiver" value="410015333396361">
            <input type="hidden" name="quickpay-form" value="shop">

            <div class="pay_form_input_field_group">
                <div class="pay_form_input_field">
                    <label class="pay_form_input_label" for="player_name">Имя игрока</label>
                    <input type="text" name="player_name" value="" placeholder="Введите имя игрока на сервере" type="text" id="player_name">
                </div>
                <div class="pay_form_input_field">
                    <label class="pay_form_input_label" for="pay_amount">К оплате</label>
                    <input class="pay_amount" type="text" name="sum" value="10" data-type="number" readonly>
                </div>
            </div>

            <input type="hidden" name="need-fio" value="false">
            <input type="hidden" name="need-email" value="false">
            <input type="hidden" name="need-phone" value="false">
            <input type="hidden" name="need-address" value="false">
            <input type="hidden" name="paymentType" value="AC">
            <input class="pay_form_input_field_button" type="submit" value="Заплатить">
        </form>
        <p class="clear_basket_msg">Корзина успешно очищена</p>
    </div>
</div>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
