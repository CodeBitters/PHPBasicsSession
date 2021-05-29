<?php

//	super class
	class User {
		public string $userName;
		protected int $userID;
		protected string $firstName;
		protected string $lastName;
		private int $age;

//		constructor function
		public function __construct($userID) {
			$this->userID = $userID;
		}

		public function createUser(string $userName, $firstName, $lastName, $age) {
			$this->userName = $userName;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->age = $age;
		}

//		setter function

		public function getUserID(): int {
			return $this->userID;
		}


//		getter functions

		public function setUserID($userID): void {
			$this->userID = $userID;
		}

		public function getFirstName(): string {
			return $this->firstName;
		}

		public function getLastName(): string {
			return $this->lastName;
		}

		public function getAge(): int {
			return $this->age;
		}

		public function printUser() {
			echo("UserID: " . $this->userID . "<br>");
			echo("User Name: " . $this->userName . "<br>");
			echo("First Name: " . $this->firstName . "<br>");
			echo("Last Name: " . $this->lastName . "<br>");
			echo("Age: " . $this->age . "<br>");
		}

	}
