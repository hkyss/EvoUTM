<?php
/**
 * UrchinTrackingModule
 *
 * set/get UTM
 *
 * @category    snippet
 * @version     1.0
 * @license     http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal    @properties
 * @internal    @modx_category Content
 * @internal    @installset base
 * @author      hkyss [hkyss.off.dev@gmail.com]
 * @lastupdate  09.11.2020
 */

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