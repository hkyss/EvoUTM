<?php
switch($status) {
    case 'set':
        $utms = ['utm_source','utm_campaign','utm_medium','utm_term','utm_content'];
        foreach($utms as $utm) {
            if (isset($_REQUEST[$utm])){
                $_SESSION[$utm] = $_REQUEST[$utm];
            }
        }
        break;
    case 'get':
        echo isset($_SESSION[$value]) ? $_SESSION[$value] : '-' ;
        break;
    default:
        break;
}
?>