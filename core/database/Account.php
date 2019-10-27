<?php
class Account { 
	protected $pdo ; 

	public $user_is_logged_on ;

	public function __construct($pdo){
		$this->pdo = $pdo;
		$this->user_is_logged_on = false ; 
	}
	
	/*Logout the user after some time.. */
	public function logout(){
		// Initialize the session.
		session_start();
		// Unset all of the session variables.
		unset($_SESSION['username']);
		// Finally, destroy the session.    
		session_destroy();
		// Include URL for Login page to login again.
		header("Location: login.php");
		exit;
	}


	/**/

	protected function valid_user(){
		return true ; 
	}

	public function attempt_login($pin, $field, $password){		
		// return $this->is_a_valid_user($pin, $field, $password);
		if ( $this->specific_user_with($pin, $field, $password) == $this->valid_user() ) {
			self::redirect('/');
		} else {
			self::redirect('login');
		}
		// $this->is_a_valid_user($pin, $field, $password);
	}
	
	/*returns the number of user depending on the */
	public function count_number_of_user_with($pin, $password){	
		// password_verify($password, $password) ; 		

		// -> the hashed password of the user's password input.
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);	
		
		$match_checker = password_verify($password, $hashed_password);
			// sql query that returns password of the user with an email or username of $pin 
		
		$sql_query_password_from_user_using_pin =  "SELECT password FROM users WHERE email = :pin or username = :pin";

		$query = $this->pdo->prepare($sql_query_password_from_user_using_pin);	
		$query->bindValue(':pin', $pin);
		$query->bindValue(':password', $password);
		$query->execute();
		
		$resulting_password = $query->fetch();
		$query->closeCursor(); 
  		
  		// retrieving the password of the users.
		$users_hashed_password = $resulting_password[0];
		if (password_verify($password, $users_hashed_password)) {
			// 		print "matched";
			// redirect to the index page properly
			// set the user_is_logged_on = true
			$this->user_is_logged_on = true ; 
			if (there_is_a_logged_on_user() === true) {
				// then 
			}
			else { 
				redirect('/');
			}
		}
		else { 
  			// print "Not matched";
  			// redirect('')
			$this->user_is_logged_on = false ; 
		}

	}


		// returns true if the user is registered and verified;
	public function specific_user_with($pin,$field,$password) {
		//  the sql query..
		return $this->count_number_of_user_with($pin,$password);
		
		if ( $this->is_a_valid_user() === true){
			
		} else { 

		}


		// var_dump($statement);
		// $sql = 'SELECT COUNT(*) FROM users WHERE username = :pin';
		// $statement = $this->pdo->prepare($sql);
		// $res = $statement->execute([':username' => $username]);

	}

	public function attempt_registration($pin, $field, $password){
		// returns 1 or 0 ; 
		$this->check_if_the_email_is_currently_registered($pin);
	}


	/*returns 0 or 1 if there's a match...*/
	public static function check_if_the_email_is_currently_registered($pin){
// returns 1 if there's a matched email
		$sql = 'SELECT COUNT(*) FROM users WHERE email = :pin';		 
		$statement = $this->pdo->prepare($sql);		
		var_dump($statement);	
		$statement->execute();
	}

	public function redirect($path){
		session_write_close();
		header("Location:".$path);
		exit ; 
	}

	public function if_the_logged_on_user_has_already_setup_an_account(){
		// query and join the two tables : user and characters
		$query = 'SELECT COUNT(*) FROM users INNER JOIN characters c ON u.id = c.user_id
		WHERE user_id = :user_id';
		// if there is a match between both then return true. else return false .
		
		try {
			$statement = $this->pdo->prepare($query);
			$statement->bindValue(':user_id', $user_id);
			$statement->execute() ; 
			$result1 = $statement->fetch();
			$user_count = $result1[0];
			$statement->closeCursor(); 	

			if ( $user_count  > 0 ){
			// therefore it is valid
				return true ; 
			}
			else { 
			// print "0";
				return false ; 
			}
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo $error_message ; 
		}
	}

	public function register($pin, $field, $pwd ){}
	public function toggle_active_status(){}
}
