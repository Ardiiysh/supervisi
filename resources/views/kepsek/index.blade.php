@extends('../home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Materi</h2>
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
        </tr>
        @php
                $i = 0;
            @endphp
        @foreach ($materials as $material)
        <tr>
            <td>
                {{ ++$i }}</td>
            <td>{{ $material->name }}</td>
            <td>{{ $material->lesson }}</td>
            <td>{{ $material->material }}</td>
            <td>{{ $material->material_name }}</td>
            <td>{{ $material->supervisor_name }}</td>
            <td>{{ $material->status }}</td>
            <td>{{ $material->comment }}</td>
            <td>{{ $material->tanggal_upload }}</td>
        </tr>
        @endforeach
    </table>
      
@endsection