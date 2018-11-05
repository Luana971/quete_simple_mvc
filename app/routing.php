<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'],
    ],
    'Category' => [
        ['index', '/category', 'GET'],
        ['show', '/category/{id}', 'GET'],
        ['edit', '/category/edit/{id:\d+}', ['GET', 'POST']],
        ['show', '/category/{id:\d+}', 'GET'],
        ['delete', '/category/delete/{id:\d+}', 'GET'],
    ],
];