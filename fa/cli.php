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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'تنظیم این گزینه اگر تنیظیمات پیکربندی تغییر کند که اغلب باعث تغییرات موثری در کش میشود.',
	'CLI_CONFIG_CURRENT'				=> 'مقادیر پیکربندی حاضر, استفاده از 0 و 1 برای مقادیر عددی',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'تنظیمات %s با موفقیت حذف شد.',
	'CLI_CONFIG_NEW'					=> 'مقادیر پیکربندی جدید, استفاده از 0 و 1 برای مقادیر عددی',
	'CLI_CONFIG_NOT_EXISTS'				=> 'تنظیمات %s موجودو نیست.',
	'CLI_CONFIG_OPTION_NAME'			=> 'نام تنظیمات پیکربندی',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'تنظیم این گزینه اگر مقدار وارد شده قرار نباشد در خط جداگانه نمایش داده شود.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'اضافه شدن مقادیر توسط:',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'افزایش تنظیمات %s با موفقیت انجام شد.',
	'CLI_CONFIG_SET_FAILURE'			=> 'اماکن تنظیم %s وجود ندارد.',
	'CLI_CONFIG_SET_SUCCESS'			=> 'تنظیمات %s با موفقیت انجام شد.',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'نمایش لیست وظایف زمانی آماده و غیر آماده',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'اجرای تمامی وظایف زمانی',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'نام وظیفه قابل اجرا',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'به روز رسانی دیتابیس توسط تثبیت انتقال Migration',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'حذف گزینه پیکربندی',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'غیر فعال کردن افزونه مورد مشخص.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'فعال کردن افزونه مشخص.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'پیدا کردن انتقال بدون وابسطه.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'تعمیر ساختار درختی انجمن ها و مدل ها ',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'گرفتن مقدار برای گزینه پیکیربندی',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'افزایش مقدار صحیح گزینه های پیکری بندی',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'لیست تمامی افزونه های درون دیتابیس و فایل های سیستمی',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'اجرا در حالت امن (بدون افزونه ها).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'اجرا shell',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'پاکسازی افزونه مشخص.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'محسابه مجدد user_email_hash در جدول کاربران درون دیتابیس',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'تنظیم مقدار گزینه پیکربندی تنها درصورتیکه مقدار فعلی موجود باشد.',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'تنظیم مقدار گزینه های پیکربندی',
	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'به روز رسانی هش پسوردهای انقضا شده به هش های با bcrypt.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'امکان غیر فعال سازی افزونه %s وجود ندارد.',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'افزونه %s با موفقیت غیر فعال شد.',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'امکان فعال سازی افزونه %s وجود ندارد.',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'افزونه %s با موفقیت فعال شد.',
	'CLI_EXTENSION_NAME'				=> 'نام افزونه',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'امکان پاکسازی افزونه %s وجود ندارد.',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'پاکسازی افزونه %s با موفقیت انجام شد.',
	'CLI_EXTENSION_NOT_FOUND'			=> 'افزونه ای یافت نشد.',
        'CLI_EXTENSIONS_AVAILABLE' => 'موجود',
        'CLI_EXTENSIONS_DISABLED' => 'غیر فعال',
        'CLI_EXTENSIONS_ENABLED' => 'فعال',

    'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'تعمیرات ساختار  درختی انجمن ها و مدل ها با موفقیت انجام شد. ',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'هش Hash تمامی ایمیل های با موفقیت محاسبه شد.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'پسوردهای منقضی و هش شده با موفقیت به روز رسانی شد.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' در صورت تمایل شما میتوانید نام یک و ظیفه را برای اجرا برای یک کار مشخص کنید.',
));