<?php
	class upload {
		public $id;
		public $accessToken;
		public $isPrivate;
		public $createdOn;
		public $lastAccessedOn;
		
		function __construct() {
			$this->createdOn = date("Y-m-d H:i:s");
		}
	}