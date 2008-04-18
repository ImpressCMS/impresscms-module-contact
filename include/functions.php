<?php

/**
* $Id$
* Module: Contact
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

function &contact_getModuleInfo()
{
    static $smartModule;
	if (!isset($smartModule)) {
	    global $xoopsModule;
	    if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == 'contact') {
	        $smartModule =& $xoopsModule;
	    }
	    else {
	        $hModule = &xoops_gethandler('module');
	        $smartModule = $hModule->getByDirname('contact');
	    }
	}
	return $smartModule;
}

function &contact_getModuleConfig()
{
    static $smartConfig;
    if (!$smartConfig) {
        global $xoopsModule;
	    if (isset($xoopsModule) && is_object($xoopsModule) && $xoopsModule->getVar('dirname') == 'contact') {
	        global $xoopsModuleConfig;
	        $smartConfig =& $xoopsModuleConfig;
	    }
	    else {
	        $smartModule =& contact_getModuleInfo();
	        $hModConfig = &xoops_gethandler('config');
	        $smartConfig = $hModConfig->getConfigsByCat(0, $smartModule->getVar('mid'));
	    }
    }
	return $smartConfig;
}

?>