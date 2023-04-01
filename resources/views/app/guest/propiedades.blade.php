<x-guest-layout>
    {{$portada = false}}
    @include('app.guest.nav')
    <main>
        <section class="flex flex-col">
            <h2>Casas y Deptos</h2>
            <livewire:guest.properties-index>
        </section>
    </main>
    @include('app.guest.footer')
</x-guest-layout>