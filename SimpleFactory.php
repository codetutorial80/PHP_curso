<?php 

//Product 
abstract class Product 
{
  private $id;
  private $name;
  protected $type = null;
  
  public function __construct($sku, $name)
  {
    $this->sku = $sku;
    $this->name = $name;
  }
  
  public function getId()
  {
    return $this->id;
  }
  
  public function getName()
  {
    return $this->name;
  }
  
  public function getType()
  {
    return $this->type;
  }
}

// my products ...
class Chair extends Product
{
  protected $type = 'chair';
}
class Table extends Product
{
  protected $type = 'table';
}
class Bookcase extends Product
{
  protected $type = 'bookcase';
}
class Sofa extends Product
{
  protected $type = 'sofa';
}
class Bed extends Product
{
  protected $type = 'Bed';
}


//The factory at last
class ProductFactory 
{
  public static function build($product_type, $sku, $name)
  {
    $product = "Product_" . ucwords($product_type);
    if(class_exists($product))
    {
        return new $product($sku, $name);
    }
    else {
        throw new Exception("Invalid product type.");
    }
  }
}

//Extra class to call the factory instance
class ProductController {
  
    public function create($product_type)
    {
        $product = ProductFactory::build($product_type, $post['sku'], $post['name'])
        return $product->getType();
    }
}
