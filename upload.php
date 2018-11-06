<?php

echo shell_exec('git add --all');
echo shell_exec('sudo -u pi git commit -m "update tourdata"');
echo shell_exec('sudo -u pi git push origin master');

?>
