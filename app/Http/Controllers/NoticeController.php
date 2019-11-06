<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function getNotice(Request $request) {
        $response = $request->all();

        // $fp = fopen("test.txt", "w");

        file_put_contents('test.txt', print_r($response, true));

        // foreach($response as $key => $value){
        //     fwrite($fp, $key.",".$value."\n");
        //  }

        return $response;
    }
}
