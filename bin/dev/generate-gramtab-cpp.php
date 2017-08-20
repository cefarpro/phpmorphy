#!/usr/bin/env php
<?php
set_include_path(dirname( __FILE__ ) . '/../../src/' . PATH_SEPARATOR . get_include_path());
require('phpMorphy.php');

$hpp = 'gramtab.hpp';
$cpp = 'gramtab.cpp';

try {
    phpMorphy_Generator_GramTab::generateCpp($hpp, $cpp);
} catch (Exception $e) {
    echo $e;
    exit(1);
}
