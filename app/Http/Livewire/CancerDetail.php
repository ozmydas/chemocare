<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\CancerDetail as MyModel;

class CancerDetail extends Component
{
    public $posts, $category_id, $title, $content, $thumbnail, $video_url, $post_id;
    public $isModalOpen = 0;

    protected $listeners = ['deleteData' => 'delete'];

    public function render()
    {
        $this->posts = MyModel::all();
        return view('livewire.cancer-detail.cancer-detail-list');
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
        $this->category_id = '';
        $this->title = '';
        $this->content = '';
        $this->thumbnail = '';
        $this->video_url = '';
    }
    
    public function store()
    {
        $this->validate([
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
    
        MyModel::updateOrCreate(['id' => $this->post_id], [
            'category_id' => intval($this->category_id),
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $this->thumbnail,
            'video_url' => $this->video_url,
        ]);

        session()->flash('message', $this->post_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $post = MyModel::findOrFail($id);
        $this->post_id = $id;
        $this->category_id = $post->category_id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->thumbnail = $post->thumbnail;
        $this->video_url = $post->video_url;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        MyModel::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
} 