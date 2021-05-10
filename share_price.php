<?php
/*
    Author:     Anopan Kandiah
    Created:    25/04/2021
    Modified:   28/04/2021
*/

require_once('asx_share.class.php');

header("Refresh: (60 * 20)");

$asx_vhy = new ASXShare('vhy');
$asx_vdhg = new ASXShare('vdhg');

echo '<h1>' .$asx_vhy->get_share_code() .': ' .$asx_vhy->get_share_price() .'</h1>';
echo '<h1>' .$asx_vdhg->get_share_code() .': ' .$asx_vdhg->get_share_price() .'</h1>';

?>