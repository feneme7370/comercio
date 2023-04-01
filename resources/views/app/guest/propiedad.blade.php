<x-guest-layout>
    {{$portada = false}}
    @include('app.guest.nav')
    <main class="px-1 md:px-2">
        <h2>{{$property->title}}</h2>
        <img class="bg-cover mx-auto w-3/4" src="/img/img_portada/{{ $property->img_portada }}" alt="">
        <div class="grid gap-5 mt-2">
            <p class="font-extralight uppercase text-xl md:text-5xl">{{ $property->category->name }}:<span class="px-1 text-right text-green-700 font-bold">{{ $property->money.' '.$property->price }}</span></p>
            <p class="px-1 font-light">{{ $property->description }}</p>
            <p class="px-1 font-bold uppercase">{{ $property->city }}, {{ $property->adress }}</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 my-2">
            <div class="t_grupo-input">
                <label class="t_label" for="garage">
                <input class="t_input-checkbox" disabled type="checkbox" name="garage" wire:model.defer="garage" {{$property->garage ? 'checked' : ''}} :value="old('garage')" id="garage"> Garage</label>
            </div>
            <div class="t_grupo-input">
                <label class="t_label" for="children">
                <input class="t_input-checkbox" disabled type="checkbox" name="children" wire:model.defer="children" {{$property->children ? 'checked' : ''}} :value="old('children')" id="children"> Hijos</label>
            </div>
            <div class="t_grupo-input">
                <label class="t_label" for="pets">
                <input class="t_input-checkbox" disabled type="checkbox" name="pets" wire:model.defer="pets" {{$property->pets ? 'checked' : ''}} :value="old('pets')" id="pets"> Mascotas</label>
            </div>
            <div class="t_grupo-input">
                <label class="t_label" for="forniture">
                <input class="t_input-checkbox" disabled type="checkbox" name="forniture" wire:model.defer="forniture" {{$property->forniture ? 'checked' : ''}} :value="old('forniture')" id="forniture"> Amueblado</label>
            </div>
            <div class="t_grupo-input">
                <label class="t_label" for="garden">
                <input class="t_input-checkbox" disabled type="checkbox" name="garden" wire:model.defer="garden" {{$property->garden ? 'checked' : ''}} :value="old('garden')" id="garden"> Patio</label>
            </div>
        </div>

        <div class="grid grid-cols-3 mx-auto my-5 max-w-md bg-gray-300 p-3 rounded">
            <div class="flex justify-center items-center gap-2">
                <img class="w-1/3" src="/img/app/icono_dormitorio.svg" alt="icono">
                <span class="font-bold text-xl">{{ $property->number_bedrooms }}</span>
            </div>
            <div class="flex justify-center items-center gap-2">
                <img class="w-1/3" src="/img/app/icono_wc.svg" alt="icono">
                <span class="font-bold text-xl">{{ $property->number_wc }}</span>
            </div>
            <div class="flex justify-center items-center gap-2">
                <img class="w-1/3" src="/img/app/icono_estacionamiento.svg" alt="icono">
                <span class="font-bold text-xl">{{ $property->garage ? 'Si' : 'No' }}</span>
            </div>
        </div>

        <div class="grid md:grid-cols-3 my-2 bg-green-600 p-2 rounded">
            <p class="px-1 text-white font-bold">Propietario: <span class="font-light">{{ $property->last_name_property }}, {{ $property->name_property }}</span></p>
            <p class="px-1 text-white font-bold">Email: <span class="font-light">{{ $property->email_property }}</span></p>
            <p class="px-1 text-white font-bold">Telefono: <span class="font-light">{{ $property->phone_property }}</span></p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-2">
            @if ($img_properties_files)
                @foreach ($img_properties_files as $image)
                    <div class="w-full md:bg-green-100 md:border-2 md:border-green-500 overflow-hidden">
                        <img src="{{ asset('img/img_properties/'.$image->name)}}" class="h-full max-h-96 object-cover" alt="">                               
                    </div>
                @endforeach
            @endif
        </div>
    </main>
    @include('app.guest.footer')
</x-guest-layout>