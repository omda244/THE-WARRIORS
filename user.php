<?php

    class user implements iuser 
    {
        private $userId;
        private $password;
        private $addres;
        private $phone;
        public function Login(){

        
        } 
        public function logout(){

        
        } 

    	/**
	 * 
	 * @return mixed
	 */
	function getUserId() {
		return $this->userId;
	}
	
	/**
	 * 
	 * @param mixed $userId 
	 * @return user1
	 */
	function setUserId($userId): self {
		$this->userId = $userId;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getPassword() {
		return $this->password;
	}
	
	/**
	 * 
	 * @param mixed $password 
	 * @return user1
	 */
	function setPassword($password): self {
		$this->password = $password;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getAddres() {
		return $this->addres;
	}
	
	/**
	 * 
	 * @param mixed $addres 
	 * @return user1
	 */
	function setAddres($addres): self {
		$this->addres = $addres;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getPhone() {
		return $this->phone;
	}
	
	/**
	 * 
	 * @param mixed $phone 
	 * @return user1
	 */
	function setPhone($phone): self {
		$this->phone = $phone;
		return $this;
	}
}


