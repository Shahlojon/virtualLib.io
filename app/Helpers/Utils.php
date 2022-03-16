<?php

namespace App\Helpers;


class Utils 
{
    
    public static function ContainsScientistId($arrayOfObjects, $element){
        
        foreach ($arrayOfObjects as $item) {
           if ($item->scientistId==$element) {
               return true;
           }
        }
        return false;
    }
}
