<?php
$title = "Про нас";
echo "<link rel='stylesheet' href='js.js'>";
echo "<link rel='stylesheet' href='css.css'>";
?>
<header class="header">
    <a class="header-content" href="#">Отправить список</a>
    <a class="header-content" href="#">Семья</a>
</header>
<div class="content">
    <div class="content-largecentertext">
        <div style="display: inline-flex; text-align: center">Вместе мы сила!<br>Значит мы захватим магазины списками</div>
    </div>
    <div class="content-normaltext">Отправить список:</div>
    <div style="margin-bottom: 50px;">
        <div class="plusminus" style="position:relative;">
            <div id="plus" class="plus">
                <div class="stickofplus"></div>
                <div class="stickofplus2"></div>
            </div>
            <div id="minus" class="minus">
                <div class="stickofplus"></div>
            </div>
            <div style="display: inline-block; font-family:'Roboto', sans-serif; color:orange; margin-bottom:10px; position:absolute; left:50px;">ПУНКТЫ</div>
        </div>
        <form action="inputphp.php" method="POST">
            <input name="to" class="inputto" type="text" placeholder="Кому отправить?">
            <input name="name" class="inputname" type="text" placeholder="Название списка">
            <input id="inputs" type="submit" class="submit" value="Отправить!">
        </form>
    </div>
 </div>
<script src="js.js"></script>