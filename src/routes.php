<?php

use Slim\Http\Request;
use Slim\Http\Response;

/**
 * @api [get] /profile/facebook/{userId}
 * description: "Returns a facebook user profile."
 */
$app->get('/profile/facebook/[{user}]', \ProfileController::class . ':index');
