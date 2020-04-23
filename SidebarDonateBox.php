<?php
/**
 * SidebarDonateBox
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://danf.ca/mw/)
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:SidebarDonateBox Documentation
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SidebarDonateBox' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['SidebarDonateBox'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the SidebarDonateBox extension. ' .
		'Please use wfLoadExtension() instead, ' .
		'see https://www.mediawiki.org/wiki/Special:MyLanguage/Manual:Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the SidebarDonateBox extension requires MediaWiki 1.29+' );
}
