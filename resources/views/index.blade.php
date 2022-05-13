@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="row mt-3">
        <div class="col-12 align-self-center">
           

            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                  <tr>
                    <th width="30px" scope="row">{{$loop->iteration}}</th>
                    <td><a href="details/{{$todo->id}}" style="color: cornflowerblue">{{$todo->name}}</a></td> 
                  </tr>
                  @endforeach
                </tbody>
            </table>
             
        </div>
    </div>

@endsection