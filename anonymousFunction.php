<?php
$newfunc = function($para1,$para2) { return "Para 1 = $para1[0]<br>Para 2 = $para2[1]"; };
echo $newfunc(["One","Two"],["Three","Four"]);
?>