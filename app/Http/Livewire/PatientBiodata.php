<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PatientBiodata as MyModel;

class PatientBiodata extends Component
{
    public $posts, $name, $age, $gender, $address, $phone, $cancer_name, $cancer_stadium, $post_id;
    public $isModalOpen = 0;

    protected $listeners = ['deleteData' => 'delete'];

    public function render()
    {
        $this->posts = MyModel::all();
        return view('livewire.patient-biodata.patient-biodata-list');
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
        $this->name = '';
        $this->age = '';
        $this->gender = '';
        $this->address = '';
        $this->phone = '';
    }
    
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'cancer_name' => 'required',
            'cancer_stadium' => 'required',
        ]);
    
        MyModel::updateOrCreate(['id' => $this->post_id], [
            'name' => $this->name,
            'age' => intval($this->age),
            'gender' => $this->gender,
            'phone' => $this->phone,
            'address' => $this->address,
            'cancer_name' => $this->cancer_name,
            'cancer_stadium' => $this->cancer_stadium,
        ]);

        session()->flash('message', $this->post_id ? 'Data updated successfully.' : 'Data added successfully.');

        $this->closeModal();
        $this->resetCreateForm();
    }

    public function edit($id)
    {
        $post = MyModel::findOrFail($id);
        $this->post_id = $id;
        $this->name = $post->name;
        $this->age = $post->age;
        $this->gender = $post->gender;
        $this->phone = $post->phone;
        $this->address = $post->address;
        $this->cancer_name = $post->cancer_name;
        $this->cancer_stadium = $post->cancer_stadium;
    
        $this->openModal();
    }
    
    public function delete($id)
    {
        MyModel::find($id)->delete();
        session()->flash('message', 'Data deleted successfully.');
    }
}
