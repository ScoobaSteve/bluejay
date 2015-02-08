@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="col-md-12">
                {!! Form::open(['route' => 'clients.store', 'method' => 'post', 'class' => 'form-horizontal well']) !!}
                    <div class="col-sm-12 text-center">
                        <h2 class="mainheaders">Create A New Client</h2>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::text('client_name', '', array('class' => 'form-control', 'placeholder' => 'Name')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::text('client_phone', '', array('class' => 'form-control', 'placeholder' => 'Phone Number')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::text('client_address', '', array('class' => 'form-control', 'placeholder' => 'Address')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::submit('Submit', array('class' => 'btn btn-info')) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
		</div>
	</div>
</div>
@endsection
