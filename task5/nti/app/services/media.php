<?php
namespace App\services;


class Media{

  public  static function upload($image,$pathTo)
      {
        
        $photoName = $image->hashName();
        $photoPath = public_path("img\\{$pathTo}");
        $image->move($photoPath, $photoName);
        return $photoName;
      }

      public static  function delete($path)
      {
        if(file_exists($path)){
            unlink($path);
            return true;
        }
        return false;
      }
}