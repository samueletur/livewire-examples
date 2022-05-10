<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PrevNext extends Component
{

    public $prevLabel;

    public $nextLabel;

    public $prevTitle;

    public $nextTitle;

    public $prevUrl;

    public $nextUrl;

    public function render()
    {
        return view('livewire.prev-next');
    }
}
