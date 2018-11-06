<?php
echo shell_exec('git config --global --get user.email');
echo shell_exec('git config --global --get user.name');
echo shell_exec('git add --all');
echo shell_exec('git commit -m "update tourdata"');
echo shell_exec('git push origin master');

?>
