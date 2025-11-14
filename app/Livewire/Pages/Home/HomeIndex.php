<?php

namespace App\Livewire\Pages\Home;

use Livewire\Component;

class HomeIndex extends Component
{
    public function render()
    {
        return view('livewire.pages.home.home-index')->layout('livewire.layouts.app');
    }
}
