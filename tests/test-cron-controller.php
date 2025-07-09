<?php
use PHPUnit\Framework\TestCase;
use MyPlugin\Controllers\Cron_Controller;
use MyPlugin\Core\Logger;

class CronControllerTest extends TestCase {

    public function testCronRunWritesToLog() {
        $log_file = dirname(__DIR__) . '/logs/myplugin.log';
        if (file_exists($log_file)) {
            unlink($log_file);
        }

        Cron_Controller::run();

        $this->assertFileExists($log_file);

        $contents = file_get_contents($log_file);
        $this->assertStringContainsString('Cron Task Executed', $contents);
    }
}
