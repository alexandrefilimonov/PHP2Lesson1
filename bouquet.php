<?php
class Bouquet {
	public $articleNumber;
	public $titleBouquet;
	public $qtyOfFlowers;
	public $flowersNames;
	function __construct ($articleNumber, $titleBouquet, $qtyOfFlowers, $flowersNames) {
		$this->articleNumber = $articleNumber;
		$this->titleBouquet = $titleBouquet;
		$this->qtyOfFlowers = $qtyOfFlowers;
		$this->flowersNames = $flowersNames;
	}
	function viewInformation() {
		echo "<p>Номер букета: $this->articleNumber</p>";
		echo "<p>Название: $this->titleBouquet</p>";
		echo "<p>Количество цветов: $this->qtyOfFlowers</p>";
		echo "<p>Названия цветов: $this->flowersNames</p>";
	}
}
class RosesBouquet extends Bouquet{	
	function __construct ($articleNumber, $titleBouquet, $qtyOfFlowers) {
		$this->articleNumber = $articleNumber;
		$this->titleBouquet = $titleBouquet;
		$this->qtyOfFlowers = $qtyOfFlowers;
		$this->flowersNames = ' только розы';
	}
}

echo "Первый букет:";
$a = new Bouquet(123, 'Букет ПРАЗДНИЧНЫЙ', 15, 'ромашки, розы, незабудки');
$a->viewInformation();

echo "<br><br>Второй букет:";
$b = new RosesBouquet(756, 'Букет CВАДЕБНЫЙ', 23);
$b->viewInformation();

class A {
	public function foo() {
		static $x = 0;
		echo ++$x; 
	}
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();

echo "<br><br>";
class B extends A {}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo "<br>Output is different because in second case instance of class B is initialized and it has its own private static x = 0";
?>

