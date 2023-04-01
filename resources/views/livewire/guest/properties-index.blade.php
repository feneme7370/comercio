<div>
    <div class="flex flex-col md:flex-row md:justify-around md:items-center mb-2 px-1 md:px-0 py-4 border-b border-orange-700">
        <div class="mb-3 grid md:grid-cols-12 gap-2">
            <div class="col-span-4">
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
                <label class="t_label" for="">Ordenar por</label>
                <select class="t_input" name="order_list" wire:model.lazy="order_list" id="">
                    <option selected value="created_at">Fecha publicacion</option>
                    <option value="city">Ciudad</option>
                    <option value="adress">Direccion</option>
                    <option value="price">Precio</option>
                </select>
            </div>
            <div class="col-span-2">
                <label class="t_label" for="">Ordenar</label>
                <select class="t_input" name="type_order_list" wire:model.lazy="type_order_list" id="">
                    <option selected  value="DESC">Descendente</option>
                    <option value="ASC">Ascendente</option>
                </select>
            </div>
        {{-- </div>
        <div class="mb-3 grid md:grid-cols-12 gap-2"> --}}
            <div class="col-span-2">
                <label class="t_label" for="order_list">Categoria</label>
                <select class="t_input" name="order_list" wire:model.lazy="category_list" id="order_list">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="md:px-1 grid md:grid-cols-4 gap-2">
        @foreach ($datos as $property)
            
        <div class="flex flex-col relative gap-5 bg-gray-100 md:hover:scale-105 transition duration-500">
            {{-- <img class="bg-cover" src="/img/app/anuncio1.jpg" alt=""> --}}
            <span class="absolute bg-white p-1 font-light opacity-80 capitalize">{{ $property->category->name }} | {{ $property->city }} - {{ $property->adress }}</span>
            <img class="bg-cover" src="/img/img_portada/{{ $property->img_portada }}" alt="">
            <p class="px-1 text-xl font-semibold t_line-clamp text-center">{{ $property->title }}</p>
            <p class="px-1 text-right text-green-700 text-2xl font-bold">${{ $property->price }}</p>
            <p class="px-1 font-light">{{ $property->created_at->diffForHumans() }}</p>
            <div class="grid grid-cols-3">
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
            <div class="flex">
                <a class="t_button" href="{{route('propiedad', $property->id)}}">Ver propiedad</a>
            </div>
        </div>

        @endforeach

    </div>
    <div class="mt-3 px-3">
        {{$datos->links()}}
    </div>
</div>
