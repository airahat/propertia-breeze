<?php

namespace App\Http\Controllers;

use Webklex\IMAP\Facades\Client;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EmailController extends Controller
{
    /**
     * Show inbox with latest 15 emails (headers only)
     */
    public function inbox() {
        set_time_limit(300); // prevent timeout

        $client = Client::account('default');
        $client->connect();

        $folder = $client->getFolder('INBOX');

        // Step 1: Fetch latest 50 headers as a buffer (Gmail safe)
        $messages = $folder->messages()
            ->all()
            ->limit(50) // buffer
            ->get(['uid','subject','from','date','flags']);

        // Step 2: Filter out invalid From
        $messages = $messages->filter(fn($msg) => isset($msg->getFrom()[0]));

        // Step 3: Sort by date descending and take latest 15
        $messages = $messages
            ->sortByDesc(fn($msg) => strtotime($msg->getDate()))
            ->take(15);

        return view('admin.pages.emails.index', compact('messages'));
    }

    /**
     * Read a single email (full body)
     */
    public function read($uid) {
        set_time_limit(300);

        $client = Client::account('default');
        $client->connect();

        $folder = $client->getFolder('INBOX');

        // Fetch full email by UID
        $message = $folder->messages()->getMessageByUid($uid);

        return view('admin.pages.emails.show', compact('message'));
    }

    /**
     * Test IMAP connection (optional)
     */
    public function testIMAP() {
        try {
            $client = Client::account('default');
            $client->connect();

            $folder = $client->getFolder('INBOX');

            $messages = $folder->messages()
                ->all()
                ->limit(5)
                ->get(['uid','subject','from','date']);

            foreach ($messages as $msg) {
                echo "Subject: " . $msg->getSubject() . "<br>";
                echo "From: " . $msg->getFrom()[0]->mail . "<br><br>";
            }

        } catch (\Exception $e) {
            return "IMAP Connection Failed: " . $e->getMessage();
        }
    }
}
