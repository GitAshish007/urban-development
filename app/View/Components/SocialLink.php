<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SocialLink extends Component
{
    public $href;
    public $icon;
    public $hover;

    public function __construct($href, $icon, $hover)
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->hover = $hover;
    }

    public function render()
    {
        return view('components.social-link');
    }
}
