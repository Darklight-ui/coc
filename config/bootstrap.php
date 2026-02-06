<?php
$basepath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
define('BASE_URL', $basepath === '' ? '/' : $basepath . '/');
