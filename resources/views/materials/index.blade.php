@extends('../home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Materi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('material.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Lesson</th>
            <th>Materi</th>
            <th>Material Name</th>
            <th>Supervisor Name</th>
            <th>Status</th>
            <th>Comment</th>
            <th>Tanggal Upload</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($materials as $material)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $material->name }}</td>
            <td>{{ $material->lesson }}</td>
            <td>{{ $material->material }}</td>
            <td>{{ $material->material_name }}</td>
            <td>{{ $material->supervisor_name }}</td>
            <td>{{ $material->status }}</td>
            <td>{{ $material->comment }}</td>
            <td>{{ $material->tanggal_upload }}</td>
            <td>
                <form action="{{ route('material.destroy',$material->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('material.show',$material->id) }}">Show</a> --}}
    
                    <a class="btn btn-info" href="{{ route('material.show',$material->id) }}">Download</a>
                    <a class="btn btn-primary" href="{{ route('material.edit',$material->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $materials->links() !!}
      
@endsection