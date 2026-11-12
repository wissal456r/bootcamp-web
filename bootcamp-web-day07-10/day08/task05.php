<?php
function calc_average(array $numbers):float { return count($numbers)?round(array_sum($numbers)/count($numbers),1):0.0; }
