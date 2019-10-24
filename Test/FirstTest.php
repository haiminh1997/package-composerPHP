<?php

use App\valUrl;
$test = new valUrl;
echo "<pre>";
print_r($test->checkURRL('http://google.com/xyz.html'));
echo "</pre>";
