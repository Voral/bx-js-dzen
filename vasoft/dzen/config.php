<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

return [
    'js' => [
        './dist/vasoft-dzen.bundle.js',
    ],
    'css' => [
        './dist/vasoft-dzen.bundle.css',
    ],
    'rel' => [
		'main.polyfill.core',
	],
    'skip_core' => true,
];
