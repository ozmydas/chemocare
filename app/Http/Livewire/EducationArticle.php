<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EducationArticle as MyModel;
use Livewire\WithFileUploads;


class EducationArticle extends Component
{
    use WithFileUploads;

    public $posts, $category, $tag, $title, $content, $thumbnail, $video_url, $post_id;
    public $isModalOpen = 0;

    protected $listeners = ['deleteData' => 'delete'];

    public function render()
    {
        $this->posts = MyModel::all();
        return view('livewire.education-article.education-article-list');
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
        $this->category = '';
        $this->tag = '';
        $this->title = '';
        $this->content = '';
        $this->thumbnail = '';
        $this->video_url = '';
    }
    
    public function store()
    {
        $this->validate([
            'category' => 'required',
            'tag' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'thumbnail' => 'required',
            // 'video_url' => 'required',
        ]);

        $uploaded_file = time() . '.' . $this->thumbnail->extension();
        $this->thumbnail->storeAs('public/uploads', $uploaded_file);  // menyimpan gambar ke dalam folder 'storage/app/public/uploads'
    
        MyModel::updateOrCreate(['id' => $this->post_id], [
            'category' => $this->category,
            'tag' => $this->tag,
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $uploaded_file,
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
        $this->category = $post->category;
        $this->tag = $post->tag;
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

    public function updatedPhoto()
    {
        $this->validate([
            'thumbnail' => 'image|max:1024',
        ]);
    }
}
