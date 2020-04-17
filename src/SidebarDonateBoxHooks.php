<?php

class SidebarDonateBoxHooks {

	/**
	 * @see https://www.mediawiki.org/wiki/Manual:Hooks/SkinBuildSidebar
	 *
	 * @param Skin $skin
	 * @param array &$bar
	 */
	public static function onSkinBuildSidebar( $skin, &$bar ) {
		global $egSidebarDonateBoxContent;
		$bar['donate'] = $egSidebarDonateBoxContent;
	}
}
