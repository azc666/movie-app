<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TagIndex extends Component
{
    public $showTagModal = false;

    public function showCreateModal()
    {
        $this->showTagModal = true;
    }

    public function closeTagModal()
    {
        $this->showTagModal = false;
    }

    public function render()
    {
        return view('livewire.tag-index');
    }
}