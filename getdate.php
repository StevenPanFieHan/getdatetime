<?php
 date_default_timezone_set('Asia/Tokyo');
 $currenttime = date("m-d-Y H:i:s");
 list($ddd,$ttt) = split(' ',$currenttime);
 echo "$ddd/$ttt\n";
?
