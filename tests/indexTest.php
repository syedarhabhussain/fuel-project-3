<?php
use PHPUnit\Framework\TestCase;

class LoginFormTest extends TestCase
{
    public function testHeaderInclude()
    {
        ob_start();
        include 'header.php';
        $output = ob_get_clean();
        $this->assertStringContainsString('<header', $output);
    }
}
