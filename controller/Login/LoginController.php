<?php
include_once '../model/Login/LoginModel.php';


class LoginController
{
        public function helou(){
            $obj= new LoginModel();
            $sql="SELECT usu_hola FROM tbl_hola";
            $query=$obj->consult($sql);
            foreach ($query as $key) {
                echo $key['usu_hola'];
            }

        }   








}

?>