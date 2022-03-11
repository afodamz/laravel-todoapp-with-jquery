@extends('base.base')

@section('main-content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--<div class="col-xl-9">--}}
<div class="mx-auto mt-4" style="width: 600px;">
    <div class="panel">
        <div class="todo--panel">
            <div>
                <h3 class="text-center p-3">To-Do List</h3>
            </div>
            <form class="clearfix">
{{--            <form method="post" action="{{ route('createTodo') }}" class="clearfix">--}}
{{--                {{csrf_field()}}--}}
                <ul class="list-group scroll" data-trigger="scrollbar">
                    @foreach($todos as $todo)
                    <li class="list-group-item">
                        <label data-id={{$todo->id}} class="todo--label">
                            <input type="checkbox" name="todo_id" class="todo--input" {{$todo->status==1 ? 'checked' : null}}>
                            <span data-id={{$todo->id}} data-todo={{$todo->title}} class="todo--text">{{$todo->title}}</span>
                        </label>
                        <a href="#" data-toggle="modal" data-id={{$todo->id}} data-todo={{$todo->title}} data-target="#exampleModalCenter" class="todo--edit" ><i class="fas fa-edit"></i></a>
                        <a href="#" data-id={{$todo->id}} class="todo--remove">&times;</a>
                    </li>
                    @endforeach
                </ul>

                <div class="input-group"> <input type="text" name="title" placeholder="Add New Task"
                                                 class="form-control create" autocomplete="off" required>
                    <div class="input-group-btn">
                        <button type="submit" class="btn-link">+</button>
                    </div>
                </div>
            </form>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit To-Do</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="update-Todo">
                        <div class="modal-body">
                            <input type="hidden" id="todoId" class="todoId" name="todo_id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" name="todo_title" class="form-control edit-data" id="todocontent">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
@endsection
