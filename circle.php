<?php
class Circle {
	public $r;

	function __construct($r) {
		$this->r = $r;
	}

	function Area() {
		return $this->r * $this->r * pi();
	}

	function Perimeter() {
		return $this->r * 2 * pi();
	}
}

$pattern = "/^\s*[0-9]+[.]?[0-9]*\s*$/";
$stringRadius = '';
$validate = false;
while ($validate == false) {
	$stringRadius = readline("Enter radius: ");
	$validate = preg_match($pattern, $stringRadius);
}

$radius = (float)$stringRadius;
$circle = new Circle($stringRadius);
echo "Area: " . number_format($circle->Area(), 2, '.', '') . "\nPerimeter: " . number_format($circle->Perimeter(), 2, '.', '') . "\n";
?>
