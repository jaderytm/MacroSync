<?php
/**
 * Tests for MacroSync
 */

use PHPUnit\Framework\TestCase;
use Macrosync\Macrosync;

class MacrosyncTest extends TestCase {
    private Macrosync $instance;

    protected function setUp(): void {
        $this->instance = new Macrosync(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Macrosync::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
