<?php

/**
* $Id$
* Module: Contact
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

function b_contact_block_show($options)
{
	include_once(XOOPS_ROOT_PATH . "/modules/contact/include/functions.php");
	
	global $xoopsTpl;
	
	$myts = &MyTextSanitizer::getInstance();
	
	$xoopsTpl->assign("xoops_module_header", "<link rel='stylesheet' type='text/css' href='" . XOOPS_URL  . "/modules/contact/module.css'/>");
	
	$module_handler = xoops_gethandler('module');
	
	$smartConfig = contact_getModuleConfig();
	
	$block = array();
	$block['contact_header_msg'] = $myts->displayTarea($smartConfig['header_msg'], 1);
	$block['contact_footer_msg'] = $myts->displayTarea($smartConfig['footer_msg'], 1);
	$block['contact_address'] = $myts->displayTarea($smartConfig['address'], 1);
	$block['contact_phone'] = $myts->displayTarea($smartConfig['phone'], 1);
	$block['contact_fax'] = $myts->displayTarea($smartConfig['fax'], 1);
	$block['contact_email'] = $myts->displayTarea($smartConfig['email'], 1);
	$block['contact_sitename'] = $myts->displayTarea($smartConfig['sitename']);
	$block['lang_contact_phone'] = _CT_MB_CONTACT_PHONE;
	$block['lang_contact_fax'] = _CT_MB_CONTACT_FAX;
	$block['lang_contact_form'] = _CT_MB_CONTACT_FORM;
	return $block;	
}

function b_contact_block_edit($options)
{
	$form= null;
	
	return $form;
}

?>