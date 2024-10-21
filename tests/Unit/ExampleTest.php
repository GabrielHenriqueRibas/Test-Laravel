<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testSomaValores()
    {
        $resultado = 5 + 3;
        $this->assertEquals(8, $resultado, "A soma de 5 e 3 deveria ser 8");
    }

}
