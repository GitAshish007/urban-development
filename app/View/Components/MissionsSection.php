<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MissionsSection extends Component
{
    public $missions;
    public $title;
    public $subtitle;

    public function __construct($missions = null, $title = null, $subtitle = null)
    {
        $this->missions = $missions;
        $this->title = $title ?? 'Our Key Missions';
        $this->subtitle = $subtitle ?? 'Transforming urban development through strategic initiatives';
    }

    public function render()
    {
        return view('components.missions-section');
    }
}
