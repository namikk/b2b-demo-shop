<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Yves\MultiCartPage\Plugin\Router;

use Spryker\Yves\Router\Route\RouteCollection;
use SprykerShop\Yves\MultiCartPage\Plugin\Router\MultiCartPageRouteProviderPlugin as SprykerMultiCartPageRouteProviderPlugin;

class MultiCartPageRouteProviderPlugin extends SprykerMultiCartPageRouteProviderPlugin
{
    /**
     * @var string
     */
    public const PYZ_ROUTE_MULTI_CART_SET_DEFAULT_BACK = 'multi-cart/set-default-back';

    /**
     * @var string
     */
    public const ROUTE_NAME_CHECKOUT_ORDER_NAME = 'checkout-order-name';

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = parent::addRoutes($routeCollection);
        $routeCollection = $this->addMultiCartSetDefaultBackRoute($routeCollection);
        $routeCollection = $this->addOrderNameStepRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addMultiCartSetDefaultBackRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/set-default-back/{idQuote}', 'MultiCartPage', 'MultiCart', 'setPyzDefaultBack');
        $route = $route->setRequirement(static::PARAM_ID_QUOTE, '\d+');
        $routeCollection->add(static::PYZ_ROUTE_MULTI_CART_SET_DEFAULT_BACK, $route);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    protected function addOrderNameStepRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/checkout/order-name', 'CheckoutPage', 'Checkout', 'orderNameAction');
        $route = $route->setMethods(['GET', 'POST']);
        $routeCollection->add(static::ROUTE_NAME_CHECKOUT_ORDER_NAME, $route);

        return $routeCollection;
    }
}
