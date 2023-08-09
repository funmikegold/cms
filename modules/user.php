<?php



class User{


#Create A user..
    public function createUser($username, $password, $e_mail, $img){

        
        $db = new Database();

        $sql = " INSERT INTO tblusers(username, password, email, img)
        VALUES('$username', '$password', '$e_mail', '$img')";
        $query  =  mysqli_query($db->connect(), $sql);
        if($query){

            echo "New Account Created";
        }else{
 
            echo "Unable to process requests";
        }


    }


    public function  LoginUser($username, $password){

        
        $db = new Database();

        $sql = "SELECT * FROM  tblusers WHERE username = '$username' AND password = '$password' ";
        $query  =  mysqli_query($db->connect(), $sql);

        return $query;

    }

    public function fetchAllusers(){

        $db = new Database();
        $sql = "SELECT * FROM tblusers";
        $query  =  mysqli_query($db->connect(), $sql);
        return $query;


    }
}