<?php
require_once __DIR__ . '/../src/Program2.php';

class Program2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName()
    {
        $program2 = new Program2();
        $program2->setName('Ian');
        $this->assertEquals($program2->getName(), 'Ian');
    }

    public function testGetAge()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertEquals($program2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Green');
        $this->assertEquals($program2->getFaveColor(), 'Green');
    }

    public function testGetNameCheckString()
    {
        $program2 = new Program2();
        $program2 ->setName('Ian');
        $this->assertIsString($program2->getName(), 'Ian');
    }

    public function testGetAgeCheckInt()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertIsInt($program2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $program2 = new Program2();
        $program2->setAge(22);
        $this->assertIsNumeric($program2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $program2 = new Program2();
        $program2->setFaveColor('Green');
        $this->assertIsString($program2->getFaveColor(), 'Green');
    }

    public function testGetTogetherInput()
    {
        $program2 = new Program2();
        $program2->setTogetherInput('Ian', 22, 'Green');
        $this->assertEquals($program2->getTogetherInput(), 'Ian', 22, 'Green');
    }

}