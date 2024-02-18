
<?php

//================================================================================================================================================
//Добавление в базу данных пользователя при регистрации reg.php
//RegistrationForm принимает экзмепляр класса Database из db_connection.php и вызывает от туда метод 
//insertUser() для регистрации пользователя (вставляет данные пользователя в таблицу user)
class RegistrationForm 
{    
    private $db;

    public function __construct(Database $db) 
    {
        $this->db = $db;
    }

    public function registerUser($login, $username, $phone, $email, $password, $role) 
    {
        
        $this->db->insertUser($login, $username, $phone, $email, $password, $role);

       
    }

    public function __destruct() 
    {
        $this->db->closeConnection();
    }

   

    // public function validateForm() {
    //     Добавить валидацию!
    // }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $db = new Database();
    $registrationForm = new RegistrationForm($db);

    $login = $_POST["login"];
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $registrationForm->registerUser($login, $username, $phone, $email, $password, $role);
   
    // $registrationForm->validateForm();
 

    $db->closeConnection();

    //Если данные успешно передались начинаем сессию
    session_start();

   
    //mysqli_insert_id(), чтобы получить ID последней добавленной записи
    $new_user_id = mysqli_insert_id($connection);  
    //Присваеваем id нового пользователя в сессию
    $_SESSION['user_id'] = $new_user_id; 

}

//================================================================================================================================================
class SessionManager 
{
    public function __construct() 
    {
        session_start();
    }

    public function setSessionValue($key, $value) 
    {
        $_SESSION[$key] = $value;
    }

    public function getSessionValue($key) 
    {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return null;
        }
    }

    public function unsetSessionValue($key) 
    {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }

    public function destroySession() 
    {
        session_destroy();
    }

  
}
//================================================================================================================================================



?>