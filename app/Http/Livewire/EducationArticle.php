<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EducationArticle as MyModel;
use Livewire\WithFileUploads;


class EducationArticle extends Component
{
    use WithFileUploads;

    public $posts, $category, $label, $title, $content, $thumbnail, $video_url, $post_id;
    public $isModalOpen = 0;
    public $category_selection = [
        ['id' => 'edukasi', 'name' => "Edukasi"],
    ];
    public $label_selection = [
        ['id' => 'efek-samping', 'name' => "Efek Samping"],
        ['id' => 'penganan-efek-samping', 'name' => "Penanganan Efek Samping"],
        ['id' => 'terapi', 'name' => "Terapi"],
        ['id' => 'umum', 'name' => "Umum"]
    ];


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

    private function resetCreateForm()
    {
        $this->category = 'edukasi';
        $this->label = '';
        $this->title = '';
        $this->content = '';
        $this->thumbnail = '';
        $this->video_url = '';
    }

    public function store()
    {
        $this->validate([
            'category' => 'required',
            'label' => 'required',
            'title' => 'required',
            'content' => 'required',
            // 'thumbnail' => 'required',
            // 'video_url' => 'required',
        ]);

        $indata = [
            'category' => $this->category,
            'label' => $this->label,
            'title' => $this->title,
            'content' => $this->content,
            'video_url' => $this->video_url,
        ];


        if (!is_string($this->thumbnail)):
            $uploaded_file = time() . '.' . $this->thumbnail->extension();
            $this->thumbnail->storeAs('public/uploads', $uploaded_file); // menyimpan gambar ke dalam folder 'storage/app/public/uploads'

            $indata['thumbnail'] = $uploaded_file;
        endif;

        MyModel::updateOrCreate(['id' => $this->post_id], $indata);

        session()->flash('message', $this->post_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $post = MyModel::findOrFail($id);
        $this->post_id = $id;
        $this->category = $post->category;
        $this->label = $post->label;
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