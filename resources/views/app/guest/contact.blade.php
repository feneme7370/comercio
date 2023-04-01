<x-guest-layout>
    {{$portada = false}}
    @include('app.guest.nav')
    <main>
        <section class="bg-gray-100">
            <h2>Contactarnos</h2>
            <div class="grid gap-2 p-3">
                <img class="justify-self-center md:w-2/3" src="/img/app/destacada3.jpg" alt="">
                <div class="md:w-2/3 justify-self-center">
                    <h2>Completar el formulario</h2>
                    <form class="" action="">

                        <fieldset class="t_fieldset">

                            <legend class="t_legend">Informacion personal</legend>
                            
                            <label class="t_label" for="">Nombre</label>
                            
                            <input class="t_input" type="text" name="" id="">
                            
                            <label class="t_label" for="">Mensaje</label>
                            
                            <textarea class="t_input" name="" id="" cols="10" rows="5"></textarea>
                        </fieldset>
                        <fieldset class="t_fieldset">
                            <legend class="t_legend">Tipo de consulta</legend>
                            <label class="t_label" for="">Compra/vende - Alquilar</label>
                            <select class="t_input" name="" id="">
                                <option value="">-- Seleccionar --</option>
                                <option value="">Comprar</option>
                                <option value="">Vender</option>
                                <option value="">Alquilar</option>
                            </select>
                            <label class="t_label" for="">Presupuesto</label>
                            <input class="t_input" type="number" name="" id="">
                        </fieldset>
                        <fieldset class="t_fieldset">
                            <legend class="t_legend">Forma de contacto</legend>
                            <label class="t_label" for="">Telefono</label>
                            <input class="t_input" type="number" name="" id="">
                            <label class="t_label" for="">Email</label>
                            <input class="t_input" type="email" name="" id="">
                            <label class="t_label" for="">Otro</label>
                            <input class="t_input" type="text" name="" id="">
                        </fieldset>
                        <button class="my-2 t_button">Enviar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    @include('app.guest.footer')
</x-guest-layout>