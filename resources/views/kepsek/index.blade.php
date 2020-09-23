@extends('../home')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laporan</h2>
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
   

                
    
            </form>
        </tr>
        <div class="form-group text-right">
            <button class="btn btn-success" onclick="ayFunction()" id="button" style="margin-left: 38%">cetak</button>
           </div>
        @endforeach
    </table>
      
@endsection

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    function ayFunction(){
        var x = document.getElementById("button");
        if(x.style.display == "none"){
            x.style.display="block";
        }else{
            x.style.display="none";
        }
        window.print();
        x.style.display="block";
        x.style.float="right";
        x.style.marginBottom="10px";
    }
</script>