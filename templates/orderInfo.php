<?php

/**
 * Created by PhpStorm.
 * User: Brett
 * Date: 4/10/2018
 * Time: 10:26 AM
 */
class orderInfo
{
    public $items = null;

    /**
     * Order constructor.
     *
     */
    public function __construct()
    {
        $this->getOrderInfo();
    }

    /**
     * Add item to OrderInfo Cart
     */
    public function addOrderInfo($newItem)
    {
        $this->items[] =$newItem;
        $this->saveOrder();
    }

    /**
     * Get the contents of the order
     */
    public function get()
    {
        // assign the orderItem to a variable for use on the order page.
        return $this->items;
    }

    public function saveUpdatedInfo($customerInfo)
    {
        $updated = [];
        $updated[0] = $customerInfo;
        $_SESSION['orderInfo'] = $updated;
    }
    /**
     * This will get the order from the Session Variable
     */
    private function getOrderInfo()
    {
        if (array_key_exists('orderInfo', $_SESSION)) {
            $this->items = $_SESSION['orderInfo'];
        }
        return;
    }
    /**
     * Take the order contents in the object and save them
     * to the session variable
     */
    private function saveOrder()
    {
        $_SESSION['orderInfo'] = $this->items;
    }

}