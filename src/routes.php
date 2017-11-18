<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', \ProfileController::class . ':index');
