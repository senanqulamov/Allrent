<?php

namespace App\Http\Controllers\main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Home;
use App\Models\HomeImage;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class HomePage extends Controller
{
    public function mainpage()
    {
        $homes = Home::where('user_down', '1')
            ->orderBy('created_at', 'DESC')
            ->get()
            ->take(8);

        return view('homepage.pages.mainpage', compact('homes'));
    }

    public function home_detailed($id)
    {
        $home = Home::where('uniq_id', $id)
            ->get()
            ->first();

        $home_images = HomeImage::where('home_id', $id)->get();

        if (!$home || count($home_images) == 0) {
            return redirect()
                ->back()
                ->with(['message' => 'Bu evin məlumatları natamamdır', 'type' => 'warning']);
        }

        $reservation = null;
        $reserved = false;

        if (Auth::user()) {
            $reservation = Reservation::where([
                'user_id' => Auth::user()->ID,
                'home_id' => $home->id,
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
            'home_images' => $home_images,
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

        Reservation::create($reserv_data);

        return redirect()
            ->back()
            ->with([
                'message' => 'Rezervasiya uğurla tamamlandı !',
                'type' => 'info',
            ]);
    }

    public function show_reservations($id){
        $reservations = Reservation::where('user_id' , $id)->get();

        return view('homepage.pages.main.reservations')->with('reservations' , $reservations);
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
            $existing_home->user_id = Auth::user()->ID;
            $existing_home->title = $request->object_title;
            $existing_home->info = $request->object_description;
            $existing_home->category = $request->category;
            $existing_home->user_down = 0;
            $existing_home->save();
        } else {
            $new_home = [
                'uniq_id' => $request->uuid,
                'user_id' => Auth::user()->ID,
                'title' => $request->object_title,
                'info' => $request->object_description,
                'category' => $request->category,
                'user_down' => 0,
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

    public function post_third_page_home(Request $request)
    {
        // dd($request->all());

        $existing_home = Home::where('uniq_id', $request->uuid)
            ->get()
            ->first();

        $home_has_d = $request->home_has;
        $permissions = [
            'animal_perm' => $request->animal_perm,
            'cigarette_perm' => $request->cigarette_perm,
            'children_perm' => $request->children_perm,
            'party_perm' => $request->party_perm,
            'marriage_perm' => $request->marriage_perm,
        ];
        $entrance_exit_times = [
            'entrance_time_1' => $request->entrance_time_1,
            'entrance_time_2' => $request->entrance_time_2,
            'exit_time_1' => $request->exit_time_1,
            'exit_time_2' => $request->exit_time_2,
        ];

        $existing_home->home_has_d = json_encode($home_has_d, true);
        $existing_home->permissions = json_encode($permissions, true);
        $existing_home->entrance_exit_times = json_encode(
            $entrance_exit_times,
            true
        );
        $existing_home->save();

        return response()->json([
            'answer' => $existing_home,
        ]);
    }

    public function post_map_page_home(Request $request)
    {
        dd($request);
    }

    public function post_calendar_page_home(Request $request)
    {
        $existing_home = Home::where('uniq_id', $request->uuid)
            ->get()
            ->first();

        $existing_home->home_reservation_start_date =
            $request->home_reservation_start_date;
        $existing_home->save();

        return response()->json([
            'answer' => $existing_home,
        ]);
    }

    public function post_image_page_home(Request $request)
    {
        $image_groups = array_keys($request->file());

        // dd($request->all());

        foreach ($image_groups as $group) {
            foreach ($request->file($group) as $key => $value) {
                $image_name = $value->getClientOriginalName();
                $existing_image = HomeImage::where([
                    'home_id' => $request->home_id,
                    'image_name' => $image_name,
                ])
                    ->get()
                    ->first();

                if (!$existing_image) {
                    $image = new HomeImage();
                    // $path = $value->store('');
                    $path = $value->move(public_path('storage'), $image_name);

                    $image->home_id = $request->home_id;
                    $image->image_name = $image_name;
                    $image->image_location = $path;
                    $image->image_type = $group;
                    $image->save();
                }
            }
        }

        $cover_image_for_result = HomeImage::where([
            'home_id' => $request->home_id,
            'image_type' => 'cover_image',
        ])
            ->get()
            ->first();

        return response()->json([
            'answer' => $cover_image_for_result,
        ]);
    }

    public function post_price_page_home(Request $request)
    {
        $tax_by = '';
        if ($request->tax_by_allrent == 'true') {
            $tax_by = 'Allrent';
        } else {
            $tax_by = 'User';
        }

        $existing_home = Home::where('uniq_id', $request->uuid)
            ->get()
            ->first();
        $existing_home->tax_by = $tax_by;
        $existing_home->min_price = $request->min_price;
        $existing_home->user_down = 1;
        $existing_home->save();

        return response()->json([
            'answer' => $existing_home,
        ]);
    }
}
