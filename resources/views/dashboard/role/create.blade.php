<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="container py-4">
        <form action ="{{ route('role.store') }}" method="POST">
        @csrf
        <div>
            <div>
                <input type="text" name="name"  id="name">
            </div>
        </div>
        <div>
            <label for="permissions"><b>Permisos de Rol</b>  </label>
        </div>
        <br>
        <div>
            <table class="table table-striped table-bordered">
                <tbody>
                    @foreach ($permission as $id => $perm)
                    <tr>
                    <td>
                    <input type="checkbox" name="permission[]" value="{{ $id }}">
                    {{ $perm }}
            </td>    
            </tr>
            @endforeach
                </tbody>
            </table>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{url('role')}}" class="btn btn-secondary" >Cancelar</a>
            </div>
        </div>
    </form>
        
</x-app-layout>