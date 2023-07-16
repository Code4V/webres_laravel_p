<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Work extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $workTitle,
        public string $workDescription,
        public array $workImage = [],
        public string $workLink,
        public ?array $workCategory = []
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work');
    }
}
