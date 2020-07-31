<?php
/* Config Variables from Heroku Enviroments */
$config = [
    'integrator-id' => getenv('INTEGRATOR-ID'),
    'public-key' => getenv('PUBLIC-KEY'),
    'access-token' => getenv('ACCESS-TOKEN')
];