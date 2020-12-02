<?php
    function leapyear(){
        if(date("L") == 1)
        {
            return $nrdays = 366;
        }
        else
        {
            return $nrdays = 365;
        }


    }
?>