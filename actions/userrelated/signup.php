<?php
error_reporting(E_ALL ^ E_DEPRECATED);

  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title>Sign Up!</title>

  </head>
  <body>
  
  </body>
  </html>
  <?php 
$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$errors=array();

if (empty($name)||strlen($name)<=3||strlen($name)>=65) 
{
   
   $errors['name']="Name must be 3 to 64 characters";
   

}
if(!strpos($email, "@")||strlen($email)<5||empty($email))
{
   $errors['email'] = "Enter valid email";

}

if(!is_numeric($telephone)&&strlen($telephone)<7)
{
   $errors['telephone'] = "You must enter valid phone number";

}

if(!($password===$password2)||strlen($password)<8)
{
   $errors['password'] = "Passwords should match and make them at least 8 characters long";
}
$errout=" ";
function form_errors($errors=array())
{
   if(!empty($errors))
   {  
      $errout = "<div class =\"error\">";
      $errout.= "Fix the following errors:";
      $errout.= "<ul>";
      foreach ($errors as $key => $error)
      {
         $errout.="<li>{$error}</li>";
      }
      $errout.="<ul>";
      $errout.="</div>";

      return $errout;
   }else
   {
      


            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'zar21559';
            $dbname='werxan';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass,$dbname);
            
            if(! $conn ) 
            {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() )
             {
               $name = addslashes ($_POST['name']);
               $email = addslashes ($_POST['email']);
               $telephone = addslashes ($_POST['telephone']);
               $password = addslashes ($_POST['password']);
              }
              else 
              {
               $name = $_POST['name'];
               $email = $_POST['email'];
               $telephone = $_POST['telephone'];
               $password = $_POST['password'];


              }
            
            /*$user_password = $_POST['user_password'];*/
            
            $sql = "INSERT INTO users ". "(name, email, telephone, password) ". "VALUES('$name','$email','$telephone','$password')";
               
            mysql_select_db('werxan');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            
            
            mysql_close($conn);
            $password = md5($password);
            $cokname = "coke";
            $value = $password;
            $expire = time()+(86400);
            echo "Success!";
            setcookie($cokname, $value, $expire);
            echo "<br/>";
   
   }
   
}

?>
<?php echo form_errors($errors); ?>
<a href="/ip%20project/main.php">Go back to main page</a>

