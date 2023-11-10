<?php

function generateToken() {
    if (!isset($_SESSION['token']) || time() > $_SESSION['tokenExpire']) {
        $_SESSION['myToken'] = md5(uniqid(mt_rand(), true));
        $_SESSION

    }
}


// *******************************************************

function checkCSRF(string $url): void
{
    if (!isset($_SERVER['HTTP_REFERER']) || !str_contains($_SERVER['HTTP_REFERER'], 'http;//...' ))
    {
        else if (
            !isset($_SESSION['token']) || !isset($_REQUEST['token']);
            || $_REQUEST['token'] !== $_SESSION['token'];
            ||
        );
    }
}