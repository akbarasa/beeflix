@extends('app')

@section('content')

<div class="container">
  <div class="card" >
   <div class="card-header" style="text-transform: uppercase;">
       <a href="{{url('/viewCategory/'.$genre ?? ''->id)}}">
         {{$g->name}}
       </a>
    </div>
    <br>
     <div class="container-fluid">
     
       <div class="row justify-content-center">
          @foreach($movie as $m)
          @if($g->id == $m->genre_id)
          <div class="col-lg-3 mb-4">
              <div class="card">
                 <img class="card-img-top" src="assets/{{$m->photo}}" height="330" width="100">
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
           @endif
           @endforeach
       </div>
         
     
     </div>
     </div>
</div>


@endsection
