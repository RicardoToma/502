<?php

//                   h, i,  s,  m,  d, Y
$timeStamp = mktime(10, 9, 10, 12, 25, 2019);
echo $timeStamp;
echo '<hr>';
echo date('d-m-Y H:i:s', $timeStamp);