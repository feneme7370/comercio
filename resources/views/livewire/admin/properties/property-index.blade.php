<div>
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
                <option selected value="last_name_property">Apellido</option>
                <option value="name_property">Nombre</option>
                <option value="title">Titulo</option>
                <option value="adress">Direccion</option>
                <option value="price">Precio</option>
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
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Propietario</th>
                    <th>Ubicacion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>
                            <p>{{$dato->id}}</p>
                            <p>{{$dato->status ? 'Activo' : 'No activo'}}</p>
                        </td>
                        <td width="64" height="64"><img src="img/img_portada/{{$dato->img_portada}}" alt="imagen portada"></td>
                        <td>{{$dato->title}}</td>
                        <td>
                            <p class="font-bold">{{$dato->last_name_property.', '}}<span class="font-normal">{{$dato->name_property}}</span></p>    
                        </td>
                        <td>
                            <p>{{$dato->city}}</p>
                            <p>{{$dato->adress}}</p>
                        </td>
                        <td>{{$dato->money}} {{$dato->price}}</td>
                        <td>
                            <div class="flex justify-center items-center gap-2">
                                <a class="t_buttonEdit" href="{{route('property.show', $dato->id)}}"><i class="fa-solid fa-eye"></i></a>
                                <a class="t_buttonEdit" href="{{route('property.edit', $dato->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <button class="t_buttonDelete" wire:click="$emit('showAlert', {{ $dato->id }})"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$datos->links()}}
    </div>

    @push('scripts')
        <script>
            // escuchar desde controller livewire           
            Livewire.on('showAlert', propertyId => {
                Swal.fire({
                title: 'Eliminar registro?',
                text: "Esta accion no se puede revertir!",
                // icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'

                }).then((result) => {
                if (result.isConfirmed) {
                    
                    // eliminar desde el servidor con emit
                    Livewire.emit('propertyDelete', propertyId)

                    Swal.fire(
                    'Eliminado con exito!',
                    'Eliminado correctamente.',
                    'success'
                    )
                }
                })
            })

            // $(document).ready( function () {
            //     $('.DataTable').DataTable(

            //     );
            // } );

        </script>
    @endpush
</div>
