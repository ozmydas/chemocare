<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\CancerCategory as MyModel;

class CancerCategory extends Component
{
    public $posts, $type, $name, $description, $post_id;
    public $isModalOpen = 0;

    protected $listeners = ['deleteData' => 'delete'];

    public function render()
    {
        $this->posts = MyModel::all();
        return view('livewire.cancer-category.cancer-category-list');
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm(){
        $this->post_id = NULL;
        $this->type = '';
        $this->name = '';
        $this->description = '';
    }
    
    public function store()
    {
        $this->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);
    
        MyModel::updateOrCreate(['id' => $this->post_id], [
            'type' => $this->type,
            'name' => $this->name,
            'description' => $this->description,
        ]);

        session()->flash('message', $this->post_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $post = MyModel::findOrFail($id);
        $this->post_id = $id;
        $this->type = $post->type;
        $this->name = $post->name;
        $this->description = $post->description;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        MyModel::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
} 