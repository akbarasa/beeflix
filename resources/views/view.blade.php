@extends('app')

@section('content')

<div class="container">
    <div class="container-fluid">

     <div class="row justify-content-center">
        @foreach($movie as $m)
        <div class="col-lg-3 mb-4">
            <div class="card">
               <img class="card-img-top" src="../assets/{{$m->photo}}" height="330" width="100">
             <div class="card-footer" style="background-color: white;">
                <center>
                  <small class="text-muted" style="font-size: 18px;">
                       {{$m->title}}
                  </small>
                 
                </center>
             </div>
             <a href="{{url('/viewDetail/'.$m->id)}}" class="btn btn-primary btn-block bg-dark">
                LIHAT FILM
             </a>
            </div>
           
        </div>
         @endforeach
     </div>
    </div>
</div>

@endsection
