<?php
session_start ();
session_destroy();
if( $_SESSION['current_page']){
                header("Location: ". $_SESSION['current_page']);
                
            }else
            {
                header("Location:login.php");
            }
            
?>