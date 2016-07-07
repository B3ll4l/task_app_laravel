@extends('layout.master')

@section('content')
	<div class="panel panel-default">
		<div class="panel-body">
			@include('includes.errors')
			<form action="{{ url('task') }}" method="post" class="form-horizontal">
				<div class="form-group">
					<label for="task" class="col-sm-3 control-label">Task</label>
					<div class="col-sm-6">
						<input type="text" name="task" id="task" class="form-control">
					</div>
				</div>
				{{ csrf_field() }}
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-6">
						<input type="submit" class="btn btn-default" value="Add task">
					</div>
				</div>
			</form>
		</div>
	</div>
	@if ($tasks->count())
		<div class="panel panel-default">
	    <div class="panel-heading">Panel heading</div>
	    <table class="table">
	        <thead>
	            <tr>
	                <th>Task</th>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	        	@foreach ($tasks as $task)
		            <tr>
		                <td>{{ $task->task }}</td>
		                <td>
							<form action="{{ url('task'. '/' .$task->id) }}" method="POST">
								{{ method_field('DELETE') }}
								{{ csrf_field() }}
								<input type="submit" value="Delete" class="btn btn-danger">
							</form>
		                </td>
		            </tr>
				@endforeach
	        </tbody>
	    </table>
	</div>
	@endif
@stop

