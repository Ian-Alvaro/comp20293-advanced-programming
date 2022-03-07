<?php
require_once __DIR__ . '/../src/Program.php';

class ProgramTest extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $program = new Program (15);
        $result = $program->modulus(4);

        $this->assertEquals(3, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $program = new Program (5);
        $result = $program->modulus(30);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $program = new Program (4);
        $result = $program->modulus('I');
    }

    public function testModulus1()
    {
        $program = new Program (25);
        $result = $program->modulus(10);

        $this->assertEquals(5, $result);
    }

    public function testModulus2()
    {
        $program = new Program (42);
        $result = $program->modulus(8);

        $this->assertEquals(2, $result);
    }

}