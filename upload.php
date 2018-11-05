<?php
                              
echo shell_exec('git add --all');
echo shell_exec('git commit -m "update tourdata"');
echo shell_exec('git push origin master');

?>
