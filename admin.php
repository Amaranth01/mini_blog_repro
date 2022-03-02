<?php

require __DIR__ . '/includes.php';

$roleManager = new RoleManager();
$roles = $roleManager->findAll();