<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     */
    public  $name,$class,$id,$placeholder,$value;
    public function __construct($name,$class,$id,$placeholder,$value)
    {
        // $this->type=$type;
        $this->name=$name;
        $this->class=$class;
        $this->id=$id;
        $this->placeholder=$placeholder;
        $this->value=$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
