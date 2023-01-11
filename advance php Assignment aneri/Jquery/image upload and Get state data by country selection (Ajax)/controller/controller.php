<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {

        parent::__construct();

        // insert or store data in register or create account of customer
        if(isset($_POST["reg"]))
        {
            date_default_timezone_set("Asia/calcutta");
            $em=$_POST["email"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $nm=$_POST["name"];
            $g=$_POST["gender"];
            // upload photo
            $tmp_name=$_FILES["img"]["tmp_name"]; 
            $path="uploads/customer/".$_FILES["img"]["name"];
            move_uploaded_file($tmp_name,$path);  
            $phone=$_POST["phone"];
            $add=$_POST["address"];
            $co=$_POST["country"];
            $st=$_POST["state"];
            $datetime=date("d/m/Y H:i:s a");
            
            if($pass==$cpass)
            {
           
            $data=array("email"=>$em,"password"=>$pass,"name"=>$nm,"gender"=>$g,"photo"=>$path,"phone"=>$phone,"address"=>$add,"country_id"=>$co,"state_id"=>$st,"date_time"=>$datetime);
            $chk=$this->insertalldata('register',$data);
                 if($chk)
                 {
                echo "<script>
                alert('Thanks for create Your account  with us!')
                window.location='/';
                </script>";
                 }
            }
            else 
            {
                echo "<script>
                alert('Your password and confirmed password does not macthed try again')
                window.location='/';
                </script>";

            }
        }
        //fetch a country in register form dropdown
        $country=$this->selectalldata('country'); 
         //fetch a state in register form dropdown
         $state=$this->selectalldata('state'); 

          //load view  
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("image upload and Get state data by country selection (Ajax).php");
                    require_once("footer.php");
                    break;
            }
        }
       
    }
}
$obj=new controller;
?>