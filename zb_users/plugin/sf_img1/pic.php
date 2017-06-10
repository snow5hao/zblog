<?php
ob_start();
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
if (!$zbp->CheckPlugin('sf_img1')) {$zbp->ShowError(48);die();}
$sf_img1=SF_img1::createBean();
ob_end_clean();
$sf_img1->output();

?>