<?php
/**
*
* phpBB 3.1.X Project - Persian Translation
* Translators: PHP-BB.IR Group
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'fa',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'برای استفاده از reCaptcha شما باید یک حساب روی <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> ایجاد کرده باشید.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'کد تائید بصری که شما ارسال کردید اشتباه بود.',

	'RECAPTCHA_PUBLIC'				=> 'کلید عمومی reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'کلید عمومی reCaptcha شما. کلیدها می تواند روی <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> تهیه شود.',
	'RECAPTCHA_PRIVATE'				=> 'کلید خصوصی reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Your private reCaptcha key. Keys can be obtained on <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE_EXPLAIN' 	=> 'کلید خصوصی reCaptcha شما. کلیدها می تواند روی <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> تهیه شود.',
	'RECAPTCHA_EXPLAIN'		        => ' تلاش جهت جلوگیری از ارسال خودکار,  نیاز است متن نمایش داده شده را در فیلد مخصوص آن تایپ نمایید.',
	'RECAPTCHA_SOCKET_ERROR'		=> 'مشکلی در برقرار ارتباط با سرویس ری کپچا بوجود آمده است: قادر به باز کردن سوکت نیست. لطفا بعدا تلاش نمایید.',
));
