<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function all_Dishes() {
        $allDishes = DB::select("SELECT * FROM `Dishes`");

        return $allDishes;
    }



    public function all_Dishes_type($type) {
        $allDishes = DB::select("SELECT * FROM `Dishes` where Dishes.type = '$type'");

        return $allDishes;
    }



    public function adding_an_order(Request $request) {
        $price = $request->collect("price");
        $street = $request->collect("street");
        $house_number = $request->collect("house_number");
        $flat = $request->collect("flat");
        $intercom = $request->collect("intercom");
        $phone_number = $request->collect("phone_number");
        $order_names = $request->collect("order_names");
        $addingAnOrder = DB::insert("INSERT INTO `order_Information` (`price`, `street`, `house_number`, `flat`, `intercom`, `phone_number`, `order_names`) VALUES ('$price[0]', '$street[0]', '$house_number[0]', '$flat[0]', '$intercom[0]', '$phone_number[0]', '$order_names[0]')");

        return $addingAnOrder;
    }

    public function table_reservation(Request $request) {
        $name = $request->collect("name");
        $time = $request->collect("time");
        $phone_number = $request->collect("phone_number");
        $comments = $request->collect("comments");
        $table_number = $request->collect("table_number");
        $tableReservation = DB::insert("INSERT INTO `Table_reservation` (`name`, `time`, `phone_number`, `comments`, `table_number`) VALUES ('$name[0]', '$time[0]', '$phone_number[0]', '$comments[0]', '$table_number[0]')");

        return $tableReservation;
    }


    public function adding_an_user(Request $request) {
        $name = $request->collect("name");
        $email = $request->collect("email");
        $password = $request->collect("password");
        $token = rand(1000000, 9999999 );
        $addingAnUser = DB::insert("INSERT INTO `User` (`name`, `email`, `password`, `token`) VALUES ('$name[0]', '$email[0]', '$password[0]', '$token')");


        return $addingAnUser;
    }

        public function getting_user_data(Request $request) {
        $token = $request->collect("token");
        $dataUser = DB::select("SELECT * FROM `User` WHERE User.token = '$token[0]'");


        return $dataUser;
    }

    public function entrance_user(Request $request) {
        $token = $request->collect("token");
        $email = $request->collect("email");
        $password = $request->collect("password");
        $entranceUser = DB::update("UPDATE `User` SET `token`='$token[0]' WHERE User.email = '$email[0]' and User.password = '$password[0]'");


        return $entranceUser;
    }


    public function exit_user(Request $request) {
        $token = $request->collect("token");
        $exitUser = DB::update("UPDATE `User` SET `token`='' WHERE User.token = '$token[0]'");


        return $exitUser;
    }

}
