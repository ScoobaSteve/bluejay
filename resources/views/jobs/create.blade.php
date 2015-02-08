@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="col-md-12">
                {!! Form::open(['route' => 'jobs.store', 'method' => 'post', 'class' => 'form-horizontal well']) !!}
                    <div class="col-sm-12 text-center">
                        <h2 class="mainheaders">Create A New Job</h2>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::textarea('description', '', array('class' => 'form-control', 'placeholder' => 'Description of Job')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::text('budget', '', array('class' => 'form-control', 'placeholder' => 'Budget')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                        {!! Form::select('client', $clients, null, array('class' => 'form-control'))
                        !!}
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
