<?php

//	sub class
	class Student extends User {

		private float $GPA;
		private string $degree;

		public function createStudent($userName, $firstName, $lastName, $age, $degree, $GPA) {
//			call a function within class
			self::createUser($userName, $firstName, $lastName, $age);

			$this->degree = $degree;
			$this->GPA = $GPA;
		}

//		getters and setters
		public function getGPA(): float {
			return $this->GPA;
		}

		public function setGPA(float $GPA): void {
			$this->GPA = $GPA;
		}

		public function getDegree(): string {
			return $this->degree;
		}

		public function setDegree(string $degree): void {
			$this->degree = $degree;
		}

//		override function
		public function printUser() {
			echo("UserID: " . $this->userID . "<br>");
			echo("User Name: " . $this->userName . "<br>");
			echo("First Name: " . $this->firstName . "<br>");
			echo("Last Name: " . $this->lastName . "<br>");
			echo("Age: " . $this->getAge() . "<br>");
			echo("Degree: " . $this->degree . "<br>");
			echo("GPA: " . $this->GPA . "<br>");
		}

	}
