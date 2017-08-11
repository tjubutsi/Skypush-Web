<?php
	require_once(dirname(__FILE__) . "/entity.php");

	class db {
		public $connection;
		public $accessTokens;
		public $clients;
		public $sessions;
		public $uploads;
		public $users;
		
		function __construct() {
			$databaseServer = "127.0.0.1";
			$database = "skypushdev";
			$databaseUser = "skypush";
			$databasePassword = "skypush";
			$this->connection = new mysqli($databaseServer, $databaseUser, $databasePassword, $database);
			$this->accessTokens = new entity("accessTokens", "accessToken", $this->connection);
			$this->clients = new entity("clients", "client", $this->connection);
			$this->sessions = new entity("sessions", "session", $this->connection);
			$this->uploads = new entity("uploads", "upload", $this->connection);
			$this->users = new entity("users", "user", $this->connection);
		}
	}
	