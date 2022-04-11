<?php
/*
 * This override will replace the default functions to 
 * get an id_product_attribute by an id_product and one
 * or more id_attribute.
 * 
 * To make sure the best combination will be found, the
 * boolean $findBest will be set to true. This should 
 * return the best combination possible every time.
 */
class Product extends ProductCore {
    public static function getIdProductAttributeByIdAttributes($idProduct, $idAttributes, $findBest = true)
    {
        return parent::getIdProductAttributeByIdAttributes($idProduct, $idAttributes, $findBest);
    }
    
    /**
     * @deprecated 1.7.3.1
     * @see Product::getIdProductAttributeByIdAttributes()
     */
    public static function getIdProductAttributesByIdAttributes($id_product, $id_attributes, $find_best = true)
    {
        return self::getIdProductAttributeByIdAttributes($id_product, $id_attributes, $find_best);
    }
}