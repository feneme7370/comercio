<x-guest-layout>
    {{$portada = false}}
    @include('app.guest.nav')
    <main>
        <section>
            <h2>Sobre Nosotros</h2>
            <div class="grid gap-2 p-3 bg-gray-100 md:grid-cols-2 md:items-center leading-relaxed">
                <img src="/img/app/nosotros.jpg" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolores adipisci et exercitationem! Eos ducimus est et, dolorum delectus corrupti placeat beatae nostrum cum magni sequi ut excepturi omnis modi.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, consequuntur vero officiis et impedit mollitia ullam vel est dolores delectus aut temporibus modi rem ratione, aperiam neque facilis quisquam minus!
                </p>
            </div>
        </section>
    </main>
    @include('app.guest.footer')
</x-guest-layout>