<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

return [
	'js' => './dist/portal.bundle.js',
	'rel' => [
		'main.polyfill.core',
		'ui.vue',
	],
	'skip_core' => true,
];
