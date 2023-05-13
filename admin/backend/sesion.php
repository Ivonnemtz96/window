<?php  
 session_start();  
include("/config.php");

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if (isset($_SESSION["UserId"])) {
            
            setcookie("msg","ylog",time() + 1, "/");
            header("location: /admin");
            exit;
        } 

 try
 {   
      $connect = new PDO("mysql:host=".SS_DB_HOST."; dbname=".SS_DB_NAME."", SS_DB_USER, SS_DB_PASSWORD);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["submit"]))  
      {  
           if(empty($_POST["user_mail"]) || empty($_POST["user_pass"]))  
           {
               setcookie("msg","all",time() + 1, "/");
               header("location: /admin/login");
           }  
           else  
           {  
                $query = "SELECT * FROM users WHERE user_mail = :user_mail AND pass = :user_pass";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'user_mail'     => $_POST["user_mail"],
                          'user_pass'  => $_POST["user_pass"],
                     ) 
                );  
                $count = $statement->rowCount();
                if($count > 0)  
                {  
                     
                    //ESTABLECEMOS LA HORA IGUAL QUE EN LOS CABOS
                    date_default_timezone_set('America/Denver');   
                    $fecha = date("Y-m-d H:i:s");
                    //OBTENEMOS DATOS DE USUARIO
                    $UserData =	$db->getAllRecords('users','*',' AND user_mail="'.($_POST["user_mail"]).'"LIMIT 1 ');
                    $UserData = $UserData[0];
                    $_SESSION['UserId'] = $UserData['id'];
                    //ACTUALIZAMOS LA FECHA DEL ÚLTIMO LOGIN
                    $InsertData	=	array(
                                    'fl'=> $fecha,
                                 );
                    $update	=	$db->update('users',$InsertData,array('id'=>($UserData['id'])));
                    
                    setcookie("msg","bienvenido",time() + 1, "/");
                    header("location: /admin");
                }  
                else  
                {  
                    setcookie("msg","inv",time() + 1, "/");
                    header("location: /admin/login");
                }
           }
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  ?>