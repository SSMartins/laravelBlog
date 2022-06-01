<?php

namespace App\Http\Livewire;

use App\Models\Post as BlogPost;
use Livewire\Component;

class PostCreate extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.post-create');
    }
}
