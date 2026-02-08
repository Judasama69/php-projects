<?php

class UserManager
{
	public Logger $logger;

	public function __construct(Logger $logger) {
		$this->logger = $logger;
	}

	public function createUser($name): void
	{
		echo $this->logger->log("User $name was created");
		echo " User $name saved to database. ";
	}

}