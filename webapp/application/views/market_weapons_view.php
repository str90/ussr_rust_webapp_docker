<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="USSR_Rust server store">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/normalize.css">
    <link rel="stylesheet" type="text/css" href = "<?php echo base_url(); ?>css/donate-shopwindows.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();?>js/donate_addToCart.js"></script>
    <title>Магазин оружия</title>
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
        <h1 class="pageTitle">Витрина с оружием</h1>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_ak47.png" height="80" width="80">
            <figcaption>Диды ваивали</figcaption>
            <hr>
            <form id="wpn_ak47_form" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_ak47">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_bolt.png" height="80" width="80">
            <figcaption>Болтовка</figcaption>
            <hr>
            <form id="wpn_bolt_form" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_bolt">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_crossbow.png" height="80" width="80">
            <figcaption>Арбалет</figcaption>
            <hr>
            <form id="wpn_crossbow" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_crossbow">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_csmg.png" height="80" width="80">
            <figcaption>Кустарный ПП</figcaption>
            <hr>
            <form id="wpn_csmg" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_csmg">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_db.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> двуствольный дрынь</figcaption>
            <hr>
            <form id="wpn_db" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_db">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_eoka.png" height="80" width="80">
            <figcaption>Пугач бичей</figcaption>
            <hr>
            <form id="wpn_eoka" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_eoka">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_legolas.png" height="80" width="80">
            <figcaption>Лук</figcaption>
            <hr>
            <form id="wpn_legolas" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_legolas">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_lr-300.png" height="80" width="80">
            <figcaption>Пендосский калаш</figcaption>
            <hr>
            <form id="wpn_lr-300" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_lr-300">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_pump_shotgun.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> дрынь на максималках</figcaption>
            <hr>
            <form id="wpn_pump_shotgun" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_pump_shotgun">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_checkist.png" height="80" width="80">
            <figcaption>Мечта чекиста</figcaption>
            <hr>
            <form id="wpn_checkist" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_checkist">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_pistol.png" height="80" width="80">
            <figcaption>Обычный<wbr> пистолет</figcaption>
            <hr>
            <form id="wpn_pistol" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_pistol">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_dmr.png" height="80" width="80">
            <figcaption>Нарезной полу<wbr>автоматический дрынь</figcaption>
            <hr>
            <form id="wpn_dmr" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_dmr">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_thompson.png" height="80" width="80">
            <figcaption>Автоматический<wbr> мелкокали<wbr>берный дрынь</figcaption>
            <hr>
            <form id="wpn_thompson" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_thompson">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_waterpipe.png" height="80" width="80">
            <figcaption>Гладкоствольный<wbr> дрынь на минималках</figcaption>
            <hr>
            <form id="wpn_waterpipe" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_waterpipe">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_holo.png" height="80" width="80">
            <figcaption>Голографический<wbr>прицел</figcaption>
            <hr>
            <form id="wpn_holo" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_holo">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_4x.png" height="80" width="80">
            <figcaption>4х кратный прицел</figcaption>
            <hr>
            <form id="wpn_4x" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_4x">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_boost.png" height="80" width="80">
            <figcaption>Дульный ускоритель</figcaption>
            <hr>
            <form id="wpn_boost" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_boost">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

        <figure class="trade_item">
            <img src="/resources/images/donat_store/weapons/wpn_brake.png" height="80" width="80">
            <figcaption>Дульный тормоз</figcaption>
            <hr>
            <form id="wpn_brake" method="post">
                <label class="item_amount_field_descr" for="item_amount">Количество</label>
                <input type="hidden" name="item" value="wpn_brake">
                <input class="item_amount_field" placeholder='0' type="text" pattern='[0-9]{,}' name='item_quantity' id='item_amount'><br>
                <button class="to_basket_btn" type='submit'>В корзину</button>
            </form>
        </figure>

    </div>
</div>
</body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
