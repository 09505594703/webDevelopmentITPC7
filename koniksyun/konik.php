  <?php
  function connection(){

          $host = "localhost";    
                $user = "root";
                $password = "";
                $dbname = "webadvance";
                $con = new mysqli($host, $user,$password, $dbname);
                if($con->connect_error){
                    
                        echo $con->connect_error;
                }else{

                return $con;
                }
    }
        ?>