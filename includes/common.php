<?php
/*
 * Project:     EQdkp GuildBank
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date$
 * -----------------------------------------------------------------------
 * @author      $Author$
 * @copyright   2005-2014 Wallenium
 * @link        http://eqdkp-plus.com
 * @package     guildbank
 * @version     $Rev$
 *
 * $Id$
 */

if(!defined('EQDKP_INC'))
{
	header('HTTP/1.0 Not Found');
	exit;
}

include_once($eqdkp_root_path.'common.php');
if (!registry::register('plugin_manager')->check('guildbank', PLUGIN_INSTALLED) ) {
    message_die(registry::register('user')->lang('guildbank_not_installed'));
}
require_once($eqdkp_root_path.'plugins/guildbank/includes/gb_money.class.php');
?>