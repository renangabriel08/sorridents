<?php

function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_passwd(string $pass): bool
{

    if(password_get_info($pass)['algo']){
        return true;
    }

    if(mb_strlen($pass) >= CONF_PASSWD_MIN_LEN && mb_strlen($pass) <= CONF_PASSWD_MAX_LEN)
    {
        return true;
    }
    return false;
}

/**
 * @param string $url
 */
function redirect(string $url): void
{
    $location = CONF_URL_BASE.$url;
    header("Location: {$location}");
    exit;
}