<footer class="mt-4 p-2 bg-gray-800 text-white">
    <div class="flex flex-col md:flex-row md:justify-between md:items-start py-5 capitalize text-center">
        <div class="w-full mb-5 md:mb-0 md:w-1/3">
            <p class="text-3xl mb-2">Malatini</p>
            <div>
                <p class="font-bold text-sm">Localidad: <span class="text-sm font-extralight">{{ $teams->city }}</span></p>
                <p class="font-bold text-sm">Direccion: <span class="text-sm font-extralight">{{ $teams->adress }}</span></p>
            </div>
        </div>
        <div class="w-full mb-5 md:mb-0 md:w-1/3">
            <p class="text-3xl mb-2">Contacto</p>
            <div>
                <p class="font-bold text-sm">Telefono: <span class="text-sm font-extralight">{{ $teams->phone }}</span></p>
                <p class="font-bold text-sm">Email: <span class="text-sm font-extralight lowercase">{{ $teams->email }}</span></p>
            </div>
        </div>
        <div class="w-full mb-5 md:mb-0 md:w-1/3">
            <p class="text-3xl mb-2">Redes Sociales</p>
            <div class="rounded py-1 px-3 flex justify-center gap-5">
                <a  class="text-3xl" target="_blank" href="http:\\{{ $teams_social->facebook }}"><i class="fa-brands fa-square-facebook"></i></a>
                <a  class="text-3xl" target="_blank" href="http:\\{{ $teams_social->instagram }}"><i class="fa-brands fa-square-instagram"></i></a>
                <a  class="text-3xl" target="_blank" href="http:\\{{ $teams_social->twitter }}"><i class="fa-brands fa-square-twitter"></i></a>
                <a  class="text-3xl" target="_blank" href="http:\\{{ $teams_social->youtube }}"><i class="fa-brands fa-youtube"></i></a>
                <a  class="text-3xl" target="_blank" href="http:\\{{ $teams_social->tiktok }}"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
    </div>
    <p class="text-center">Todos los derechos reservados {{now()->format('Y')}} - Femaser</p>
</footer>