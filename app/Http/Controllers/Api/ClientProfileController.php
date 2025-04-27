<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientProfileController extends Controller
{
    public function show(Request $request)
    {
        $client = Client::where('user_id', $request->user()->id)->first();

        if (!$client) {
            return response()->json(['message' => 'Client not found'], 404);
        }

        return response()->json([
            'firstname' => $client->firstname,
            'secondname' => $client->secondname,
            'date_of_birth' => $client->date_of_birth,
            'gender' => $client->gender,
            'national_id' => $client->national_id,
            'contact_info' => $client->contact_info,
        ]);
    }
}
