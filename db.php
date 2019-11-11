  <?php
	class dbConnection {
		public $conn;
		function getConnection() {
			return (!isset($conn)) ? $this->createConnection() : $conn;
		}

		function createConnection() {
			$user = 'root';
			$password = 'root';
			$db = 'farm2table';
			$host = 'localhost:3306';
			$conn = new mysqli(
				$host,
				$user,
				$password,
				$db
			);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
		}
	}
?>
