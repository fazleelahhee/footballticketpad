<?php

echo shell_exec('rsync --update -vraz -e ssh jenkins@192.168.25.51:/var/lib/jenkins/www/m.randox/* /home/mrandox/cms');
echo shell_exec('composer dump-autoload');
echo shell_exec('php artisan dump-autoload');