<?php

namespace Pyz\Yves\CheckoutPage\Process\Steps;

use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use SprykerShop\Yves\CheckoutPage\Process\Steps\AbstractBaseStep;
use Spryker\Yves\StepEngine\Dependency\Step\StepWithBreadcrumbInterface;
use Symfony\Component\HttpFoundation\Request;

class OrderNameStep extends AbstractBaseStep implements StepWithBreadcrumbInterface
{
    public function requireInput(AbstractTransfer|QuoteTransfer $quoteTransfer): bool
    {
        return true;
    }

    public function execute(Request $request, AbstractTransfer|QuoteTransfer $quoteTransfer): QuoteTransfer
    {
        return $quoteTransfer;
    }

    public function postCondition(AbstractTransfer|QuoteTransfer $quoteTransfer): bool
    {
        return !empty($quoteTransfer->getOrderName());
    }

    public function getBreadcrumbItemTitle(): string
    {
        return 'Order Name';
    }

    public function isBreadcrumbItemEnabled(AbstractTransfer $quoteTransfer): bool
    {
        return true;
    }

    public function isBreadcrumbItemHidden(AbstractTransfer $quoteTransfer): bool
    {
        return false;
    }
}
