<?php

namespace App\View\Components;

use App\Models\Home;
use App\Models\HomeImage;
use Illuminate\View\Component;

class Card extends Component
{
    public $uuid, $home, $home_images;
    /**
     * Create a new component instance.
     *
     * @return void
     */
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
