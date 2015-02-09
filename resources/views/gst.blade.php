@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 well">
            <h1 class="text-center">
                GST Calculator!
            </h1><br/>
            <h2 class="text-center">
                Free too.
            </h2>
		    {!! Form::open(array('class' => 'form-horizontal')) !!}

		        <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('before', '', array('class' => 'form-control', 'placeholder' => 'Before GST', 'id' => 'before')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('after', '', array('class' => 'form-control', 'placeholder' => 'After GST', 'id' => 'after')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        {!! Form::text('gst', '', array('class' => 'form-control', 'placeholder' => 'GST', 'id' => 'gst')) !!}
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary" onclick="calcFromBefore()">Calculate From Before GST</button>

                        <button type="button" class="btn btn-primary" onclick="calcFromAfter()">Calculate From After GST</button>

                        <button type="button" class="btn btn-primary" onclick="calcFromGst()">Calculate From GST</button>

                        <button type="button" class="btn btn-primary" onclick="clearInput()">Clear</button>
                    </div>
                </div>

		    {!! Form::close() !!}

		</div>
	</div>
</div>
<script type="text/javascript">
var before;
var after;
var gst;

beforeElem = document.getElementById('before');
afterElem = document.getElementById('after');
gstElem = document.getElementById('gst');
function calcFromBefore()
{
    window.alert('calc from before gst');
    before = beforeElem.value;
    gst = parseInt(before) * 0.15;
    after = parseInt(before) + parseInt(gst);

    clearAfter();
    clearGst();

    afterElem.value = '$' + after;
    gstElem.value = '$' + gst;
}
function calcFromAfter()
{
    window.alert('calc from after gst');
    after = afterElem.value;
    gst = 3 / 23 * parseInt(after);
    before = parseInt(after) - parseInt(gst);

    clearBefore();
    clearGst();

    beforeElem.value = '$' + before;
    gstElem.value = '$' + gst;
}
function calcFromGst()
{
    window.alert('calc from gst');
    gst = gstElem.value;
    before = 20 / 3 * parseInt('gst');
    after = parseInt(before) + parseInt(gst);

    clearBefore();
    clearAfter();

    beforeElem.value = '$' + before;
    afterElem.value = '$' + after;

}
function clearInput()
{
    window.alert('clearing data');
    clearBefore();
    clearAfter();
    clearGst();
}
function clearBefore()
{
    beforeElem.value = '';
}
function clearAfter()
{
    afterElem.value = '';
}
function clearGst()
{
    gstElem.value = '';
}
</script>
@endsection
