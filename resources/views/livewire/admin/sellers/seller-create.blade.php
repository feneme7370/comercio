<div>
    <form wire:submit.prevent="userCreate">

        @include('app.admin.sellers.form')

        <button type="submit" class="t_button w-auto ml-3">Guardar</button>
    </form>
</div>
