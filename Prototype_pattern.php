<?php

class Order {
    public $orderNumber;
    public $products;
    public $totalPrice;
    
    public function __construct($orderNumber, array $products, float $totalPrice) {
        $this->orderNumber = $orderNumber;
        $this->products = $products;
        $this->totalPrice = $totalPrice;
    }
    
    public function clone(): Order {
        return new Order(
            $this->orderNumber,
            $this->products,
            $this->totalPrice
        );
    }
}

class OrderPrototype extends Order {
    public function __construct() {
        parent::__construct(null, [], 0.0);
    }
}


$prototypeOrder = new OrderPrototype();
$prototypeOrder->orderNumber = 1001;
$prototypeOrder->products = ['Product A', 'Product B', 'Product C'];
$prototypeOrder->totalPrice = 150.00;


$order1 = $prototypeOrder->clone();
$order1->orderNumber = 1002; 
$order1->totalPrice = 200.00; 


$order2 = $prototypeOrder->clone();
$order2->orderNumber = 1003; 
$order2->products[] = 'Product D'; 


echo "Order 1:\n";
echo "Order Number: " . $order1->orderNumber . "\n";
echo "Products: " . implode(', ', $order1->products) . "\n";
echo "Total Price: " . $order1->totalPrice . "\n\n";

echo "Order 2:\n";
echo "Order Number: " . $order2->orderNumber . "\n";
echo "Products: " . implode(', ', $order2->products) . "\n";
echo "Total Price: " . $order2->totalPrice . "\n";

?>