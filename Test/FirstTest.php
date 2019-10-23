<?php
/**
 * Created by PhpStorm.
 * User: HaiMinh
 * Date: 10/21/2019
 * Time: 9:10 AM
 */

use App\valUrl;
$test = new valUrl;
echo "<pre>";
print_r($test->checkURRL('http://google.com/xyz.html'));
echo "</pre>";