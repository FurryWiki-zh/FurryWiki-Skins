<?php

if (!function_exists('wfLoadSkin')) {
    function wfLoadSkin($name, $path = null) {
        /// 伪定义，仅用于静态分析工具
    }
}

$furwikiSkinsPath = "/www/wwwroot/mw-utils/FurryWiki-Skins";
$furwikiSettingsPath = "/www/wwwroot/mw-utils/FurryWiki-Settings";

wfLoadSkin( 'Vector', "$furwikiSkinsPath/Vector/skin.json" );
wfLoadSkin( 'Citizen', "$furwikiSkinsPath/Citizen/skin.json" );
wfLoadSkin( 'Timeless', "$furwikiSkinsPath/Timeless/skin.json" );

$wgDefaultSkin = "Citizen";
#$wgCitizenSearchDescriptionSource = "wikidata";
$wgCitizenSearchGateway = 'mwActionApi';
$wgCitizenEnableCollapsibleSections = false;
#$wgCitizenThemeColor = "#338c60";
$wgCitizenMaxSearchResults = 6;