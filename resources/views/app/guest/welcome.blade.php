<x-guest-layout>
    @include('app.guest.nav')
    <main>
        <section class="text-center w-3/4 mx-auto my-5">
            <h2>Mas sobre nosotros</h2>
            <div class="grid justify-between text-center items-center gap-5 grid-cols-3">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-32 w-32" src="/img/app/icono1.svg" alt="icono">
                    <p class="mt-1 text-base md:text-xl font-semibold">Seguridad</p>
                    <p class="font-light hidden md:inline-block">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem.</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img class="h-32 w-32" src="/img/app/icono2.svg" alt="icono">
                    <p class="mt-1 text-base md:text-xl font-semibold">Precio</p>
                    <p class="font-light hidden md:inline-block">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem.</p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img class="h-32 w-32" src="/img/app/icono3.svg" alt="icono">
                    <p class="mt-1 text-base md:text-xl font-semibold">Tiempo</p>
                    <p class="font-light hidden md:inline-block">Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem.</p>
                </div>
            </div>
        </section>
        <section class="flex flex-col items-center mb-10">
            <h2>Casas y Deptos en alquiler</h2>
            <div class="grid md:grid-cols-3 md:justify-around md:items-center gap-5 md:w-3/4 md:px-1">
            
                @foreach ($properties as $property)
                    
                    <div class="flex flex-col relative gap-5 bg-gray-100 md:hover:scale-105 transition duration-500">
                        {{-- <img class="bg-cover" src="/img/app/anuncio1.jpg" alt=""> --}}
                        <span class="absolute bg-white p-1 font-light opacity-80">Alquiler | Carlos Casares - {{ $property->adress }}</span>
                        <img class="bg-cover" src="/img/img_portada/{{ $property->img_portada }}" alt="">
                        <p class="px-1 text-xl font-semibold t_line-clamp text-center">{{ $property->title }}</p>
                        <p class="px-1 font-light t_line-clamp">{{ $property->description }}</p>
                        <p class="px-1 text-right text-green-700 text-2xl font-bold">${{ $property->price }}</p>
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
                            <a class="t_button" href="#">Ver propiedad</a>
                        </div>
                    </div>

                @endforeach

            </div>
            <div class="px-1 my-10 flex">
                <a class="t_button2" href="{{route('propiedades')}}">Ver todas</a>
            </div>
        </section>
        <section style="background-image: url('/img/app/encuentra.jpg')" class="h-96 bg-cover bg-center flex flex-col justify-between items-center p-5">
                <p class="text-white font-semibold text-3xl md:text-5xl text-center mt-3">Encuentra la casa de tus sueños</p>
                <p class="text-white font-semibold text-base md:text-lg text-center mt-3">Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
                <a class="t_button md:t_w-auto" href="{{route('contact')}}">Contactar</a>
        </section>
        <section class="flex items-center flex-col">
            <h2>Ofrecemos</h2>
            <div class="bg-green-700 rounded text-white p-2 m-3 md:w-1/2">
                <p class="mb-3">Un servicio y atencion de calidad, buscando el lugar perfecto para cada cliente</p>
                <p class="text-right">- BienesRaices</p>
            </div>
        </section>
    </main>
    @include('app.guest.footer')
</x-guest-layout>