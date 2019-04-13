<?php

date_default_timezone_set('Asia/Tokyo');

echo date('d-m-Y h:i_s');

echo '<hr>';

echo (new DateTime())->format('d-m-Y h:i:s');
