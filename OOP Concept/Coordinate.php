<?php

	class Coordinate {
		private float $x;
		private float $y;

//		constructor
		public function __construct() {
			$this->x = 0.0;
			$this->y = 0.0;
		}

		public function createCoordinate($x, $y) {
			$this->x = $x;
			$this->y = $y;
		}

		public function displayCoordinate() {
			echo("[" . $this->x . ", " . $this->y . "]");
		}

		//getter and setters
		public function getX(): float {
			return $this->x;
		}

		public function setX(float $x): void {
			$this->x = $x;
		}

		public function getY(): float {
			return $this->y;
		}

		public function setY(float $y): void {
			$this->y = $y;
		}


	}

//	create new object using Coordinate class
	$c1 = new Coordinate();
//	call method in the class
	$c1->createCoordinate(3.8, 5.5);
	$c1->displayCoordinate();
