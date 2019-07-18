<?php
/**
 * Template Name: PHP Test
 */


 // get posted data
 $data = json_decode(file_get_contents("php://input"));

 // make sure data is not empty
 if(
     !empty($data->name) &&
     !empty($data->price) &&
     !empty($data->description) &&
     !empty($data->category_id)
 ){

     // set product property values
     $product->name = $data->name;
     $product->price = $data->price;
     $product->description = $data->description;
     $product->category_id = $data->category_id;
     $product->created = date('Y-m-d H:i:s');
     $lat = $data->lat;
     $long = $data->long;



      // set response code - 201 created
      http_response_code(201);

      ?>


 <?php }

 // tell the user data is incomplete
 else{

     // set response code - 400 bad request
     http_response_code(400);

     // tell the user
     echo json_encode(array("message" => "Data is incomplete."));
 }



?>
