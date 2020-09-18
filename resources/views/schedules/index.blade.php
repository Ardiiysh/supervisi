@extends('../home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>SCHEDULE</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('schedule.create')}}"> Create New Schedule</a>
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
            <th>Activity</th>
            <th>Status</th>
            <th>Supervisor Name</th>
            <th>Teacher Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($schedules as $schedule)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $schedule->activity }}</td>
            <td>{{ $schedule->status }}</td>
            <td>{{ $schedule->supervisor_name }}</td>
            <td>{{ $schedule->teacher_name }}</td>
            <td>
                <form action="{{ route('schedule.destroy',$schedule->id) }}" method="POST">
   
                    {{-- <a class="btn btn-info" href="{{ route('schedule.show',$schedule->id) }}">Show</a> --}}
    
                    <a class="btn btn-primary" href="{{ route('schedule.edit',$schedule->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $schedules->links() !!}
      
@endsection