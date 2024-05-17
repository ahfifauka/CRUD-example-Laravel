<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinkButton extends Component
{
    /**
     * Create a new component instance.
     */
    public $url, $title, $type, $params;
    public function __construct(string $url, string $title, string $type, string $params = null)
    {
        $this->url = $url;
        $this->title = $title;
        $this->type = $type;
        $this->params = $params;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.link-button');
    }
}
