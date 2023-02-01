## TODOs:
- [x] frontend shop: modify checkout process step engine
- - [x] add new OrderNameStep before AddressStep
- - [x] add order name form + validation
- - convert hardcoded messages and labels to glossary entries
- [x] backend shop:
- - [x] extend quote transfer with orderName property
- - [x] extend spy_sales_order db schema with order_name column
- - [x] ensure form field <-> quote transfer <-> spy_sales_order mapping works as expected
- - [x] add order name backend validation instead of trusting frontend
- - refactor VALIDATION_PATTERN_ORDER_NAME and OrderNameOrderExpanderPreSavePlugin to comply with Spryker SOLID conventions
- [x] backoffice ui:
- - [x] extend OrdersTable with new order name

## Notes:
Shop country: DE

Test customer: sonia@spryker.com change123

Backoffice user: admin@spryker.com change123
