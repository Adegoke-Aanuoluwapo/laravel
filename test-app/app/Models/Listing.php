<?php 
namespace App\Models;


class Listing {


 public static function all() {
 return[
   
  [
                'id' => 1,
                'title' => 'Ake Years of Chilhood',
                'description' => 'Book written by Prof Wole Soyinka'

            ],
            [
                'id' => 2,
                'title' => 'Things fall apart',
                'description' => 'Book written by Chinua Achebe'

            ]

            ]; }
         public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['$id'] == $id){
                    return $listing;
                }
            }
         }   
}