
<?php
echo"Voorbeeld invul: 10d 10u 10m 10s".PHP_EOL;

$input = readline();
$input2 = explode(" " , $input);

foreach ($input2 as $tijden) {
$tijdsoort =substr($tijden, -1);

    switch ($tijdsoort) {
        case "s":
            $s = (int)$tijden;
            break;
        case "m":
            $m =(int)$tijden*60;
            break;
        case "u":
            $u =(int)$tijden*3600;
            break;
        case "d":
            $d =(int)$tijden*3600*24;
            break;
}
}
$seconds = $s+$m+$d+$u;
echo "$seconds seconden";