vendor/bin/phpmd app,bootstrap,config,database,routes,tests text phpmd.xml && # can produce this issue: https://github.com/phpmd/phpmd/issues/853
  vendor/bin/phpstan analyse --no-interaction --memory-limit=1G &&
  vendor/bin/psalm # can produce this issue: https://github.com/psalm/psalm-plugin-laravel/issues/145

