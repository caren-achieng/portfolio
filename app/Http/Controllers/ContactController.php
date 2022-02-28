<?php

namespace App\Http\Controllers;

use App\Notifications\ContactMe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        $request->validate(["name" => "required|string", "email" => "required|email"]);

        Notification::route('mail', config('mail.to.address'))->notify(new ContactMe($request->all()));

        return response()->json(['status' => true, "message" => "Email Sent!"]);
    }
}
