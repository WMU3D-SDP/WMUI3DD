<?php

echo shell_exec('git add --all');
echo shell_exec('sudo -u pi git commit -m "update tourdata"');
echo shell_exec('sudo -u pi git push origin master');
echo shell_exec('sudo -u pi git mv tourdata.txt date("Y_m_d")');
echo shell_exec('sudo -u pi git commit -m "rename"');
echo shell_exec('sudo -u pi push origin master');

?>
