<head>
<title>Objects.php</title>
<link href="Lab7Styles.css" rel="stylesheet">
</head>

<!-- HEADER -->
<div id="header">
				<?php include_once "Header.php"; ?>
			</div>

<!-- Menu -->
<div id="menu">
				<?php include_once "Menu.php"; ?>
			</div>

<!-- CONTENT -->
<div id="content">
    <?php
    interface Employee {
		public function displayEmployeeInfo();
	}

	class Management implements Employee{
		protected $sin;
		protected $age;
		protected $salary;

		function __construct($sin = 0, $age = 0, $salary = 0) {
			$this -> $sin = $sin;
			$this -> $age = $age;
			$this -> $salary = $salary;
		}
		

		function displayEmployeeInfo() {
			echo "<Strong>SIN</Strong>: ".$this->sin.", <Strong>Age</Strong>: ".$this->age.", <Strong>Salary</Strong>: ".$this->salary;
		}
	}

	class Manager extends Management {
		private $adminLevel;

		function __construct($sin = 0, $age = 0, $salary = 0, $adminLevel = "Ab") {
			parent::__construct($sin, $age, $salary);
			$this -> adminLevel = $adminLevel;
			
		}

		function displayEmployeeInfo() {
			parent::displayEmployeeInfo();
			echo " , <Strong>Admin Level</Strong>: ".$this->adminLevel;
			echo "<br/><br/>";
		}
	}

	class Development implements Employee{
		protected $sin;
		protected $age;
		protected $salary;

		function __construct($sin = 0, $age = 0, $salary = 0) {
			$this -> $sin = $sin;
			$this -> $age = $age;
			$this -> $salary = $salary;
		}

		function displayEmployeeInfo() {
			echo "<Strong>SIN</Strong>: ".$this->sin.", <Strong>Age</Strong>: ".$this->age.", <Strong>Salary</Strong>: ".$this->salary;
		}
	}

	class ITSpecialist extends Development{
		private $projectAssigned;

		function __construct($sin = 0, $age = 0, $salary = 0, $projectAssigned = "Prj")
		{
			parent::__construct($sin, $age, $salary);
			$this -> projectAssigned = $projectAssigned;
		}

		function displayEmployeeInfo() {
			parent::displayEmployeeInfo();
			echo " , <Strong>Project assigned: </Strong>: ".$this->projectAssigned;
			echo "<br/><br/>";
		}
	}

	echo "<h3>Manager</h3>";
	$manager1 = new Manager("123456789", "45", "110000", "MG-06");
	$manager1->displayEmployeeInfo();
	$manager2 = new Manager("987654321", "55", "120000", "MG-07");
	$manager2->displayEmployeeInfo();

	echo "<h3>IT Specialist</h3>";
	$ITSpecialist1 = new ITSpecialist("567451234", "35", "100000", "T1SR");
	$ITSpecialist1->displayEmployeeInfo();
	$ITSpecialist2 = new ITSpecialist("234451234", "30", "90000", "HIMS");
	$ITSpecialist2->displayEmployeeInfo();
    ?>
</div>

<!-- FOOTER -->
<div id="footer">
    <?php include_once "Footer.php"; ?>
</div>