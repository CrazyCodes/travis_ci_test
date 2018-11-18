<?php
    
    use PHPUnit\Framework\TestCase;
    
    class BasicTest extends TestCase
    {
        public function testInt()
        {
            $this->assertArrayHasKey("name", [
                "name" => "ABC",
                "age"  => "CDE",
            ]);
        }
    }
