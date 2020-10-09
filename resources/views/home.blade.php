@extends('layouts.app')
@section('content')

<div class="container justify-content-center align-items-center" style="margin-top:10%;">
    <div class="col-sm text-align-center">
    <h1 class="text-center" style="color:white; font-size:50px;"><strong>Todo App</strong></h1><br>
    <h2 class="text-white">Ajoute une tâche:</h2>
    <form action="{{route('todo.store')}}" method="POST">
    @csrf
    <div class="input-group mb-3 w-100">
        <input type="text" class="form-control form-control-lg" name='title' placeholder="Titre.." aria-label="Recipient's username" aria-describedby="button-addon2">
        <input type="text" class="form-control form-control-lg" name='description' placeholder="Description.." aria-label="Recipient's description" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-sucess" type="submit" id="button-addon2" style="background-color:#2ad000">Ajouter à la liste</button>
    </div>
    </div>
    </form>
    <br>
    <h2 class="text-white">Ma liste de tâches:</h2>
    <div class="bg-white">
        @foreach ($todos as $todo)
        <div class="w-100 d-flex align-items-center justify-content-between">
            <div class="p-3">
                @if ($todo->completed == 0)
                <i class="fas fa-times" style="margin:5px;"></i>
                @else 
                <i class="fas fa-check" style="margin:5px;"></i>

                @endif {{$todo->title}}</div>

        
        <div class="mr-4 d-flex align-items-center">
            @if ($todo->completed == 0)
            <form action="{{route('todo.update', $todo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" name="completed" value="1" hidden>
                <button class="btn btn-warning" style="margin-right:12px;">Marquer comme terminer</button>
                </form>

            @else
            <form action="{{route('todo.update', $todo->id)}}" method="POST">
                @method('PUT')
                @csrf
                <input type="text" name="completed" value="0" hidden>
                <button class="btn btn-success" style="margin-right:12px;">Marquer comme non-terminer</button>
                </form>
            @endif


            <button type="button" class="border-0 bg-transparent p-2" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="far fa-eye"></i>
              </button>
            
             <a class="inline-block" href="{{route('todo.edit', $todo->id)}}">
            <i class="far fa-edit"></i>
             </a> 

            <form action="{{route('todo.destroy', $todo->id)}}" method="POST">
                @csrf
                @method('DELETE')
            <button class="border-0 bg-transparent p-2"><i class="fas fa-trash"></i></button>
            </form>

        </div>
       </div>
      @endforeach 
     </div>
    </div>


     <!-- Modal -->
   <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Description:</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            @foreach ($todos as $todo)
            <tr>
                <td>{{ $todo->description }} </td>
            </tr>
            @endforeach
        </div>
      </div>
    </div>
  </div> 


</div>
@endsection

  
