<?php

include_once 'hammer.php';

class TokenTest extends PHPUnit_Framework_TestCase 
{
    protected $parser;

    protected function setUp() 
    {
        $this->parser = h_token("95\xa2");
    }
    public function testSuccess()
    {
        $result = h_parse($this->parser, "95\xa2");
        $this->assertEquals("95\xa2", $result); 
    }      
    public function testFailure()
    {
        $result = h_parse($this->parser, "95");
        $this->assertEquals(NULL, $result);
    }
}
?>