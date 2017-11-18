<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/profile/facebook/[{user}]', \ProfileController::class . ':index');
