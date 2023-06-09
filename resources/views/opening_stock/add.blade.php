@extends('layouts.app')
@section('title', __('product.add_opening_stock'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('product.add_opening_stock')</h1>
</section>

<!-- Main content -->
<section class="content">
	{!! Form::open(['url' => action('OpeningStockController@save'), 'method' => 'post', 'id' => 'add_opening_stock_form' ]) !!}
	{!! Form::hidden('product_id', $product->id); !!}
	@include('opening_stock.form-part')
	<div class="row">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary pull-right">@lang('messages.save')</button>
		</div>
	</div>

	{!! Form::close() !!}
</section>
@stop
@section('javascript')
	<script src="{{ asset('js/opening_stock.js?v=' . $asset_v) }}"></script>
	<script type="text/javascript">
		$(document).ready( function(){
			$('.os_date').datetimepicker({
		        format: moment_date_format + ' ' + moment_time_format,
		        ignoreReadonly: true,
		        widgetPositioning: {
		            horizontal: 'right',
		            vertical: 'bottom'
		        }
		    });
		});
	</script>
@endsection
