<?php

namespace App\Actions;

use App\Models\Guest;
use Illuminate\Support\Str;
use Lorisleiva\Actions\Concerns\AsAction;

class UniqueGuestCode
{
    use AsAction;

    public function handle()
    {
        $uniqueCode = Str::random(10);

        return $this->getUniqueCode($uniqueCode);
    }


    private function getUniqueCode($uniqueCode)
    {
        $guest = Guest::where('code', $uniqueCode)->first();

        if (!empty($guest)) {
            return $this->getUniqueCode($uniqueCode);
        }

        return $uniqueCode;
    }
}
