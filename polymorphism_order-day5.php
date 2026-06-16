<?php
// Level 3 — Real World Project 🔴
// E-Commerce Order System banao — jaise Flipkart, Amazon mein hota hai.
// Parent class Order:
// Properties: $orderId, $amount
// Constructor mein dono lo
// Method processOrder() — "Processing order #ORD001 of Rs.5000"

// OnlineOrder — child:
// Extra property: $paymentMethod
// processOrder() override:
// "Online Order #ORD001 processed via UPI | Amount: Rs.5000"
// getInvoice():
// "Invoice: Order #ORD001 | Amount: Rs.5000 | Payment: UPI"

// CODOrder — child:
// Extra property: $address
// processOrder() override:
// "COD Order #ORD001 will be delivered to: 123 Delhi Street | Amount: Rs.5000"
// getInvoice():
// "Invoice: Order #ORD001 | Amount: Rs.5000 | Payment: Cash on Delivery"

// StorePickup — child:
// Extra property: $storeName
// processOrder() override:
// "Store Pickup Order #ORD001 ready at: Delhi Store | Amount: Rs.5000"
// getInvoice():
// "Invoice: Order #ORD001 | Amount: Rs.5000 | Pickup: Delhi Store"

class Order
{
    protected $amount, $orderId;

    function __construct($amount, $orderId)
    {
        $this->amount = $amount;
        $this->orderId = $orderId;
    }

    function processOrder()
    {
        return "Processing order #ORD001 of Rs.5000";
    }
}
class OnlineOrder extends  Order
{
    private $paymentMethod;

    function __construct($amount, $orderId, $paymentMethod) {
        parent::__construct($amount, $orderId);
        $this->paymentMethod = $paymentMethod;
    }

    function processOrder() {
        return 'Online Order #ORD001 processed via ' . $this->paymentMethod . ' | Amount: Rs.' . $this->amount;
    }
    function getInvoice() {
        return 'Invoice: Order' . $this->orderId . ' | Amount: Rs' . $this->amount . ' | Payment:' . $this->paymentMethod;
    }
}

class CODOrder extends  Order{
    private $address;

    function __construct($amount, $orderId, $address){
        parent::__construct($amount, $orderId);
        $this->address = $address;
    }

    function processOrder(){
        return 'COD Order #ORD001 will be delivered to:' . $this->address .   '| Amount: Rs.' . $this->amount;
    }
    function getInvoice(){
        return 'Invoice: Order' . $this->orderId . ' | Amount: Rs' . $this->amount . ' | Payment: Cash on Delivery';
    }
}



class StorePickup extends  Order{
    private $storeName;

    function __construct($amount, $orderId, $storeName){
        parent::__construct($amount, $orderId);
        $this->storeName = $storeName;
    }

    function processOrder(){
        return 'Store Pickup Order #ORD001 ready at: ' . $this->storeName .   '| Amount: Rs.' . $this->amount;
    }
    function getInvoice() {
        return 'Invoice: Order' . $this->orderId . ' | Amount: Rs' . $this->amount . ' | Pickup:' . $this->storeName;
    }
}


$order=new Order('Processing order #ORD001',500);
echo $order->processOrder();

echo '<br>';

$onlineOrder=new OnlineOrder(5000,'ORD002','UPI');
echo $onlineOrder->processOrder();
echo $onlineOrder->getInvoice();


echo '<br>';

$cod_order= new CODOrder( 6000,'ORD003' ,'Delhi Street');
echo $cod_order->processOrder();
echo $cod_order->getInvoice();

echo '<br>';

$store_pickup=new StorePickup(1500,'ORD004', 'Delhi Store');
echo $store_pickup->processOrder();
echo $store_pickup->getInvoice();


?>
