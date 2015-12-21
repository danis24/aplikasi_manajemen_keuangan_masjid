<?php
require_once '../testCode/hitungZakatController.php';
/**
 * hitungZakat test case.
 */
class hitungZakatControllerTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var hitungZakat
     */
    private $hitungZakatController;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated hitungZakatTest::setUp()
        
        $this->hitungZakatController = new hitungZakatController(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated hitungZakatTest::tearDown()
        $this->hitungZakatController = null;
        
        parent::tearDown();
    }


    /**
     * Tests hitungZakat->nisabEmas()
     */
    public function testNisabEmas()
    {
          $ExpectedResult = 14950000;
          $result =  $this->hitungZakatController->nisabEmas(511000,200000000,200000000,200000000,2000000);
          $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabEmas2()
    {
        $ExpectedResult = 3586250;
        $result =  $this->hitungZakatController->nisabEmas(511000,35250000,85000000,75200000,52000000);
        $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabEmasNull()
    {
        $ExpectedResult = "Tidak Wajib Zakat";
        $result =  $this->hitungZakatController->nisabEmas();
        $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabEmasKurang()
    {
        $ExpectedResult = "Tidak Wajib Zakat";
        $result =  $this->hitungZakatController->nisabEmas(511000,10000000,10000000,1000000,10000000);
        $this->assertEquals($ExpectedResult, $result);
    }
    public function testNisabPerak()
    {
        $ExpectedResult = 14950000;
        $result =  $this->hitungZakatController->nisabPerak(11000,200000000,200000000,200000000,2000000);
        $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabPerak2()
    {
        $ExpectedResult = 1491250;
        $result =  $this->hitungZakatController->nisabPerak(11000,45650000,56000000,10000000,52000000);
        $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabPerakNull()
    {
        $ExpectedResult = "Tidak Wajib Zakat";
        $result =  $this->hitungZakatController->nisabPerak();
        $this->assertEquals($ExpectedResult, $result);
    }
    
    public function testNisabPerakKurang()
    {
        $ExpectedResult = "Tidak Wajib Zakat";
        $result =  $this->hitungZakatController->nisabPerak(11000,1000000,10000000,1000000,10000000);
        $this->assertEquals($ExpectedResult, $result);
    }
}

