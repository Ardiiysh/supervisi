@extends('materials.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Materi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('material.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('material.update',$material->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $material->name }}" class="form-control" placeholder="Nama Guru">
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <select type="text" name="name" class="form-control" placeholder="Name">
                        <option >-- Pilih Nama --</option>
                        @foreach ($teacher as $id => $teacher_name)
                        <option value="{{$teacher_name}}">{{$teacher_name}}</option>
                            
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lesson:</strong>
                    <input type="text" name="lesson" value="{{ $material->lesson }}" class="form-control" placeholder="Lesson">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Material:</strong>
                    <input type="text" name="material" value="{{ $material->material }}" class="form-control" placeholder="Material">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Material Name:</strong>
                    <input type="text" name="material_name" value="{{ $material->material_name }}" class="form-control" placeholder="Material Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Supervisor Name:</strong>
                    <input type="text" name="supervisor_name" value="{{ $material->supervisor_name }}" class="form-control" placeholder="Supervisor Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{ $material->status }}" class="form-control" placeholder="Sstatus">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comment:</strong>
                    <input type="text" name="comment" value="{{ $material->comment }}" class="form-control" placeholder="Comment">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection