@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 well">
            @if ($jobs->count())
            <h2>Job List{!! HTML::linkroute('jobs.create', 'Create a New Job', null, array('class' => 'btn btn-primary', 'style' => 'float:right')) !!}</h2>
            <table class="table table-striped">
                <thead>
                    <td>Job ID</td>
                    <td>Client ID</td>
                    <td>User ID</td>
                    <td>Client Name</td>
                    <td>User Name</td>
                    <td>Description</td>
                    <td>Budget</td>
                    <td>Status</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </thead>
                @foreach($jobs as $job)
                <tr>
                    <td>{!! $job->id !!}</td>
                    <td>{!! $job->client_id !!}</td>
                    <td>{!! $job->user_id !!}</td>
                    <td>{!! $job->client->client_name !!}</td>
                    <td>{!! $job->user->name !!}</td>
                    <td>{!! $job->description !!}</td>
                    <td>{!! $job->budget !!}</td>
                    <td>{!! $job->complete !!}</td>
                    <td>{!! HTML::linkroute('jobs.edit', 'Edit', array($job->id), array('class' => 'btn btn-info')) !!}</td>
                    <td>
                        {!! Form::open(array('route' => array('jobs.destroy', $job->id), 'method' => 'delete')) !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            <h2>No Jobs Listed :({!! HTML::linkroute('jobs.create', 'Create a New Job', null, array('class' => 'btn btn-primary', 'style' => 'float:right')) !!}</h2>
            @endif
	</div>
</div>
@endsection
