<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;

class MainController extends Controller
{
    public function index(){
        $missions = Mission::all();
        return view('welcome', compact('missions'));
    }

    public function messenger(){
        $config = [
            'facebook' => [
                'token' => 'EAAVNB4YktD4BABZCUQJrsPHntwf7u5Ku8SZCc03R3O2IdLVR8chEoFwAJiDZCBoDi1ZBiGr51dHFFPNmCElu1welldcNL3igReFZAYuTMDBNpo26fUZBP3vppgh0vDPjgxZCmkiYG9RQzqFZAZCoTjRamWlYAFlZCONCZBwuZAPcC7tYEgZDZD',
                'app_secret' => '1325cf16f4f13cd86843f12b20aaa586',
                'verification'=>'messengerhere',
            ]
        ];

        $botman = BotManFactory::create($config);
        // $botman->hears('hello', function (BotMan $bot) {
        //     $bot->reply('Hello fuck off');
        // });
        //
        // $botman->listen();
    }

    public function receive(Request $request)
   {
           $data = $request->all();

           //get the user’s id
           $id = $data["entry"][0]["messaging"][0]["sender"]["id"];

        $this->sendTextMessage($id, "Hello");
   }


   private function sendTextMessage($recipientId, $messageText)
       {
           $messageData = [
               "recipient" => [
                   "id" => $recipientId
               ],
               "message" => [
                   "text" => $messageText
               ]
           ];

           $ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token=' . env("PAGE_ACCESS_TOKEN"));
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($ch, CURLOPT_HEADER, false);
           curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($messageData));
           curl_exec($ch);

   }
}
