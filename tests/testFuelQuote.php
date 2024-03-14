<?php
use PHPUnit\Framework\TestCase;

class FuelFormTest extends TestCase
{
    public function testFuelInclude()
    {
        ob_start();
        include __DIR__ . '/../src/fuel-quote-form.php';
        $output = ob_get_clean();
        $this->assertStringContainsString('<head', $output);
        $this->assertStringContainsString('<body', $output);
    }
}
