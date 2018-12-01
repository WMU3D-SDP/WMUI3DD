THANK YOU FOR THE SUBMISSION!
<?php

echo shell_exec('sudo -u root chmod a+w .git/objects');

$date = new DateTime();
rename("tourdata.txt" , "tourdata" . $date->format('Y_m_d_H:i') . ".txt");
echo shell_exec('sudo -u root git add --all');
echo shell_exec('sudo -u pi git commit -m "update tourdata"');
echo shell_exec('sudo -u pi git push origin master');

?>
