<?php
$routes = [
    'metadata',
    'createUser',
    'assignActionsToUser',
    'getUser',
    'updateUser',
    'deleteUser',
    'usersList',
    'createAction',
    'completeAction',
    'cancelAction',
    'getSingleAction',
    'getActionMeter',
    'getActionsList',
    'deleteAction',
    'getGroupsList',
    'createGroup',
    'getSingleGroup',
    'updateGroup',
    'deleteGroup'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

