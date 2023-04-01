<div>
    <div class="flex justify-between items-center mb-2">
        <p class="font-bold text-3xl">Listado</p>
        <button type="button" wire:click="closeModal" class="t_button2 w-auto" data-toggle="modal" data-target="#addTeamsModal">
            <i class="fa-regular fa-square-plus"></i> Agregar
        </button>
    </div>

    @if (session('message'))
        <p class="text-left my-1 p-2 font-bold text-lg text-gray-800 bg-green-200 border-l-4 border-green-800 rounded">{{session('message')}}</p>
    @endif

    <div class="t_grupo-input flex flex-row gap-2">
        <label class="t_label" for="">Estado</label>
        <input class="t_input-checkbox" type="checkbox" name="status_list" id="status_list" wire:model.lazy="status_list">
    </div>
    <div class="mb-3 grid md:grid-cols-12 gap-2">
        <div class="col-span-6">
            <label class="t_label" for="">Buscar</label>
            <input class="t_input" type="text" name="search" placeholder="Buscar" wire:model="search"  id="">
        </div>
        <div class="col-span-2">
            <label class="t_label" for="">Listado</label>
            <select class="t_input" name="show_list" wire:model.lazy="show_list" id="">
                <option selected value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        <div class="col-span-2">
            <label class="t_label" for="">Ordenar</label>
            <select class="t_input" name="order_list" wire:model.lazy="order_list" id="">
                <option selected value="name">Nombre</option>
                <option value="city">Ciudad</option>
                <option value="phone">Telefono</option>
                <option value="adress">Direccion</option>
                <option value="email">Email</option>
            </select>
        </div>
        <div class="col-span-2">
            <label class="t_label" for="">Ordenar</label>
            <select class="t_input" name="type_order_list" wire:model.lazy="type_order_list" id="">
                <option selected value="ASC">Ascendente</option>
                <option value="DESC">Descendente</option>
            </select>
        </div>
    </div>
    
    <div class="overflow-x-scroll">
        <table class="t_table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email / Tel.</th>
                    <th>Ciudad / Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($teams as $team)
                    <tr>
                        <td>
                            <p>{{$team->id}}</p>
                            <p>{{$team->status ? 'Activo' : 'No activo'}}</p>
                        </td>
                        <td>{{$team->name}}</td>
                        <td>
                            <p class="font-medium">{{$team->email}}</p>
                            <p>{{$team->phone}}</p>
                        </td>
                        <td>
                            <p>{{$team->city}}</p>
                            <p>{{$team->adress}}</p>
                        </td>
                        <td>
                            <button type="button" class="t_buttonDelete" data-toggle="modal" data-target="#deleteTeamsModal" wire:click="deleteTeams({{ $team->id }})">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                            <button type="button" class="t_buttonEdit" data-toggle="modal" data-target="#updateTeamsModal" wire:click="editTeams({{ $team->id }})">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">
                            <p class="text-center p-2 text-xl text-gray-800 bg-green-200 rounded">No hay registros</p>
                        </td>
                    </tr>
                @endforelse
    
            </tbody>
            @include('livewire.admin.teams.form-modal')
        </table>
    </div>
    
    {{$teams->links()}}
    @push('scripts')
        <script>
            window.addEventListener('close-modal', event =>{
                $('#addTeamsModal').modal('hide');
                $('#updateTeamsModal').modal('hide');
                $('#deleteTeamsModal').modal('hide');
            })
        </script>
    @endpush
</div>