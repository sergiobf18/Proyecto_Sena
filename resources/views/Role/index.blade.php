<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="container py-4">
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permisos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
    </table>
    </div>
</x-app-layout>