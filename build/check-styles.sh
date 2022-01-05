echo "\nphpmd:\n" &&
    vendor/bin/phpmd app,bootstrap,config,database,routes,tests text phpmd.xml && # can produce this issue: https://github.com/phpmd/phpmd/issues/853

    # TODO: phpmd isn't outputting anything?

    echo "\nphp-cs-fixer:\n" &&
    vendor/bin/php-cs-fixer fix --verbose --no-interaction --dry-run --diff --stop-on-violation &&
    echo "\nphpcs:\n" &&
    vendor/bin/phpcs -p -s -d memory_limit=1G &&
    echo "\nphpstan:\n" &&
    vendor/bin/phpstan analyse --no-interaction --memory-limit=1G &&
    echo "\npsalm:\n" &&
    vendor/bin/psalm # can produce this issue: https://github.com/psalm/psalm-plugin-laravel/issues/145
