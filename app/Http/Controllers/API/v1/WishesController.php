<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\v1\WishStoreRequest;
use App\Http\Resources\WishResource;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WishesController extends Controller
{
    public function store(WishStoreRequest $request)
    {
        $wish = new Wish();
        $wish->from = $request->from;
        $wish->wish = $request->wish;
        $wish->is_accept = 1;
        $wish->save();

        return response()->json([
            'wish' => $wish
        ], Response::HTTP_CREATED);
    }


    public function latest(Request $request)
    {
        $wishes = Wish::query()
            ->accepted()
            ->latest()
            ->take(3)
            ->get();

        return response()->json([
            'wishes' => WishResource::collection($wishes)
        ]);
    }
}
