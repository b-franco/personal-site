<?php

require 'recipe/common.php';

serverList('app/config/servers.yml');
set('repository', 'git@github.com:b-franco/personal-site.git');

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:writable',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');