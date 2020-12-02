<?php
    function daystoENDyear(){
        if(date('L')==1)
        {
            return $daystoend = 366 - date('z');
        }
        else
        {
            return $daystoend = 365 - date('z');
        }
    }

?>