@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <!-- Display Validation Errors -->
                @include('common.status')

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editing Task <strong>{{ $task->name }}</strong>
                    </div>
                    <div class="panel-body">

                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-sm-offset-1 control-label text-right">name</label>

                                <div class="col-sm-6">
                                    <input type="text" name="Task Name" value="{{ $task->name }}" class="form-control">

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-sm-3 col-sm-offset-1 control-label text-right">name</label>

                                <div class="col-sm-6">
                                    <textarea  name="description"  class="form-control" value="{{ $task->description }}" maxlength="155"></textarea>

                                </div>
                            </div>


                            <!-- Task Status -->

                            <div class="form-group row">
                                <label for="status"
                                    class="col-sm-3 col-sm-offset-1 control-label text-right">Status</label>
                                <div class="col-sm-6">
                                    <div class="checkbox">
                                        <label for="status">
                                            <input type="checkbox" name="completed" value=" {{ $task->completed }} " >

                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- Add Task Button -->
                            <div class="form-group row">
                                <div class="col-sm-offset-4 col-sm-6">
                                    <Button class="btn btn-default" type="submit">
                                        <span class="btn btn-success btn-block" aria-hidden="true"></span>Create Task
                                    </Button>
                                    {{-- {{Form::button('<span class="fa fa-save fa-fw" aria-hidden="true"></span> <span class="hidden-xxs">Save</span> <span class="hidden-xs">Changes</span>', array('type' => 'submit', 'class' => 'btn btn-success btn-block'))}} --}}
                                </div>
                            </div>

                        </form>


                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('tasks.index') }}" class="btn btn-sm btn-info" type="button">
                            <span class="fa fa-reply" aria-hidden="true"></span> Back to Tasks
                        </a>
                        {{--
                        {!! Form::open(array('class' => 'form-inline pull-right', 'method' => 'DELETE', 'route' => array('tasks.destroy', $task->id))) !!}
                            {{ method_field('DELETE') }}
                            {{Form::button('<span class="fa fa-trash fa-fw" aria-hidden="true"></span> <span class="hidden-xxs">Delete</span> <span class="hidden-sm hidden-xs">Task</span>', array('type' => 'submit', 'class' => 'btn btn-danger'))}}
                        {!! Form::close() !!} --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
