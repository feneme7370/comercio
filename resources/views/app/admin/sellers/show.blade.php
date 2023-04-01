<x-app-layout>
    <h2>Propiedades</h2>
    <div class="flex justify-between items-center mb-2">
        <p class="font-bold text-3xl">Ver registro</p>
        <a class="t_button2 w-auto" href="{{route('seller.index')}}"><i class="fa-regular fa-circle-left"></i> Volver</a>
    </div>

    <livewire:admin.sellers.seller-show :seller="$seller">


</x-app-layout>