// CREATING VARIABLES
$server_host = 'localhost';
$user_name = 'root';
$password = 'Charleskamba11';
$db_name = 'registration_new_driver';

//CONNECT TO THE DATABASE USING PD0
$conn = new PDO("mysql:host=$server_host;dbname=$db_name", $user_name, $password);

// CHECK IF THE CONNECTION IS WORKING 

if($conn){
    echo "Connected successfully";
}else{
    echo "Connection failed";
}