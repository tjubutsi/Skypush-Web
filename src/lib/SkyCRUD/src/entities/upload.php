<?php
	class upload {
		public $id;
		public $file;
		public $session;
		public $isPrivate;
		public $createdOn;
		public $lastAccessedOn;
		
		function __construct() {
			$this->isPrivate = 0;
			$this->createdOn = date("Y-m-d H:i:s");
			$this->lastAccessedOn = date("Y-m-d H:i:s");
		}
	}