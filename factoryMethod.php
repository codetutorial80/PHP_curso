<?php

abstract class Factory
{
	protected $product;

	abstract protected function factoryMethod():Product;

	public function create():Product
	{
		return $this->factoryMethod();
	}
}

abstract class Product
{
	protected $contents;
	abstract public function setContents($contents);
	abstract public function save();
}

class PDF extends Product
{
	public function setContents($contents)
	{
		$this->contents = 'PDF1122' . $contents . '##'; 
		echo "Setting the contents of the PDF: " . $contents . PHP_EOL;
	}
	public function save()
	{
		echo "saving " . __CLASS__ . PHP_EOL;
		file_put_contents("file01.pdf", $this->contents);
	}
}

class DOC extends Product
{
        public function setContents($contents)
	{
		$this->contents = 'microsoft mr@##11#' . $contents . '$';
                echo "the contents of this DOC => " . $contents . PHP_EOL;
        }
        public function save()
        {
		echo "saving " . __CLASS__ . PHP_EOL;
		file_put_contents("doc01.doc", $this->contents);
        }
}

class Text extends Product
{
       public function setContents($contents)
       {
	       $this->contents = $contents;
               echo "Contents: '" . $contents . "'" . PHP_EOL;
       }
       public function save()
       {
	       echo "Saving " . __CLASS__ . PHP_EOL;
	       file_put_contents("archivo01.txt", $this->contents); 
       }
}

class FactoryPDF extends Factory
{
	protected function factoryMethod():Product
	{
		$this->product = new PDF();
		return $this->product;
	}
}

class FactoryDOC extends Factory
{
	protected function factoryMethod():Product
	{
	        $this->product = new DOC();
	        return $this->product;
	}
}

class FactoryText extends Factory
{
	protected function factoryMethod():Product
        {
               $this->product = new Text();
               return $this->product;
        }
}


function sample(Factory $factory)
{
  $doc01 = $factory->create();
  $doc01->setContents('this is a test');
  $doc01->save();

  $doc02 = $factory->create();
  $doc02->setContents('Hello new doc');
  $doc02->save(); 
}


//rthe client
sample(new FactoryDOC());

