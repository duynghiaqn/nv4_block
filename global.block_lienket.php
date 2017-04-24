<?php
/**
 * @Project NUKEVIET 4.x
 * @Author YUE 
 * @Copyright (C) 2017 NNdesign Inc. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 24/04/2017
 * # Block menu lien ket
 */

if ((!defined('NV_SYSTEM')) AND (!defined('NUKEVN_ADMIN'))) {
    Header("Location: ../index.php");
    exit;
}
global $nukeurl;
$content  =  "<!-- Begin Block Weblink -->";
$content  .= "<center>";
$content  .= "<table>";

$content  .= "<select class=\"form-control size=\"1\" style=\"width: 100% ;color: #b80002;\" id=\"link\" name=\"link\" onchange=\"window.open(this.options[this.selectedIndex].value,'_blank'); sites.options[0].selected=true\">";

$content  .= "<option value=\"/\">--- Ủy Ban nhân dân xã ---</option>";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã A</option> ";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã B</option> ";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã C</option> ";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã D</option> ";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã E</option> ";
$content  .= "<option value=\"http://binhdinh.gov.vn/\">-> UBND xã F</option> ";
$content  .= "</select>";
/*
$content  .= "<p style=\"margin-top: -10px; margin-bottom: 0\">&nbsp;</p>";
$content  .= "<select class=\"form-control size=\"1\" style=\"width: 100%;color: #b80002;\" id=\"link\" name=\"link\" onchange=\"window.open(this.options[this.selectedIndex].value,'_blank'); sites.options[0].selected=true\">";
$content  .= "<option value=\"/\">--- Đơn vị ---</option>";
$content  .= "<option value=\"http://#\">* Đơn vị</option>";

$content  .= "</select>";
*/
$content  .= "</td></tr></table>";
$content  .= "</form>";
$content  .= "</center>";
$content  .= "<!-- End Block By .... -->";
?>