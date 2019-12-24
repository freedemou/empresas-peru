<?php

$router = $di->getRouter();

$router->add(
    "/:action",
    array(
        "controller" => "index",
        "action"     => 1,
    )
);

$router->handle();