<?
class Cart
{
    // properties
    private int $_customer_id;
    private int $_id_prod;
    private int $_quantity_cart;

    function __construct(int $_customer_id, int $_id_prod, int $_quantity_cart)
    {
        $this->_customer_id = $_customer_id;
        $this->_id_prod = $_id_prod;
        $this->_quantity_cart = $_quantity_cart;
    }

    //getter
    function getCustomerId()
    {
        return $this->_customer_id;
    }
    function getIdProd()
    {
        return $this->_id_prod;
    }
    function getQuantityCart()
    {
        return $this->_quantity_cart;
    }
}
