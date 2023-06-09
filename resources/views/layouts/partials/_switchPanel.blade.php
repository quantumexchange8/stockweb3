<div id="switch">
    <div class="content-switcher">
        <p>Color Options:</p>
        <ul class="header">
            <li><a href="#" onClick="setActiveStyleSheet('orange'); return false;" class="button color switch"
                    style="background-color:#d35400"></a></li>
            <li><a href="#" onClick="setActiveStyleSheet('green'); return false;" class="button color switch"
                    style="background-color:#2ecc71"></a></li>
            <li><a href="#" onClick="setActiveStyleSheet('red'); return false;" class="button color switch"
                    style="background-color:#e74c3c"></a></li>
            <li><a href="#" onClick="setActiveStyleSheet('blue'); return false;" class="button color switch"
                    style="background-color:#3498db"></a></li>
            <li><a href="#" onClick="setActiveStyleSheet('yellow'); return false;" class="button color switch"
                    style="background-color:#f1c40f"></a></li>
        </ul>
        <div class="clear"></div>

        <div id="hide">
            <img src="{{ asset('images/close.png') }}" alt="" />
        </div>
    </div>
</div>
<div id="show" style="display: block;">
    <div id="setting"></div>
</div>
