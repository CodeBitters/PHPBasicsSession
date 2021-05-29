<?php

	class Counter {
		public static int $value = 0;

		public static function increment(int $amount = 1) {
			self::$value = self::$value + $amount;
		}

		public static function decrement(int $amount = 1) {
			self::$value = self::$value - $amount;
		}

		public static function printValue() {
			echo("Value: " . self::$value . "<br>");
		}
	}

	echo("Initial Value: " . Counter::$value . "<br>");
	Counter::increment(5);
	Counter::printValue();
	Counter::decrement();
	Counter::printValue();
