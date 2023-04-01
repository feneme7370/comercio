<fieldset class="t_fieldset">
    <legend class="t_legend">Informacion del vendedor</legend>
    
    <div class="t_grupo-input">
        <label class="t_label" for="status">Estado  
        <input class="t_input-checkbox" type="checkbox" name="status" id="status" {{$viewShow ? 'disabled' : ''}} wire:model.defer="status" :value="old('status')"></label>
        @error('status')<livewire:helper.mostrar-alerta :message="$message" />@enderror
    </div>
    <div class="grid md:grid-cols-3 gap-2">
        <div class="t_grupo-input">
            <label class="t_label" for="name">* Nombre</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="text" name="name" id="name" wire:model.defer="name" :value="old('name')" placeholder="Nombre" autofocus>
            @error('name')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
        <div class="t_grupo-input">
            <label class="t_label" for="last_name">* Apellido</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="text" name="last_name" id="last_name" wire:model.defer="last_name" :value="old('last_name')" placeholder="Apellido">
            @error('last_name')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
        <div class="t_grupo-input">
            <label class="t_label" for="document">* Documento</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="text" name="document" id="document" wire:model.defer="document" :value="old('document')" placeholder="Documento">
            @error('document')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
    </div>
    <div class="grid md:grid-cols-3 gap-2">
        <div class="t_grupo-input">
            <label class="t_label" for="email">* Email</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="email" name="email" id="email" wire:model.defer="email" :value="old('email')" placeholder="Email">
            @error('email')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>     
        <div class="t_grupo-input">
            <label class="t_label" for="phone">* Telefono</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="text" name="phone" id="phone" wire:model.defer="phone" :value="old('phone')" placeholder="Telefono">
            @error('phone')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
        <div class="t_grupo-input">
            <label class="t_label" for="adress">* Direccion</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="text" name="adress" id="adress" wire:model.defer="adress" :value="old('adress')" placeholder="Direccion">
            @error('adress')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>  
    </div>
    <div class="grid md:grid-cols-3 gap-2">    
        <div class="t_grupo-input">
            <label class="t_label" for="birthday">* Fecha de nacimiento</label>
            <input class="t_input" {{$viewShow ? 'disabled' : ''}} type="date" name="birthday" id="birthday" wire:model.defer="birthday" :value="old('birthday')">
            @error('birthday')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
    </div>
    <div class="grid md:grid-cols-1 gap-2">
        <div class="t_grupo-input">
            <label class="t_label" for="description">* Anotaciones</label>
            <textarea class="t_input-textarea" {{$viewShow ? 'disabled' : ''}} name="description" id="description" wire:model.defer="description" :value="old('description')" placeholder="Descripcion del vendedor" cols="10" rows="5"></textarea>
            @error('description')<livewire:helper.mostrar-alerta :message="$message" />@enderror
        </div>
    </div>

</fieldset>
<fieldset class="t_fieldset" {{$viewShow ? 'hidden' : ''}} >
    <legend class="t_legend">Imagenes</legend>
        <div wire:loading class="spinner-border text-warning" >
            <span class="visually-hidden"></span>
        </div>
    
        <div class="grid md:grid-cols-3 gap-2">
            <div>
                <label class="t_label" for="img_perfil_file">Nueva imagen de perfil</label>
                <input class="t_input-file" {{$viewShow ? 'disabled' : ''}} type="file" accept="image/png,image/jpeg,image/jpg" name="img_perfil_file" id="img_perfil_file" wire:model.lazy="img_perfil_file" :value="old('img_perfil_file')" >
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">PNG, JPG, JPEG (Max. 3000x3000px | 1mb).</p>
                @error('img_perfil_file')<livewire:helper.mostrar-alerta :message="$message" />@enderror
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-2">
            <div class="h-80 w-80 bg-green-100 border-2 border-green-500 rounded overflow-hidden">
                @if ($img_perfil_file)
                <img class="h-80 w-80 object-cover" src="{{ $img_perfil_file->temporaryUrl()}}" alt="">
                @endif
            </div>
            <div class="h-80 w-80 bg-green-100 border-2 border-green-500 rounded overflow-hidden relative">
                @if ($img_perfil_anterior)
                    <p class="font-bold text-lg text-center p-1 rounded-br-lg absolute bg-white opacity-60">Imagen de perfil</p>
                    <div class="">
                        <img src="{{ asset('img/img_perfil/'.$img_perfil_anterior)}}" class="rounded h-80 w-80 object-cover" alt="">
                    </div>
                @endif
            </div>

        </div>

</fieldset>