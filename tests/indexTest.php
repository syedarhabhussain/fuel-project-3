<?php
use PHPUnit\Framework\TestCase;

class LoginFormTest extends TestCase
{
    public function testLoginInclude()
    {
        ob_start();
        include __DIR__ . '/../src/index.php';
        $output = ob_get_clean();
        $this->assertStringContainsString('<head', $output);
        $this->assertStringContainsString('<body', $output);
    }
}
