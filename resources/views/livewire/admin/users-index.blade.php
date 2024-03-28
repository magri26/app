<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" autocomplete="off" type="text" class="form-control form-control-sm" style="height: 26px;" placeholder="Filtrar por Nombre o Email">
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td width="80px">
                                <a href="{{route('admin.users.edit',$user)}}" style="height: 26px;padding-top:2px;" class="btn btn-sm btn-warning float-left" title="Editar Usuario"><i class="fas fa-edit"></i></a>
                                <a href="{{route('admin.users.destroy',$user)}}" style="height: 26px;padding-top:2px;" class="btn btn-sm btn-danger float-left ml-1" title="Borrar Usuario"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if ($users->count())
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-footer">
                <strong>No hay registros.</strong>
            </div>
        @endif
        
    </div>
</div>
