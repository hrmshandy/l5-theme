<?php

function theme()
{
    return app('themes');
}

function theme_header()
{
    echo app('stolz.assets')->reset()->add('header')->css() . app('stolz.assets')->reset()->add('header')->js();
}

function theme_footer()
{
    echo app('stolz.assets')->reset()->add('footer')->js();
}