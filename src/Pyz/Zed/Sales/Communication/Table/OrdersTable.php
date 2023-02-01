<?php

namespace Pyz\Zed\Sales\Communication\Table;

use Orm\Zed\Sales\Persistence\Map\SpySalesOrderTableMap;
use Spryker\Zed\Sales\Communication\Table\OrdersTable as SprykerOrdersTable;

class OrdersTable extends SprykerOrdersTable
{
    protected function getHeaderFields(): array
    {
        return array_merge(
            parent::getHeaderFields(),
            [
                SpySalesOrderTableMap::COL_ORDER_NAME => 'Order Name',
            ]
        );
    }

    protected function getSearchableFields()
    {
        return array_merge(
            parent::getSearchableFields(),
            [
                SpySalesOrderTableMap::COL_ORDER_NAME,
            ]
        );
    }

    protected function getSortableFields()
    {
        return array_merge(
            parent::getSortableFields(),
            [
                SpySalesOrderTableMap::COL_ORDER_NAME,
            ]
        );
    }
}
