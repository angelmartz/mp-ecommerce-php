<?php
/* Config Variables from Heroku Enviroments */
$config = [
    'site_url' => getenv('SITE-URL'),
    'external_reference' => getenv('EMAIL'),
    'integrator-id' => getenv('INTEGRATOR-ID'),
    'public-key' => getenv('PUBLIC-KEY'),
    'access-token' => getenv('ACCESS-TOKEN')
];