<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="container py-4">
    <a href="{{ route('role.create') }}"  class="btn btn-info" >Nuevo Rol</a>
    <br><br>
        <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permisos</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $rol)
               <tr>
               <td>{{$rol->name}}</td>
               <td>
                @forelse ($rol->permissions as $permission)
                <span>{{$permission->name}}</span>
                
                @empty
                <samp>
                    Notiene permisos asignados.
                </samp>
                @endforelse
                
                <td> <a href="{{ route('role.edit', $rol->id) }}" class="btn btn-success">Editar</a></td>
                <td><a href="{{ route ('role.index')}}"class="btn btn-danger" type="submit"><i class="bi bi-x-square">Eliminar</a></td>    
                </td> 
            </tr> 
            @endforeach
        </tbody>
    </table>
    </div>
</x-app-layout>