<?php

use MyApp\Application\ApplicationConstants;

$config[ApplicationConstants::TWIG_OPTIONS] = [
	"twig.path" => __DIR__.'/../../views',
	'twig.options'=> [
		'cache'     => __DIR__.'/../../../var/cache',
	],
	'twig.form.templates' => [
		'form_div_layout.html.twig',
		'layouts/form_layout.twig'
	],
    'twig.globals' => [
        'layout' => 'layouts/layout.twig'
    ]
];

$config[ApplicationConstants::LOG_LEVEL] = "ERROR";
