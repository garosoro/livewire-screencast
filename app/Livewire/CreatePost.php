<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    // #[Rule('required')]
    // #[Rule('required', as: "el titulo")]
    #[Rule('required', message: "el titulo no esta definido")]
    #[Rule('min:3', message: "muy pequeño")]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function save()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
