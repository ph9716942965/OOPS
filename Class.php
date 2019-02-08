<?php
class CheckAuth extends MyCommand{
    public $SID;
   function __construct($sid=null){
       parent::__construct();
       $this->SID=$sid;
   }  

    public static function con($obj){
        return new CheckAuth($obj);
    }

   function email(){
       $q='SELECT `email` FROM `user` WHERE `username`="'.$this->SID.'"';
       return $this->get($q)[0]['email'];
   }
}

?>

<?php

$usr=new CheckAuth($_SESSION['login_info']['username']);
?>
<?= $usr->email() ?>


<!--/////OR////-->

<?= CheckAuth::con($_SESSION['login_info']['username'])->email() ?>