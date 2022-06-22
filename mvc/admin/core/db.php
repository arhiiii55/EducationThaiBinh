<?php

class DB
{
	public $conn;
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "dbeducationtb";
	public function __construct()
	{

		$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		mysqli_select_db($this->conn, $this->dbname);
		mysqli_query($this->conn, "SET NAME 'utf8' 	");

		if ($this->conn->connect_error) {
			printf($this->conn->connect_error);

			exit();
		}
		$this->conn->set_charset("utf8");
	}
	// Hàm đóng kết nối CSDL
	public function closeDatabase()
	{
		if ($this->conn) {
			$this->conn->close();
		}
	}
}