<?php
$d = new DateTime('2015-01-08');
$di = new DateInterval('P1M');
$d->add($di);

echo $d->format('Y-m-d'), "\n";

