<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="container py-4">
        <form action="{{ route('role.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div>
            <div>
                <input type="text" name="name"  id="name" value="{{$role->name}}">
                
            </div>
        </div>
        <div>
            <label for="permissions">Permisos de Rol</label>
        </div>
        <div>
            <table>
                <tbody>
                    @foreach ($permission as $id => $perm)
                    <tr>
                        <td>
                            <input 
                                type="checkbox" 
                                name="permission[]" 
                                value="{{ $id }}" 
                                {{ $role->permissions->contains($id) ? 'checked' : '' }}
                            >
                            {{ $perm }}
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="{{url('dashboard/role')}}" class="btn btn-secondary" >Cancelar</a>
            </div>
        </div>
    </form>
        
</x-app-layout>