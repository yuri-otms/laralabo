<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => 'Test User',
        ]);
    }
}
