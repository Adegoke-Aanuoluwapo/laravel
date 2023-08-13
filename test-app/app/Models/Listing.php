<?php 
namespace App\Models\Listing;


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
}