<?php

namespace App\Http\Livewire\Apjar\User\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Apjar\Role;
use App\Models\Apjar\Faculty;
use Livewire\WithPagination;

class FacultyEdit extends Component
{
    public $first_name, $last_name, $email, $phone;
    public $updateMode = false;
    public $search;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $faculty;
    public $userID;
    public $modalAssignRole = null;
    public $facultyID;


    public function render()
    {
        $users = User::orderBy('name', 'ASC')->paginate(10);

        $roles = Role::all();

        if($this->search != null){
            $users = User::where('name','like', '%'.$this->search.'%')

            ->orWhereHas('faculty', function($query){
                $query->where('first_name','like', '%'.$this->search.'%');
            })

            ->orderBy('name', 'ASC')
            ->paginate(10);
        }

    
        return view('livewire.apjar.user.admin.faculty-edit', compact('users', 'roles'));
    }
    
    private function resetInputFields(){
        $this->id = '';
        $this->user_id = '';
        $this->code = '';
        $this->upi_code = '';
        $this->nip = '';
        $this->front_title = '';
        $this->rear_title = '';
        $this->first_name = '';
        $this->last_name = '';
        $this->status = '';
        $this->duty = '';
        $this->specialization = '';
        $this->homebase = '';
        $this->phone = '';
        $this->email = '';
        $this->created_at = '';
        $this->updated_at = '';
    }
    
    public function edit($faculty_id)
    {
        $this->updateMode = true;
        $users = User::where('user_id',$user_id)->first();
        $this->first_name = $users->first_name;
        $this->email = $users->email;
        
    }

    public function update($faculty_id, $user_id){
        $validatedDate = $this->validate([
            'first_name' => 'required',
        ]);

        if ($this->user_id) {
            $users = User::find($this->user_id);
            $users->update([
                'first_name' => $this->first_name,
                'email' => $this->email,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();
        }
    }
    

    public function delete($faculty_id, $id){
              User::find($faculty_id, $id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
    }
}
