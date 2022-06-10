<?php
namespace App\Helper;

class Common {
    public static function autoCreateBreadCrumb($links){
        $html = '<nav  aria-label="breadcrumb">
        <ol style="background-color: #f8f9fc" class="breadcrumb pl-0 py-1">';
        $i = 1; 
        $linksLength = count($links);
        foreach($links as $key => $value){
            if($i === $linksLength){
                $html.='<li class="breadcrumb-item active">'."$key".'</li>';
            }else{
                $html.='<li class="breadcrumb-item" ><a style="color:#000;text-decoration:none;" href="'.$value.'">'."$key".'</a></li>';
                $i++;
            }
            
        }
        //   <li class="breadcrumb-item"><a href="#">Home</a></li>
        //   <li class="breadcrumb-item"><a href="#">Library</a></li>
        //   <li class="breadcrumb-item active" aria-current="page">Data</li>
        $html.='</ol></nav>';
        return $html;
    }
}