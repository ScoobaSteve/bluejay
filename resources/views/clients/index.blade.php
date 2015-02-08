@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 well">
            @if ($clients->count())
            <h2>The Client List{!! HTML::linkroute('clients.create', 'Create New Client', null, array('class' => 'btn btn-primary', 'style' => 'float:right')) !!}</h2>
            <table class="table table-striped">
                <thead>
                    <td>Client ID</td>
                    <td>Name</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>Created By</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </thead>
                @foreach($clients as $client)
                <tr>
                    <td>{!! $client->id !!}</td>
                    <td>{!! $client->client_name !!}</td>
                    <td>{!! $client->client_phone !!}</td>
                    <td>{!! $client->client_address !!}</td>
                    <td>{!! $client->user->name !!}</td>
                    <td>{!! HTML::linkroute('clients.edit', 'Edit', array($client->id), array('class' => 'btn btn-info')) !!}</td>
                    <td>
                        {!! Form::open(array('route' => array('clients.destroy', $client->id), 'method' => 'delete')) !!}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        {!! Form::close() !!}
                    </td>

                </tr>
                @endforeach
            </table>
            @else
            <h2>No Clients :({!! HTML::linkroute('clients.create', 'Create New Client', null, array('class' => 'btn btn-primary', 'style' => 'float:right')) !!}</h2>
            @endif
		</div>
	</div>
</div>
@endsection
