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


    public function sendWhatsapp(int $id)
    {
        $guest = Guest::where('id', $id)->firstOrFail();

        $invitationLink = route('homepage', [ 'invitation' => $guest->code ]);

        $message = "Dear {$guest->nick_name}\n\n";
        $message .= "Tanpa mengurangi rasa hormat, ";
        $message .= "karena keterbatasan waktu dan jarak, ";
        $message .= "izinkan kami untuk mengundang {$guest->nick_name} ";
        $message .= "dalam acara Akad Nikah dan Resepsi Pernikahan kami.\n\n";
        $message .= "Klik link udangan berikut:\n";
        $message .= "{$invitationLink}\n\n";
        $message .= "suatu kehormatan dan kebahagiaan bagi kami, ";
        $message .= "apabila {$guest->nick_name} berkenan hadir pada acara pernikahan kami ";
        $message .= "dan memberikan doa restu.\n";
        $message .= "Terima kasih.\n\n";
        $message .= "Kami yang berbahagia,\n";
        $message .= "Iin & Ibnu";

        $message = urlencode($message);
        $whatsappUrl = 'https://wa.me/' . $guest->phone . '?text=' . $message;

        $guest->is_wa_sent = 1;
        $guest->save();

        return redirect()->away($whatsappUrl);
    }
}
