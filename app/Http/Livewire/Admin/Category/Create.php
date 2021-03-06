<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Model\Category;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $nama;
    public $banner;
    public $active;

    public function submit()
    {
        $this->validate([
            'nama' => 'required|min:6',
            'banner' => 'required'
        ]);

        $category = Category::create([
            'nama' => $this->nama,
            'banner' => $image,
            'slug' => Str::slug($this->nama),
            'status' =>  $this->active
        ]);

        $this->banner->store('public');
    }

    public function render()
    {
        return view('livewire.admin.category.create');
    }
}
