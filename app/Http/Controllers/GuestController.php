<?php

namespace App\Http\Controllers;

use App\Actions\UniqueGuestCode;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function store(Request $request)
    {
        $guest = new Guest();
        $guest->code = UniqueGuestCode::make()->handle();
        $guest->full_name = $request->full_name;
        $guest->nick_name = $request->nick_name;
        $guest->address = $request->address;
        $guest->note = $request->note;
        $guest->phone = $request->phone;
        $guest->is_wa_sent = $request->is_wa_sent;
        $guest->save();

        return redirect()->route('voyager.guests.index');
    }


    public function update(int $id, Request $request)
    {
        $guest = Guest::where('id', $id)->first();
        $guest->full_name = $request->full_name;
        $guest->nick_name = $request->nick_name;
        $guest->address = $request->address;
        $guest->note = $request->note;
        $guest->phone = $request->phone;
        $guest->is_wa_sent = $request->is_wa_sent;

        if (empty($guest->code)) {
            $guest->code = UniqueGuestCode::make()->handle();
        }

        $guest->save();

        return redirect()->route('voyager.guests.index');
    }
}
