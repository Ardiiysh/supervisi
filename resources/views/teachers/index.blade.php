@extends('../home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Teacher</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teacher.create') }}"> Create New Teacher</a>
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
            <th>No Hp</th>
            <th>email</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $teacher->teacher_name }}</td>
            <td>{{ $teacher->lesson }}</td>
            <td>{{ $teacher->nohp }}</td>
            <td>{{ $teacher->email }}</td>
            <td>
                <form action="{{ route('teacher.destroy',$teacher->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('teacher.show',$teacher->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('teacher.edit',$teacher->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $teachers->links() !!}
      
@endsection