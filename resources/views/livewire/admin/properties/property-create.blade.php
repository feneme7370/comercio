<form wire:submit.prevent="propertyCreate" enctype="multipart/form-data">

    @include('app.admin.properties.form')

    <button type="submit" class="t_button w-auto ml-3">Guardar</button>
</form>
