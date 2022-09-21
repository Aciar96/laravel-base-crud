@extends('layout.main')




@section('content')
 <div class="card-title text-center">
 <table class="table">
  <thead>
    <tr>
      <th scope="col">title</th>
      <th scope="col">wiew</th>
      <th scope="col">price</th>
      <th scope="col">series</th>
      <th scope="col">date</th>
      <th scope="col">type</th>
    </tr>
  </thead>
  <tbody>
      @forelese($comics as comic)  
      <tr>
         <td>{{$comic->title}}</td>
         <td>{{$comic->view}}</td>
         <td>{{$comic->price}}</td>
         <td>{{$comic->series}}</td>
         <td>{{$comic->sale_date}}</td>
          <td>{{$comic->type}}</td>
     </tr>
       @empty
      @endforelse
  </tbody>
</table>
 </div>
@endsection