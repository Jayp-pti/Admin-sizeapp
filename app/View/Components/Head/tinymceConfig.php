<?php

namespace App\View\Components\Head;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tinymceConfig extends Component
{

    public $name;
    public $content;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $content = '')
    {
        $this->name = $name;
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head.tinymce-config');
    }
}
