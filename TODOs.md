## TODOs:
- [x] frontend shop: modify checkout process step engine
- - [x] add new OrderNameStep before AddressStep
- - [x] add order name form + validation
- - convert hardcoded messages and label to glossary entries
- backend shop:
- - [x] extend quote transfer with orderName property
- - extend spy_sales_order db schema with order_name column
- - ensure form field <-> quote transfer <-> spy_sales_order mapping works as expected
- backoffice ui:
- - extend OrdersTable with new order name -> add a SalesTablePlugin

## Notes:
Shop country: DE
Test customer: sonia@spryker.com change123
Backoffice user: admin@spryker.com change123
