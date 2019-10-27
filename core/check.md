# Follow my steps on how do I check if the user

1) Put session_start(); on very top on each page wherever going to use session variable.
2) After login store the currently logged user id in session $_SESSION['id']=$current_user_id;
3) An account page fetch the account info using $_SESSION['id'] like
select * from users where id=$_SESSION['id'] 



