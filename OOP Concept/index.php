<?php
	require_once('User.php');
	require_once('Student.php');

	$usr1 = new User(1);
	$usr1->createUser('abc', 'Ashan', 'Bandara', 12);
	$usr1->printUser();
	echo($usr1->getUserID());
	echo('<br>');
	$usr1->setUserID(2);
	echo($usr1->getUserID());

	echo('<hr>');

//	if there do not have constructor in Student class still it calls constructor in User class
	$stu1 = new Student(2);
	$stu1->createStudent('nsn', 'Nimal', 'Silva', 22, 'CS', 3.76);
	$stu1->printUser();

	echo('<hr>');

//	multi dimensional array with associative array
	$arr = array(array('a' => 2, 'b' => 4), array('a' => 2, 'b' => 4));
	print_r($arr);
