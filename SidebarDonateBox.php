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

if ( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'SidebarDonateBox',
	'url' => 'https://www.mediawiki.org/wiki/Extension:SidebarDonateBox',
	'version' => '1.2.0',
	'author' => "[http://danf.ca/mw/ Daniel Friesen]",
	'descriptionmsg' => 'sidebardonatebox-desc',
);
// Internationalization file
$wgMessagesDirs['SidebarDonateBox'] = __DIR__ . '/i18n';

$wgHooks['SkinBuildSidebar'][] = 'efSidebarDonateBox';

function efSidebarDonateBox( $skin, &$bar ) {
	global $egSidebarDonateBoxContent;
	$bar['donate'] = $egSidebarDonateBoxContent;
	return true;
}

# Config variable holding the HTML content of the sidebar
$egSidebarDonateBoxContent = '';
