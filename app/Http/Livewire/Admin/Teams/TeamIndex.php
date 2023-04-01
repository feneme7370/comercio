<?php

namespace App\Http\Livewire\Admin\Teams;

use Livewire\Component;
use App\Models\Base\Team;
use Livewire\WithPagination;

class TeamIndex extends Component
{
    public $search;
    public $show_list;
    public $order_list;
    public $type_order_list;
    public $status_list = true;

    use WithPagination;

    protected $paginationTheme = 'tailwind';

    // variables
    public $name;
    public $phone;
    public $adress;
    public $city;
    public $social;
    public $email;
    public $status;

    public $team_idm;
    public $team_object;

    // validacion
    public function rules(){
        return [
            'name' => ['required', 'string'],
            'phone' => [],
            'adress' => [],
            'city' => [],
            'social' => [],
            'social.*' => [],
            'status' => [],
            'email' => [],
        ];
    }

    // limpiar inputs
    public function resetInput(){
        $this->name = NULL;
        $this->phone = NULL;
        $this->adress = NULL;
        $this->city = NULL;
        $this->social = NULL;
        $this->status = NULL;
        $this->email = NULL;
    }

    // store a BD
    public function storeTeams(){
        $validateData = $this->validate();
        $validateData['status'] = $validateData['status'] ? '1' : '0';
        $validateData['social'] = json_encode($validateData['social']);

        $team = Team::create($validateData);
        session()->flash('message', 'Creado correctamente');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    // traer info a traves del ID
    public function editTeams($team_idm){
        $this->team_idm = $team_idm;
        $team = Team::findOrFail($this->team_idm);
        // dd($team);
        $this->name = $team->name;
        $this->phone = $team->phone;
        $this->adress = $team->adress;
        $this->city = $team->city;
        $this->email = $team->email;
        $this->status = $team->status;

        // $team->social = json_decode($team->social, true);
        $team->social = json_decode($team->social, JSON_UNESCAPED_SLASHES);
        // dd($team->social);
        $this->social = $team->social;
    }

    // update a BD
    public function updateTeams(){
        $validateData = $this->validate();
        // $validateData['status'] = $validateData['status'] ? '1' : '0';

        \App\Models\Base\Team::findOrFail($this->team_idm)->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'adress' => $this->adress,
            'city' => $this->city,
            'social' => $this->social,
            'email' => $this->email,
            'status' => $this->status ? '1' : '0',
        ]);
        session()->flash('message', 'Actualizado correctamente');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    // traer info a traves del ID
    public function deleteTeams($team_idm){
        $this->team_idm = $team_idm;
    }
    
    // delete a BD
    public function destroyTeams(){
        \App\Models\Base\Team::findOrFail($this->team_idm)->delete();
        session()->flash('message', 'Eliminado correctamente');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    // al cerrar modal
    public function closeModal(){
        $this->resetInput();
    }
    // al abrir modal
    public function openModal(){
        $this->resetInput();
    }

    public function render()
    {
        $teams = Team::where(function($query){
            $query->where("name", 'LIKE', "%".$this->search."%")
                    ->orWhere("email", 'LIKE', "%".$this->search."%")
                    ->orWhere("phone", 'LIKE', "%".$this->search."%")
                    ->orWhere("city", 'LIKE', "%".$this->search."%")
                    ->orWhere("adress", 'LIKE', "%".$this->search."%");
        })->where('status', $this->status_list)
        ->orderBy($this->order_list ?? 'name', $this->type_order_list ?? 'ASC')
        ->paginate($this->show_list ?? 10);

        // $teams = \App\Models\Base\Team::orderBy('id', 'DESC')->paginate(5);
        return view('livewire.admin.teams.team-index',[
            'teams' => $teams,
        ]);
    }
}
