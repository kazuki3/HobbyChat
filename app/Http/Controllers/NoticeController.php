<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// AWS対応
use Aws\Sns\Message;
use Aws\Sns\MessageValidator;
use Aws\Sns\Exception\InvalidSnsMessageException;

class NoticeController extends Controller
{
    public function getNotice() {
        // $response = $request->all();

        // // $fp = fopen("test.txt", "w");

        // file_put_contents('test.txt', print_r($response, true));

        // // foreach($response as $key => $value){
        // //     fwrite($fp, $key.",".$value."\n");
        // //  }

        // Instantiate the Message and Validator
        $message = Message::fromRawPostData();
        $validator = new MessageValidator();

        // Validate the message and log errors if invalid.
        try {
            $validator->validate($message);
        } catch (InvalidSnsMessageException $e) {
            // Pretend we're not here if the message is invalid.
            http_response_code(404);
            error_log('SNS Message Validation Error: ' . $e->getMessage());
            die();
        }

        // Check the type of the message and handle the subscription.
        if ($message['Type'] === 'SubscriptionConfirmation') {
            // Confirm the subscription by sending a GET request to the SubscribeURL
            $str = file_get_contents($message['SubscribeURL']);
            $fp = fopen("test.txt", "w");
            fwrite($fp, $str);
            fclose($fp);
        }
    }
}
