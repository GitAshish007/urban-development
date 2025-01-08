<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MissionCard extends Component
{
    public $title;
    public $description;
    public $image;
    public $link;

    public function __construct($title, $description, $image, $link)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->link = $link;
    }

    public function render()
    {
        return view('components.mission-card');
    }
}
