<?php
/**
 * Tests for DappForge
 */

use PHPUnit\Framework\TestCase;
use Dappforge\Dappforge;

class DappforgeTest extends TestCase {
    private Dappforge $instance;

    protected function setUp(): void {
        $this->instance = new Dappforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Dappforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
