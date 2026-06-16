<?php 
// Toh Aaj ka Project Based Task — Polymorphism
// Payment System banao — jaise real e-commerce mein hota hai:

// Parent class Payment — method pay()
// Child class CreditCard — apna pay()
// Child class UPI — apna pay()
// Child class Cash — apna pay()
// Method getReceipt() — har payment mein alag receipt



class Payment{

    function pay(){
        return 'Processing Payment <br>' ;
    }
}

class Credit extends Payment{

    function pay(){
        return '  Pay through Credit card ' ;
    }

    function get_recipt(){
        return ' ||   Payment recipt for credit card  <br>';
    }
}

class UPI extends Payment{

    function pay(){
        return'Pay through UPI' ;

    }

    function get_recipt(){
        return ' ||   Payment recipt for UPI   <br>' ;
    }
}

class Cash extends Payment{

 
    function pay()
    {
        return 'Payment through cash' ;
    }

    function get_recipt(){
        return ' ||  Payment recipt for cash  <br>';
    }
}


$payment= new Payment();
echo $payment->pay();

$credit_card=new Credit();
echo $credit_card->pay();
echo $credit_card->get_recipt();

$upi=new UPI();
echo $upi->pay();
echo $upi->get_recipt();

$cash=new Cash();
echo $cash->pay();
echo $cash->get_recipt();

 



?>