## TODOs:
- frontend shop: modify checkout process step engine
- - add new OrderNameStep before AddressStep
- - add order name form + validation
- backend shop:
- - extend quote transfer with orderName property
- - extend spy_sales_order db schema with order_name column
- - ensure form field <-> quote transfer <-> spy_sales_order mapping works as expected
- backoffice ui:
- - extend OrdersTable with new order name -> add a SalesTablePlugin

## Notes:
Shop country: DE
Test customer: sonia@spryker.com change123
Backoffice user: admin@spryker.com change123
