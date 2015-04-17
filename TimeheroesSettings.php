<?php

$GLOBALS['wgFooterIcons'] = array(
  "poweredby" => array(
     "mediawiki" => array(
        "src" => null,
        "url" => "//www.mediawiki.org/",
        "alt" => "Powered by MediaWiki",
     )
  ),
  "eea" => array(
     "eea" => array(
        "src" => '/resources/assets/sponsors/eea.png',
        "url" => "http://eeagrants.org/",
        "alt" => "EEA grants",
        "width" => "128",
        "height" => "86",
     )
  )
);

$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'lfTOSLink';
function lfTOSLink( $sk, &$tpl ) {
	$tpl->set( 'sponsorshipcredits', 'Проектът "Систематизиране на опита за работа с доброволци и повишаване на капацитета на НПО" се финансира в рамките на Програмата за подкрепа на НПО в България по Финансовия механизъм на Европейското икономическо пространство 2009-2014 г.' );
	$tpl->data['footerlinks']['info'][] = 'sponsorshipcredits';
	return true;
}
