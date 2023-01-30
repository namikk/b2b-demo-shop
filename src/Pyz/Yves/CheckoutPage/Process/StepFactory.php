<?php

namespace Pyz\Yves\CheckoutPage\Process;

use Pyz\Yves\CheckoutPage\Process\Steps\OrderNameStep;
use Pyz\Yves\MultiCartPage\Plugin\Router\MultiCartPageRouteProviderPlugin;
use SprykerShop\Yves\CheckoutPage\Process\StepFactory as SprykerStepFactory;

class StepFactory extends SprykerStepFactory
{
    public function getSteps(): array
    {
        return [
            $this->createEntryStep(),
            $this->createCustomerStep(),
            $this->createOrderNameStep(),
            $this->createAddressStep(),
            $this->createShipmentStep(),
            $this->createPaymentStep(),
            $this->createSummaryStep(),
            $this->createPlaceOrderStep(),
            $this->createSuccessStep(),
            $this->createErrorStep(),
        ];
    }

    public function createOrderNameStep(): OrderNameStep
    {
        return new OrderNameStep(
            MultiCartPageRouteProviderPlugin::ROUTE_NAME_CHECKOUT_ORDER_NAME,
            $this->getConfig()->getEscapeRoute(),
        );
    }
}
