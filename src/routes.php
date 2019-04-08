<?php

use App\Order\Infrastructure\Http\Controller\OrderController;

$app->get('/order/{id}', OrderController::class . '::show');
$app->post('/order', OrderController::class . '::save');