<?php

namespace PyzTest\Zed\Sales\Communication\Plugin\Sales;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Pyz\Zed\Sales\Communication\Plugin\Sales\OrderNameCheckoutPreConditionPlugin;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group Product
 * @group Communication
 * @group Sales
 * Add your own group annotations below this line
 * codecept run -c tests/PyzTest/Zed/Sales
 */
class OrderNameCheckoutPreConditionPluginTest extends Unit
{
    /**
     * @var \PyzTest\Zed\Sales\SalesCommunicationTester
     */
    protected $tester;

    public function testOrderNameIsValid(): void
    {
        //Prepare
        $plugin = new OrderNameCheckoutPreConditionPlugin();
        $quoteTransfer = new QuoteTransfer();
        $quoteTransfer->setOrderName('valid123');
        $checkoutResponseTransfer = new CheckoutResponseTransfer();
        $checkoutResponseTransfer->setIsSuccess(true);

        //Act
        $result = $plugin->checkCondition($quoteTransfer, $checkoutResponseTransfer);

        //Assert
        $this->assertTrue($result);
        $this->assertEmpty($checkoutResponseTransfer->getErrors());
        $this->assertTrue($checkoutResponseTransfer->getIsSuccess());
    }

    public function testOrderNameIsInvalid(): void
    {
        //Prepare
        $plugin = new OrderNameCheckoutPreConditionPlugin();
        $quoteTransfer = new QuoteTransfer();
        $quoteTransfer->setOrderName('');
        $checkoutResponseTransfer = new CheckoutResponseTransfer();
        $checkoutResponseTransfer->setIsSuccess(true);

        //Act
        $result = $plugin->checkCondition($quoteTransfer, $checkoutResponseTransfer);

        //Assert
        $this->assertFalse($result);
        $this->assertFalse($checkoutResponseTransfer->getIsSuccess());
        $this->assertCount(1, $checkoutResponseTransfer->getErrors());
        $this->assertEquals(400, $checkoutResponseTransfer->getErrors()[0]->getErrorCode());
    }
}
