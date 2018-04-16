<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 3/21/2018
 * Time: 11:25 AM
 */
class Cart
{
    // Shopping cart contents
    public $items = null;

    /**
     * Cart constructor.
     *
     */
    public function __construct()
    {
        $this->getCart();
    }

    /**
     * Add item to Shopping Cart
     */
    public function add($newItem)
    {
        // See if item is already in cart
        // if yes, increment qty.
        // If not, just add to the items list
        $inCart = false;
        if (array_key_exists('cart', $_SESSION)) {
            foreach ($_SESSION['cart'] as $row => $innerArray) {
                if ($innerArray['id'] == $newItem['id']) {
                    $this->items[$row]['quantity'] = $this->items[$row]['quantity'] + $newItem['quantity'];
                    $inCart = true;
                }
            }
        }
        if($inCart == false)
        {
            $this->items[] = $newItem;
        }

        $this->saveCart();
    }

    /**
     * Get the contents of the cart
     */
    public function get()
    {
        // assign the cartitems to a variable for use on the cart page.
        return $this->items;
    }

    /**
     * Delete item from cart
     */
    public function delete($id,$cartItems)
    {
            foreach ($this->items as $row => $innerArray) {
                if($innerArray["id"] == $id)
                {
                    unset($this->items[$row]);
                }
            }

        $this->saveCart();
    }

    /**
     * Change quantity of an item in the cart
     */
    public function changeQty($id, $newQty)
    {

            foreach ($this->items as $row => $innerArray) {
                if($innerArray["id"] == $id)
                {
                    $this->items[$row]['quantity'] = $newQty;
                }
            }

        $this->saveCart();
    }
    /**
     * Calculate the total for the cart
     */
    public function calculateTotal($cartItems)
    {
        $total = 0;
        foreach($cartItems as $row => $innerArray){

            $total = $total + ($innerArray['quantity'] * $innerArray['price']);
        }
        return $total;
    }
    /**
     * This will get the cart from the Session Variable
     */
    private function getCart()
    {
        if (array_key_exists('cart', $_SESSION)) {
            $this->items = $_SESSION['cart'];
        }
        return;
    }
    /**
     * Take the cart contents in the object and save them
     * to the session variable
     */
    private function saveCart()
    {
        $_SESSION['cart'] = $this->items;
    }

}