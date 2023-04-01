<div>
    @if ($errors->any())
        @foreach ($errors->all() as $message)
            <div>
                <p class="text-left my-1 p-1 font-bold text-sm text-gray-800 bg-red-200 border-l-4 border-red-800 rounded">{{$message}}</p>
                {{-- <livewire:helper.mostrar-alerta :message="$message" /> --}}
            </div>
        @endforeach
    @endif

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Imagen</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Propiedad</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Propietario</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade py-3 show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <fieldset class="t_fieldset" {{$viewShow ? 'hidden' : ''}}>
                <legend class="t_legend">Imagenes</legend>
                
                <div wire:loading class="spinner-border text-warning" >
                    <span class="visually-hidden"></span>
                </div>
            
                <div class="grid md:grid-cols-3 gap-2">
                    <div wire:loading.remove>
                        <label class="t_label" for="img_portada_file">Nueva de portada</label>
                        <input class="t_input-file" {{$viewShow ? 'disabled' : ''}} type="file" accept="image/png,image/jpeg,image/jpg" name="img_portada_file" id="img_portada_file" wire:model.defer="img_portada_file" :value="old('img_portada_file')" >
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PNG, JPG, JPEG (Max. 3000x3000px | 1mb).</p>
                        @error('img_portada_file')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-2">
                    <div class="h-80 w-80 bg-green-100 border-2 border-green-500 rounded overflow-hidden relative">
                        @if ($img_portada_anterior)
                            <p class="font-bold text-lg text-center p-1 rounded-br-lg absolute bg-white opacity-60">Imagen de portada</p>
                            <div class="">
                                <img src="{{ asset('img/img_portada/'.$img_portada_anterior)}}" class="rounded h-80 w-80 object-cover" alt="">
                            </div>
                        @endif
                    </div>
                    <div class="h-80 w-80 bg-green-100 border-2 border-green-500 rounded overflow-hidden">
                        @if ($img_portada_file)
                        <img class="h-80 w-80 object-cover" src="{{ $img_portada_file->temporaryUrl()}}" alt="">
                        @endif
                    </div>
                </div>
                <hr>
                <div class="grid md:grid-cols-3 gap-2">
                    <div wire:loading.remove>
                        <label class="t_label" for="img_property">Imagenes de la propiedad (max:5)</label>
                        <input class="t_input-file" type="file" accept="image/png,image/jpeg,image/jpg" name="img_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="img_property" id="img_property" multiple>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Max. 5 imagenes.</p>
                        @error('img_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
                    @if ($img_properties_files)
                        @foreach ($img_properties_files as $image)
                            <div class="h-80 w-80 bg-green-100 border-2 border-green-500 rounded overflow-hidden relative">
                                <div class="absolute w-full flex justify-between items-start opacity-60">
                                    <p class="font-bold text-lg text-center p-1 rounded-br-lg bg-white">Galeria:</p>
                                    <button type="button" class="t_buttonDelete m-1" wire:click="$emit('showAlert', {{ $image->id }})">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </div>
                                <img src="{{ asset('img/img_properties/'.$image->name)}}" class="h-80 w-80 object-cover" alt="">                               
                            </div>
                        @endforeach
                    @endif
                </div>

                <div wire:loading class="spinner-border text-warning" >
                    <span class="visually-hidden"></span>
                </div>
                
            </fieldset>
        </div>
        <div class="tab-pane fade py-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <fieldset class="t_fieldset">
                <legend class="t_legend">Informacion de la propiedad</legend>
                
                <div class="grid md:grid-cols-3 gap-2">
                    <div class="t_grupo-input">
                        <label class="t_label" for="title">Titulo</label>
                        <input class="t_input" type="text" name="title" {{$viewShow ? 'disabled' : ''}} wire:model.defer="title" :value="old('title')" id="title">
                        @error('title')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="city">Ciudad</label>
                        <input class="t_input" type="text" name="city" {{$viewShow ? 'disabled' : ''}} wire:model.defer="city" :value="old('city')" id="city">
                        @error('city')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="adress">Direccion</label>
                        <input class="t_input" type="text" name="adress" {{$viewShow ? 'disabled' : ''}} wire:model.defer="adress" :value="old('adress')" id="adress">
                        @error('adress')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-2">                
                    <div class="t_grupo-input">
                        <label class="t_label" for="category_id">Compra/vende - Alquilar</label>
                        <select class="t_input" name="category_id" {{$viewShow ? 'disabled' : ''}} wire:model.defer="category_id" :value="old('category_id')" id="category_id">
                            <option value="">-- Seleccionar --</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category_id')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="money">Moneda</label>
                        <select class="t_input" name="money" {{$viewShow ? 'disabled' : ''}} wire:model.defer="money" :value="old('money')" id="money">
                            <option value="$">$ Pesos</option>
                            <option value="USD">USD Dolares</option>
                            <option value="EUR">EUR Euros</option>
                        </select>
                        @error('money')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="price">Precio</label>
                        <input class="t_input" type="number" name="price" {{$viewShow ? 'disabled' : ''}} wire:model.defer="price" :value="old('price')" id="price">
                        @error('price')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    <div class="t_grupo-input">
                        <label class="t_label" for="number_bedrooms">Numero de habitaciones</label>
                        <input class="t_input" type="number" name="number_bedrooms" {{$viewShow ? 'disabled' : ''}} wire:model.defer="number_bedrooms" :value="old('number_bedrooms')" id="number_bedrooms">
                        @error('number_bedrooms')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="number">Numero de baños</label>
                        <input class="t_input" type="number" name="number" {{$viewShow ? 'disabled' : ''}} wire:model.defer="number_wc" :value="old('number_wc')" id="number">
                        @error('number_wc')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    <div class="t_grupo-input">
                        <label class="t_label" for="garage">
                        <input class="t_input-checkbox" type="checkbox" name="garage" {{$viewShow ? 'disabled' : ''}} wire:model.defer="garage" :value="old('garage')" id="garage"> Garage</label>
                        @error('garage')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="children">
                        <input class="t_input-checkbox" type="checkbox" name="children" {{$viewShow ? 'disabled' : ''}} wire:model.defer="children" :value="old('children')" id="children"> Hijos</label>
                        @error('children')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="pets">
                        <input class="t_input-checkbox" type="checkbox" name="pets" {{$viewShow ? 'disabled' : ''}} wire:model.defer="pets" :value="old('pets')" id="pets"> Mascotas</label>
                        @error('pets')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="forniture">
                        <input class="t_input-checkbox" type="checkbox" name="forniture" {{$viewShow ? 'disabled' : ''}} wire:model.defer="forniture" :value="old('forniture')" id="forniture"> Amueblado</label>
                        @error('forniture')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="garden">
                        <input class="t_input-checkbox" type="checkbox" name="garden" {{$viewShow ? 'disabled' : ''}} wire:model.defer="garden" :value="old('garden')" id="garden"> Patio</label>
                        @error('garden')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div class="t_grupo-input">
                        <label class="t_label" for="status">
                        <input class="t_input-checkbox" type="checkbox" name="status" {{$viewShow ? 'disabled' : ''}} wire:model.defer="status" :value="old('status')" id="status"> Estado</label>
                        @error('status')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-1 gap-2">
                    <div class="t_grupo-input">
                        <label class="t_label" for="description">Descripcion</label>
                        <textarea class="t_input-textarea" name="description" {{$viewShow ? 'disabled' : ''}} wire:model.defer="description" :value="old('description')" id="description" cols="10" rows="5"></textarea>
                        @error('description')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>

                <div wire:loading class="spinner-border text-warning" >
                    <span class="visually-hidden"></span>
                </div>

            </fieldset>
        </div>
        <div class="tab-pane fade py-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <fieldset class="t_fieldset">
                <legend class="t_legend">Informacion del propietario</legend>
                
                <div class="grid md:grid-cols-3 gap-2">
                    <div>
                        <label class="t_label" for="name_property">Nombre</label>
                        <input class="t_input" type="text" name="name_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="name_property" :value="old('name_property')" id="name_property">
                        @error('name_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div>
                        <label class="t_label" for="last_name_property">Apellido</label>
                        <input class="t_input" type="text" name="last_name_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="last_name_property" :value="old('last_name_property')" id="last_name_property">
                        @error('last_name_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div>
                        <label class="t_label" for="document_property">Documento</label>
                        <input class="t_input" type="text" name="document_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="document_property" :value="old('document_property')" id="document_property">
                        @error('document_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-3 gap-2">
                    <div>
                        <label class="t_label" for="phone_property">Telefono</label>
                        <input class="t_input" type="text" name="phone_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="phone_property" :value="old('phone_property')" id="phone_property">
                        @error('phone_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div>
                        <label class="t_label" for="adress_property">Direccion</label>
                        <input class="t_input" type="text" name="adress_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="adress_property" :value="old('adress_property')" id="adress_property">
                        @error('adress_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                    <div>
                        <label class="t_label" for="email_property">Email</label>
                        <input class="t_input" type="email" name="email_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="email_property" :value="old('email_property')" id="email_property">
                        @error('email_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
                <div class="grid md:grid-cols-1 gap-2">
                    <div class="t_grupo-input">
                        <label class="t_label" for="description_property">Anotaciones</label>
                        <textarea class="t_input-textarea" name="description_property" {{$viewShow ? 'disabled' : ''}} wire:model.defer="description_property" :value="old('description_property')" id="description_property" cols="10" rows="5"></textarea>
                        @error('description_property')<livewire:helper.mostrar-alerta :message="$message" />@enderror
                    </div>
                </div>
            
                <div wire:loading class="spinner-border text-warning" >
                    <span class="visually-hidden"></span>
                </div>

            </fieldset>
        </div>
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
                    Livewire.emit('deleteImgProperty', propertyId)

                    Swal.fire(
                    'Eliminado con exito!',
                    'Eliminado correctamente.',
                    'success'
                    )
                }
                })
            })
        </script>
    @endpush
</div>

