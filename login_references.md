Logins are not too complicated, but there are some specific pieces that almost all login processes need.

First, make sure you enable the session variable on all pages that require knowledge of logged-in status by putting this at the beginning of those pages:
```php
session_start();
```
Next, when the user submits their username and password via the login form, you will typically check their username and password by querying a database containing username and password information, such as MySQL. If the database returns a match, you can then set a session variable to contain that fact. You might also want to include other information:
```php
if (match_found_in_database()) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
                                      // something like this is optional, of course
}
```
Then, on the page that depends on logged-in status, put the following (don't forget the session_start()):
```php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    echo "Please log in first to see this page.";
}
```
Those are the basic components. If you need help with the SQL aspect, there are tutorials-a-plenty around the net.