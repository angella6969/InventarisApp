<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class label extends Component
{
    /**
     * Create a new component instance.
     */
    public $for,$isi;
    public function __construct( $for,$isi)
    {
        $this->for=$for;
        $this->isi=$isi;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}