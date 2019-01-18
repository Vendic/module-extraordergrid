# Magento 2 - Extra admin order grid
Sometimes, you need another grid for your orders, that shows only orders with a particular status. 

For use cases like: 
- Pre-orders
- Backorders
- Pay by invoice

With this module, it's very easy to setup. Just set the setup like this:
![Configuration screenshot](/docs/media/configuration.png)

Clear your Magento 2 cache, and your new filtered order grid is ready to go:

### Screenshots
Menu:
![Menu screenshot](/docs/media/menu.png)

Filtered order grid:
![Filtered order grid screenshot](/docs/media/grid.png)

### Installation
```bash
composer require vendic/module-extraordergrid
```

### Extending the UI component
This module uses a copied version of the default `order_admin_grid` UIComponent. You can find it here:
**view/adminhtml/ui_component/vendic_extraordergrid_order_grid.xml**

To add/remove columns, just create your own Magento 2 module and extend the UI Component.