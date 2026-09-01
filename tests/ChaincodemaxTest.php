<?php
/**
 * Tests for ChainCodeMax
 */

use PHPUnit\Framework\TestCase;
use Chaincodemax\Chaincodemax;

class ChaincodemaxTest extends TestCase {
    private Chaincodemax $instance;

    protected function setUp(): void {
        $this->instance = new Chaincodemax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chaincodemax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
