<?php
// Day 7 — Interface Project Task 🎯
// Food Delivery System banao — jaise Zomato, Swiggy mein hota hai.

// Interface Orderable:
// placeOrder() — declare karo
// cancelOrder() — declare karo
// getOrderStatus() — declare karo

// Interface Payable:
// processPayment() — declare karo
// getReceipt() — declare karo

// FoodOrder class — dono interfaces implement karo:
// Properties: $orderId, $item, $amount
// Constructor mein teeno lo
// placeOrder() — "Order #ORD001 placed for Pizza | Amount: Rs.500"
// cancelOrder() — "Order #ORD001 cancelled"
// getOrderStatus() — "Order #ORD001 Status: Confirmed"
// processPayment() — "Payment of Rs.500 processed for Order #ORD001"
// getReceipt() — "Receipt: Order #ORD001 | Item: Pizza | Amount: Rs.500"

// Concepts jo use honge:
// 2 Interfaces ✅
// Multiple implements ✅
// Constructor ✅
// Saare methods implement karne zaroori ✅



interface Orderable{
    function placeOrder();
    function cancelOrder();
    function  getOrderStatus();
}


interface Payable{
    function processPayment();
    function getReceipt();
}

class FoodOrder implements Orderable, Payable{
    protected $orderId, $item, $amount;

    function __construct($orderId, $item, $amount)
    {
        $this->orderId = $orderId;
        $this->item = $item;
        $this->amount = $amount;
    }
    function placeOrder()
    {
        return 'Order   ' . $this->orderId  . '   placed for   ' . $this->item .'   | Amount:  ' . $this->amount;
    }

    function  cancelOrder()
    {
        return 'Order    ' . $this->orderId  . '  cancelled';
    }

    function  getOrderStatus()
    {
        return ' Order   ' . $this->orderId  . '   Status: Confirmed '  ;
    }

    function  processPayment()
    {
        return ' Payment of    ' .$this->amount. '   processed for Order  '.$this->orderId ;
    }
    function  getReceipt()
    {
        return '  Receipt: Order   '.$this->orderId. '   | Item:   '.$this->item. '  | Amount:   ' . $this->amount   ;
    }
}


$order = new FoodOrder('ORD001', 'Pizza', 500);
echo $order->placeOrder() ."<br>";
echo $order->cancelOrder()  ."<br>";
echo $order->getOrderStatus() ."<br>";
echo $order->processPayment() ."<br>";
echo $order->getReceipt() ."<br>";