<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomePage extends Controller
{
    public function mainpage()
    {
        $homes = Home::all()->take(8);

        return view('homepage.pages.mainpage', compact('homes'));
    }

    public function home_detailed($id)
    {
        $home = Home::where('id', $id)
            ->get()
            ->first();

        $reservation = null;
        $reserved = false;

        if (Auth::user()) {
            $reservation = Reservation::where([
                'user_id' => Auth::user()->ID,
                'home_id' => $id,
            ])
                ->get()
                ->first();

            if ($reservation) {
                $reserved = true;
            } else {
                $reserved = false;
            }
        }

        return view('homepage.pages.detailpage')->with([
            'home' => $home,
            'reserved' => $reserved,
            'reservation' => $reservation,
        ]);
    }

    public function home_reservation(Request $request)
    {
        $reserv_data = collect(request()->all())
            ->filter(function ($value) {
                return null !== $value;
            })
            ->toArray();

        // dd($reserv_data , $request->all());

        Reservation::create($reserv_data);

        return redirect()
            ->back()
            ->with([
                'message' => 'Rezervasiya uğurla tamamlandı !',
                'type' => 'info',
            ]);
    }

    public function upload_home_view()
    {
        return view('homepage.pages.main.upload_home');
    }


    // Uploading home with steps
    public function post_one_page_home(Request $request)
    {
        $existing_home = Home::where('uniq_id', $request->uuid)
            ->get()
            ->first();

        if ($existing_home) {
            $existing_home->title = $request->object_title;
            $existing_home->info = $request->object_description;
            $existing_home->category = $request->category;
            $existing_home->save();
        } else {
            $new_home = [
                'uniq_id' => $request->uuid,
                'title' => $request->object_title,
                'info' => $request->object_description,
                'category' => $request->category,
            ];
            Home::create($new_home);
        }

        return response()->json([
            'answer' => $request->all(),
        ]);
    }

    public function post_second_page_home(Request $request)
    {
        $data = [
            'guest_count' => $request->guest_count,
            'bed_count' => $request->bed_count,
            'bedroom_count' => $request->bedroom_count,
            'additional_room_count' => $request->additional_room_count,
            'double_bed_count' => $request->double_bed_count,
            'bathroom_count' => $request->bathroom_count,
        ];

        $existing_home = Home::where('uniq_id', $request->uuid)
            ->get()
            ->first();

        if ($existing_home) {
            $existing_home->home_has = json_encode($data, true);
            $existing_home->save();
        }

        return response()->json([
            'answer' => $existing_home,
        ]);
    }
}
