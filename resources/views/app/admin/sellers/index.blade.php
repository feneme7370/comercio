<x-app-layout>
    <h2>{{$title}}</h2>
    <div class="flex justify-between items-center mb-2">
        <p class="font-bold text-3xl">Listado</p>
        <a class="t_button2 w-auto" href="{{route('seller.create')}}"><i class="fa-regular fa-square-plus"></i> Agregar</a>
    </div>

    <livewire:admin.sellers.seller-index>


</x-app-layout>