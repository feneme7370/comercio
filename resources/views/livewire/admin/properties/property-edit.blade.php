<form wire:submit.prevent="propertyEdit" enctype="multipart/form-data">

    @include('app.admin.properties.form')

    <button type="submit" class="t_button w-auto ml-3">Editar</button>
</form>