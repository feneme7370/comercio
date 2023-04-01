@if ($portada === true)
<header style="background-image: url('/img/app/header.jpg')" class="h-96 bg-cover bg-center md:flex md:flex-col md:items-center md:justify-between">
    <div class="flex flex-col justify-center items-center pt-5 pb-1 text-white md:flex-row md:justify-between md:items-center gap-2 md:mx-5 md:w-3/4">
        <a href="{{route('welcome')}}" class="font-bold text-3xl md:text-5xl">BienesRaices</a>
        <ul class="flex flex-col justify-center items-center md:flex-row md:justify-between md:items-center gap-2">
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-house"></i><a class="hover:underline" href="{{route('welcome')}}">Inicio</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-address-card"></i><a class="hover:underline" href="{{route('about')}}">Nosotros</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-building"></i><a class="hover:underline" href="{{route('propiedades')}}">Propiedades</a>
            </span>
            
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-book"></i><a class="hover:underline" href="#">Blog</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-address-book"></i><a class="hover:underline" href="{{route('contact')}}">Contacto</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-right-from-bracket"></i><a class="hover:underline" href="{{route('login')}}">Login</a>
            </span>
        </ul>
    </div>
    <p class="text-white font-semibold text-2xl md:text-4xl text-center mt-3">Venta de Casas y Departamentos Exclusivos de Lujo</p>
    <div></div>
</header>
@else
<header class="bg-gray-800 bg-center md:flex md:flex-col md:justify-between md:items-center">
    <div class="flex flex-col justify-center items-center pt-5 pb-1 text-white md:flex-row md:justify-between md:items-center gap-2 md:mx-5 md:w-3/4">
        <a href="{{route('welcome')}}" class="font-bold text-3xl md:text-5xl">BienesRaices</a>
        <ul class="flex flex-col justify-center items-center md:flex-row md:justify-between md:items-center gap-2">
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-house"></i><a class="hover:underline" href="{{route('welcome')}}">Inicio</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-address-card"></i><a class="hover:underline" href="{{route('about')}}">Nosotros</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-building"></i><a class="hover:underline" href="{{route('propiedades')}}">Propiedades</a>
            </span>
            
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-book"></i><a class="hover:underline" href="#">Blog</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-address-book"></i><a class="hover:underline" href="{{route('contact')}}">Contacto</a>
            </span>
            <span class="flex items-center justify-center gap-1">
                <i class="fa-solid fa-right-from-bracket"></i><a class="hover:underline" href="{{route('login')}}">Login</a>
            </span>
        </ul>
    </div>
    {{-- <p class="text-white font-semibold text-2xl md:text-4xl text-center mt-3">Venta de Casas y Departamentos Exclusivos de Lujo</p>
    <div></div> --}}
</header>
@endif