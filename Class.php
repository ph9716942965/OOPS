<?php
class CheckAuth extends MyCommand{
    public $SID;
   function __construct($sid=null){
       parent::__construct();
       //public static $SID
       $this->SID=$sid;
   }  

   function email(){
       $q='SELECT `email` FROM `user` WHERE `username`="'.$this->SID.'"';
       return $this->get($q)[0]['email'];
   }
}

?>

<?php

$usr=new CheckAuth($_SESSION['login_info']['username']);
<?= $usr->email() ?>
?>