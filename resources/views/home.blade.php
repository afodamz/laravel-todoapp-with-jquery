@extends('base.base')

@section('main-content')
{{--<div class="col-xl-9">--}}
<div class="mx-auto mt-4" style="width: 600px;">
    <div class="panel">
        <div class="todo--panel">
            <div>
                <h3 class="text-center p-3">To-Do List</h3>
            </div>

            <form action="#">
                <ul class="list-group scroll" data-trigger="scrollbar">
                    <li class="list-group-item"> <label class="todo--label"> <input type="checkbox"
                                                                                    name="todo_id" value="1" class="todo--input" checked> <span
                                class="todo--text">Schedule Meeting</span> </label> <a href="#"
                                                                                       class="todo--remove">&times;</a> </li>
                    <li class="list-group-item"> <label class="todo--label"> <input type="checkbox"
                                                                                    name="todo_id" value="2" class="todo--input"> <span
                                class="todo--text">Call Clients To Follow-Up</span> </label> <a
                            href="#" class="todo--remove">&times;</a> </li>
                    <li class="list-group-item"> <label class="todo--label"> <input type="checkbox"
                                                                                    name="todo_id" value="3" class="todo--input" checked> <span
                                class="todo--text">Book Flight For Holiday</span> </label> <a
                            href="#" class="todo--remove">&times;</a> </li>
                    <li class="list-group-item"> <label class="todo--label"> <input type="checkbox"
                                                                                    name="todo_id" value="4" class="todo--input"> <span
                                class="todo--text">Forward Important Tasks</span> </label> <a
                            href="#" class="todo--remove">&times;</a> </li>
                    <li class="list-group-item"> <label class="todo--label"> <input type="checkbox"
                                                                                    name="todo_id" value="6" class="todo--input"> <span
                                class="todo--text">Important Tasks</span> </label> <a href="#"
                                                                                      class="todo--remove">&times;</a> </li>
                </ul>
                <div class="input-group"> <input type="text" name="todo" placeholder="Add New Task"
                                                 class="form-control" autocomplete="off" required>
                    <div class="input-group-btn"> <button type="submit" class="btn-link">+</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
