<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Order
 *
 * @author xydren
 */
class Order {
    public $orderId;
    public $cartItemList = [];
    public $totalPrice;
    public $userId;

//    public function __construct($orderId, $cartList, $totalPrice, $userId) {
//        $this->orderId = $orderId;
//        $this->cartList = $cartList;
//        $this->totalPrice = $totalPrice;
//        $this->userId = $userId;
//    }
        public function __construct($orderId, $cartItemList, $totalPrice) {
        $this->orderId = $orderId;
        $this->cartList = $cartItemList;
        $this->totalPrice = $totalPrice;
    }

    public function getOrderId() {
        return $this->orderId;
    }


    public function getCartItemList(){
        return $this->carItemtList();
    }
    public function getTotalPrice() {
        return $this->totalPrice."<br>";
    }
}
