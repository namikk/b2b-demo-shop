<?php

namespace PyzTest\Zed\Sales\Business\Checker;

use Codeception\Test\Unit;
use Pyz\Zed\Sales\Business\Checker\OrderNameChecker;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Product
 * @group Business
 * @group Checker
 * Add your own group annotations below this line
 * codecept run -c tests/PyzTest/Zed/Sales
 */
class OrderNameCheckerTest extends Unit
{
    /**
     * @var \PyzTest\Zed\Sales\SalesBusinessTester
     */
    protected $tester;

    public function testValidOrderName(): void
    {
        //Prepare
        $orderNameChecker = new OrderNameChecker();
        $orderName = 'test123';

        //Act
        $result = $orderNameChecker->checkOrderName($orderName);

        //Assert
        $this->assertTrue(true, $result);
    }

    public function testInvalidOrderNames(): void
    {
        //Prepare
        $orderNameChecker = new OrderNameChecker();
        $orderName1 = 'TEST123';
        $orderName2 = '!!!!!';
        $orderName3 = '';
        $orderName4 = null;

        //Act
        $result1 = $orderNameChecker->checkOrderName($orderName1);
        $result2 = $orderNameChecker->checkOrderName($orderName2);
        $result3 = $orderNameChecker->checkOrderName($orderName3);
        $result4 = $orderNameChecker->checkOrderName($orderName4);

        //Assert
        $this->assertFalse($result1);
        $this->assertFalse($result2);
        $this->assertFalse($result3);
        $this->assertFalse($result4);
    }
}
