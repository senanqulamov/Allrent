<?php

namespace App\View\Components;

use App\Models\Home;
use Illuminate\View\Component;

class Card extends Component
{
    public $id , $home;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;
        $home = Home::where('id' , $id)->get()->first();

        $this->home = $home;
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
