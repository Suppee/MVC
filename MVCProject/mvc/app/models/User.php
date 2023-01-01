<?php
class User extends Database {
	
	/**
	 * Checks if a username and password is correct.
	 * The Session variable that remembers the login is set in the UserController
	 */
	public function login(){
		
		$email = filter_var ( $_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$password = filter_var ( $_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		
		
		
		$result = $this->select_one ("user", "email", $email);
		if(password_verify($password, $result['password']))
			$_SESSION['user'] = $result;
		return password_verify($password, $result['password']);

	}

	/**
	 * Registers a new user in the database
	 */
	public function register() {

		$username = filter_var ( $_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$username_pattern = "/^[a-zA-Z0-9]{4,12}$/";
		if(!preg_match($username_pattern, $username))
		{
			die();
		}

		$email = filter_var ( $_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);


		$password = filter_var ( $_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		$password_pattern = "/^(?=.*[a-zA-Z])(?=.*\d)[A-Za-z\d@$!%*#?&]{4,}$/";
		if(!preg_match($password_pattern, $password))
		{
			die();
		}
		

		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO user (username,email, password) VALUES (:username, :email, :password);";

		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':username', $username);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $hashed_password);
		$stmt->execute();

		return $email;

	}



	/**
	 * Gets all users from the database, but without revealing their password hash
	 */
	public function get_users () {
		$result = $this->get_all ("user");
		return $result;
	}

	/**
	 * Gets a single user from the database
	 */
	public function get_user ($username) {

		$result = $this->select_one ("user", "username", $username);
		return $result;
	}


}