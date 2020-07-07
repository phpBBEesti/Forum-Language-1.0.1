<?php

/**
 *
 * Forum Language. An extension for the phpBB Forum Software package.
 * Estonian translation by phpBBeesti.ee [Exabot]
 *
 * @copyright (c) 2017, Saeed Hubaishan, http://salafitech.net
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'FORUM_LANGUAGE'			=> 'Foorumi keel',
	'DEFAULT_LANGUAGE'			=> 'Vaikimisi keel',
	'FL_AFTER_LANGUAGE_PACK_DELETED' => 'kõik seda keelt kasutavad foorumid on lähtestatud foorumi vaikekeelele.',
));
