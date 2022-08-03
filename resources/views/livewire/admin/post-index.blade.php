<div class="card">
    <div class="card-body">
        
        {{$search}}
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingre el nombre un posts">
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>    
                    <th>Name</th>
                    <th colspan="2"></th>
                </tr>   
            </thead>
            <tbody>
                
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->name}}</td>
                        <td width = "10px" ><a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit',$post)}}">Editar</a></td>
                        <td width = "10px">
                            <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="card-footer">
            {{$posts->links()}}
        </div>

    </div>
</div>
