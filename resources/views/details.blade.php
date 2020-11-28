@extends('app')

@section('content')

<div class="container">
  <div class="card" >
     <div class="container-fluid" style="background-color: whitesmoke;">
      <div class="row justify-content-center">
          <table class="table table-borderless" style="table-layout: fixed;">
            <tr>
                <th>
                  <center>
                    <img src="../assets/{{$movie->photo}} " height="400" width="280">
                  </center>
                </th>
                <th>
                  <div>
                    <h3>
                      <b>
                        {{$movie->title }}
                      </b>
                    </h3>
                    @if($movie->rating == 5)
                      <span style="color: orange; font-size: 30px; margin-top:-10px;">
                        @for ($i = 1; $i <= $movie->rating; $i++)
                           ★  
                        @endfor
                      </span>

                    @elseif($movie->rating == 4)
                     <span style="color: orange; font-size: 30px; margin-top:-10px;">
                        @for ($i = 1; $i <= $movie->rating; $i++)
                           ★
                        @endfor
                      </span>
                      <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                    @elseif($movie->rating == 3)
                     <span style="color: orange; font-size: 30px; margin-top:-5px;">
                        @for ($i = 1; $i <= $movie->rating; $i++)
                            ★  
                        @endfor
                      </span>
                       <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                        <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                    @elseif($movie->rating == 2)
                     <span style="color: orange; font-size: 30px; margin-top:-5px;">
                        @for ($i = 1; $i <= $movie->rating; $i++)
                            ★ 
                        @endfor
                      </span>
                       <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                        <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                         <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                    @else
                     <span style="color: orange; font-size: 30px; margin-top:-5px;">
                        @for ($i = 1; $i <= $movie->rating; $i++)
                          ★
                        @endfor
                      </span>
                      <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                      <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                      <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>
                      <span style="color: black;font-size: 30px; margin-top:-5px;">★</span>

                    @endif
                  </div>
                    

                    <p style="text-align: justify;">
                      {{$movie->description}}
                    </p>
                </th>
                <th>
                  <b>EPISODE</b>
                  <br>
                  <br>
                  <table class="table table-striped">
                    <tr>
                      <th scope="col">EPISODE</th>
                      <th scope="col">JUDUL</th>
                    </tr>
                     @foreach($ep as $e)
                    <tr>
                        <td scope="col">Episode {{ $e->episode }}</td>
                        <td scope="col">{{ $e->title }}</td>
                    </tr>
                     @endforeach
                     <tr>
                       <td colspan="2">
                          <div class="row justify-content-center" id="page">
                          {{ $ep->links() }}
                          </div>
                       </td>
                     </tr>
                  </table>
                </th>
            </tr>
          </table>   
      </div>
     </div>
  </div>
</div>
@endsection
