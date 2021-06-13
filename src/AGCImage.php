<?php

namespace PanduanVIP\AGC;

class AGCImage
{

    public static function get(array $sources, $keyword, $proxy='')
    {
        $results = [];
        foreach($sources as $source){
            $class = "PanduanVIP\WebExtractor\\$source";
            if(class_exists($class)){
                $results = json_decode($class::get($keyword, $proxy));
                if(!empty($results)){
                    break;
                }
            }
        }
        return json_encode($results);
    }

}