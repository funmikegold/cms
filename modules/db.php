<?php

class Database {

    public function connect() {

        $connect = mysqli_connect('localhost', 'root', '', 'pesonal_db' );
        if(!$connect){

            echo "Unable to connect to database";

        }
        return $connect;
      

    }

    public function callMe(){


        echo "I heard you loud and clear";
    }

}

?>