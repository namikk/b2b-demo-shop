<?php

namespace Pyz\Zed\Sales\Communication\Plugin\Sales;

use Generated\Shared\Transfer\CheckoutErrorTransfer;
use Generated\Shared\Transfer\CheckoutResponseTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\CheckoutExtension\Dependency\Plugin\CheckoutPreConditionPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;

/**
 * @method \Pyz\Zed\Sales\Business\SalesFacadeInterface getFacade()
 * @method \Pyz\Zed\Sales\SalesConfig getConfig()
 */
class OrderNameCheckoutPreConditionPlugin extends AbstractPlugin implements CheckoutPreConditionPluginInterface
{
    public function checkCondition(QuoteTransfer $quoteTransfer, CheckoutResponseTransfer $checkoutResponseTransfer): bool
    {
        if($this->getFacade()->checkOrderName($quoteTransfer->getOrderName())) {
            return true;
        } else {
            $error = new CheckoutErrorTransfer();
            $error->setMessage('Order name is invalid.');
            $error->setErrorCode(400);
            $checkoutResponseTransfer->setIsSuccess(false);
            $checkoutResponseTransfer->addError($error);

            return false;
        }
    }
}
