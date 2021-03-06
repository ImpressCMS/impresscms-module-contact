<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

$modversion['name'] = _MI_CONTACT_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_CONTACT_DESC;
$modversion['credits'] = "";
$modversion['author'] = "";
$modversion['help'] = "top.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "contact_slogo.png";
$modversion['dirname'] = "contact";

//Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminmenu'] = "";

// Menu
$modversion['hasMain'] = 1;

//Blocks
$modversion['blocks'][1]['file'] = "contact_block.php";
$modversion['blocks'][1]['name'] = _MI_CONTACT_BLOCK;
$modversion['blocks'][1]['description'] = "Display a contact block";
$modversion['blocks'][1]['show_func'] = "b_contact_block_show";
$modversion['blocks'][1]['edit_func'] = "b_contact_block_edit";
$modversion['blocks'][1]['template'] = "contact_block.html";

// Templates
$modversion['templates'][1]['file'] = 'contact_contactusform.html';
$modversion['templates'][1]['description'] = 'Contact Us Form';

$modversion['config'][1]['name'] = 'header_msg';
$modversion['config'][1]['title'] = '_MI_CONTACT_HEADER_MSG';
$modversion['config'][1]['description'] = '_MI_CONTACT_HEADER_MSG_DSC';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = '';

$modversion['config'][2]['name'] = 'footer_msg';
$modversion['config'][2]['title'] = '_MI_CONTACT_FOOTER_MSG';
$modversion['config'][2]['description'] = '_MI_CONTACT_FOOTER_MSG_DSC';
$modversion['config'][2]['formtype'] = 'textarea';
$modversion['config'][2]['valuetype'] = 'text';
$modversion['config'][2]['default'] = '';

$modversion['config'][3]['name'] = 'address';
$modversion['config'][3]['title'] = '_MI_CONTACT_ADDRESS';
$modversion['config'][3]['description'] = '_MI_CONTACT_ADDRESS_DSC';
$modversion['config'][3]['formtype'] = 'textarea';
$modversion['config'][3]['valuetype'] = 'text';
$modversion['config'][3]['default'] = '';

$modversion['config'][4]['name'] = 'phone';
$modversion['config'][4]['title'] = '_MI_CONTACT_PHONE';
$modversion['config'][4]['description'] = '_MI_CONTACT_PHONE_DSC';
$modversion['config'][4]['formtype'] = 'textbox';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = '';

$modversion['config'][5]['name'] = 'fax';
$modversion['config'][5]['title'] = '_MI_CONTACT_FAX';
$modversion['config'][5]['description'] = '_MI_CONTACT_FAX_DSC';
$modversion['config'][5]['formtype'] = 'textbox';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = '';

$modversion['config'][6]['name'] = 'email';
$modversion['config'][6]['title'] = '_MI_CONTACT_EMAIL';
$modversion['config'][6]['description'] = '_MI_CONTACT_EMAIL_DSC';
$modversion['config'][6]['formtype'] = 'textbox';
$modversion['config'][6]['valuetype'] = 'text';
$modversion['config'][6]['default'] = '';
?>