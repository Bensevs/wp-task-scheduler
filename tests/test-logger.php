<?php
use PHPUnit\Framework\TestCase;
use MyPlugin\Core\Logger;

class LoggerTest extends TestCase {

    public function testLogCreatesFileAndWritesMessage() {
        $log_file = dirname(__DIR__) . '/logs/myplugin.log';

        // Delete old log file if exists
        if (file_exists($log_file)) {
            unlink($log_file);
        }

        Logger::log('Test Message');

        $this->assertFileExists($log_file);

        $contents = file_get_contents($log_file);
        $this->assertStringContainsString('Test Message', $contents);
    }
}
