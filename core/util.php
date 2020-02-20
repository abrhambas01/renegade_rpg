<?php
/**
* General functions that can be used in the app. : 
* 
* 1. check if there is a logged user.
* 2. determine what is the current 
* 3. the user id of the current user. 
* 
*/

/*checks if there is a logged on user.*/
function there_is_a_logged_on_user(){
    if((isset($_SESSION['login']) && $_SESSION['login'] != '')) {
        // redirect('/browse-missions') ; 
        return true ; 
    }
    else {
        // redirect('/login');
        return false  ; 
    }
}



function the_logged_on_user_has_already_setup_an_account()
{	
    // inner join users
	$app['database']->select("") ; 
}


/*get the current user id of the user*/
function gets_the_id_of_the_currently_logged_on_user()
{

// 1) Put session_start(); on very top on each page wherever going to use session variable.

// 2) After login store the current(array)ntly logged user id in session $_SESSION['id']=$current_user_id;

// 3) An account page fetch the account info using $_SESSION['id'] like
// select * from users where id=$_SESSION['id'] 
    $id = $_SESSION['id'] ; 
    $query = "SELECT id from users where  " ;    
    $this->pdo->prepare($query);
    $id = $_SESSION['id'];    
    session_write_close(); 
    
    /*
    =======================================
    This is an amazing..
    =======================================
    */
}	


function check_if_user_there_($value='')
{
 if (!isset($_SESSION['admin'])) {
    header('Location: ' . $app_path . 'admin/account/' );
}

}