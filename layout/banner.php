<?php
printf('
    <div id="banner" class="bar-left">
        <img src="layout/images/logo.png" alt="referid"/>
    </div>

    <br />

    <div class="bar-right">
        <ul>
            <li class="navmenu"><a href="' . $content['url'] . '" >Product Page</a> | </li>
            <li class="navmenu"><a href="' . $content['phone'] . '">Contact Manufacturer</a> | </li>
            <li class="navmenu"><a href="' . $content['gps'] . '" >Closest Service</a> | </li>
            <li class="navmenu"><a href="' . $content['user'] . '" >My Page</a> | </li>
    </ul>
</div>

<div class="clear"></div>');

