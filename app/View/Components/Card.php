<?php

namespace App\View\Components;

use App\Models\Home;
<<<<<<< HEAD
use App\Models\HomeImage;
=======
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
use Illuminate\View\Component;

class Card extends Component
{
<<<<<<< HEAD
    public $uuid, $home, $home_images;
=======
    public $id , $home;
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
    /**
     * Create a new component instance.
     *
     * @return void
     */
<<<<<<< HEAD
    public function __construct($uuid)
    {
        $this->uuid = $uuid;

        $home = Home::where('uniq_id', $uuid)
            ->get()
            ->first();

        $home_images = HomeImage::where([
            'home_id' => $uuid,
            'image_type' => 'cover_image',
        ])
            ->get()
            ->first();

        $this->home = $home;
        $this->home_images = $home_images;
=======
    public function __construct($id)
    {
        $this->id = $id;
        $home = Home::where('id' , $id)->get()->first();

        $this->home = $home;
>>>>>>> 31fdaae952cecd90daea317a659a5905888a61a8
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
