<!-- New Task Form -->
<form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <!-- Task Name -->
    <div class="form-group">
        <label for="task-name" class="col-sm-6 control-label">Task Name</label>

        <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
        </div>
    </div>

    <!-- Task Description -->
    <div class="form-group">
        <label for="task-description" class="col-sm-6 control-label">Description</label>

        <div class="col-sm-6">
            <textarea name="description" id="task-description" class="form-control" value="{{ old('task') }}" maxlength="155"></textarea>
        </div>
    </div>

    <!-- Add Task Button -->
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <Button class="btn btn-default" type="submit">
                <span class="fa fa-plus fa-fw" aria-hidden="true"></span>Create Task
            </Button>
        </div>
    </div>
</form>
