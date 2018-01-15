<?php 
$html = file_get_contents($_GET['http://109.74.196.48:8251/stream']);
preg_match('$Currently playing:</td><td class="streamstats">(.*)</td>$s',$html,$match);
echo preg_replace('/\s+/', ' ',$match[1]);
