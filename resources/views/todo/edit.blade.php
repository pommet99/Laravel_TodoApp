@extends('layouts.app')
@section('content')

<div class="container justify-content-center align-items-center" style="margin-top:10%;">
    <div class="col-sm text-align-center">
    <h1 class="text-center" style="color:white; font-size:50px;"><strong>Editer votre tâche {{$todo->title}}</strong></h1><br>

    <form action="{{route('todo.update', $todo->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg" name='title' value="{{$todo->title}}" placeholder="Titre.." aria-label="Recipient's username" aria-describedby="button-addon2">
        <input type="text" class="form-control form-control-lg" name='description' value="{{$todo->description}}" placeholder="Description.." aria-label="Recipient's description" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-sucess" type="submit" id="button-addon2" style="background-color:#2ad000">Sauvegarder</button>
    </div>
    </div>
    </form>
   


</div>
</div>
@endsection

  
