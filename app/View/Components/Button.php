<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */
    public string $buttonType, $buttonText, $buttonAction;
    public function __construct(string $buttonType, string $buttonText, string $buttonAction = "submit")
    {
        $this->buttonType = $buttonType;
        $this->buttonText = $buttonText;
        $this->buttonAction = $buttonAction;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
