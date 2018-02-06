<?php

//echo '<pre>'.print_r(file_get_contents("php://input")).'</pre>';
echo '<pre>'.print_r(json_decode(file_get_contents("php://input")),1).'</pre>';