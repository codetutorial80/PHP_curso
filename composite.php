abstract class Componente
{
    protected $nombre;
    
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    
    abstract public function Agregar(Componente $c);
    abstract public function Remover(Componente $c);
    abstract public function Mostrar($profundidad);
}

class Compuesto extends Componente
{
    private $hijo = [];

    public function __construct($name)
    {
       parent::__construct($name);
    }

    public function Agregar(Componente $componente)
    {
         hijo[$componente->nombre] = $componente;
    }

    public function Remover(Componente $componente)
    {
         unset(hijo[$componente->nombre]);
    }

    public void Mostrar(int profundidad)
    {
         echo $nombre . " nivel: " . $profundidad . PHP_EOL;
         $index = 0;
         foreach($hijo as $component) {
              if ($index == $produndidad)
              {
                  echo $component->name;
                  break;
              }
              $index++;
         }
    }
}

$root = new Compuesto("raiz");

$h1 = new Compuesto("hijo1");
$h2 = new Compuesto("hijo2");
$h3 = new Compuesto("hijo3");

$root->Agregar($h1);
$root->Agregar($h2);
$root->Agregar($h3);

