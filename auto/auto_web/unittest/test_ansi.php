<?php
echo __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/vendor/autoload.php';

use SensioLabs\AnsiConverter\AnsiToHtmlConverter;

$converter = new AnsiToHtmlConverter();
$ansi = "ok! start run
run phpunit
save to logfile = /auto/sh/log_phpunit/coverage/login/20230511_015006_elfjane.log
> cd /var/www/login && php artisan test --coverage --min=90


Warning: TTY mode requires /dev/tty to be read/writable.

  [30;42;1m PASS [39;49;22m[39m Tests\Unit\Http\Controllers\APIControllerTest[39m
  [32;1m✓[39;22m[39m [2mset response header[22m[39m
  [32;1m✓[39;22m[39m [2mset data[22m[39m
  [32;1m✓[39;22m[39m [2mset and get[22m[39m
  [32;1m✓[39;22m[39m [2msuccess[22m[39m

  [30;42;1m PASS [39;49;22m[39m Tests\Unit\ExampleTest[39m
  [32;1m✓[39;22m[39m [2mthat true is true[22m[39m
";
echo $ansi;
$html = $converter->convert($ansi);
echo $html;

?>