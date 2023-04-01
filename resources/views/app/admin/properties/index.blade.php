<x-app-layout>
    <h2>Propiedades</h2>
    <div class="flex justify-between items-center mb-2">
        <p class="font-bold text-3xl">Listado</p>
        <a class="t_button2 w-auto" href="{{route('property.create')}}"><i class="fa-regular fa-square-plus"></i> Agregar</a>
    </div>

    <livewire:admin.properties.property-index>
</x-app-layout>