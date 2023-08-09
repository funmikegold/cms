\   <?php  



$connect =  mysqli_connect('localhost', 'root', '', 'pesonal_db' );
if($connect){
//  echo "Connected";
}else{

 echo "Unable to  connect to database";
}