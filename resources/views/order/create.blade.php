@php
    $order_amount = 0;
@endphp

@extends('layouts.app')

@section('content')
    {!! Form::open([
        'action' => 'orderController@store',
        'method' => 'POST'
    ]) !!}

    <div class="form-group">
        {!! Form::label('customer_mobile', 'Your mobile NO: ') !!}
        {!! Form::text('customer_mobile', '+8801', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('order_confirm_code', 'Confirmation code: ') !!}
        {!! Form::number('order_confirm_code', '', ['class' => 'form-control', 'placeholder' => '456321']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('deliver_time', 'Delivery time: ') !!}
        {!! Form::datetimelocal('delivery_time', '', ['class' => 'form-control']) !!}        
    </div>
    <div class="form-group">
        {!! Form::label('delivery_location', 'Delivery address: ') !!}
        {!! Form::text('delivery_location', '', ['class' => 'form-control', 'placeholder' => 'College road, Lakshmipur']) !!}
    </div>
    <div class="form-group">
        <button id="gps-button" class="btn btn-primary"><i class="fas fa-map-marker-alt" style="height: 20px; width: 20px; "></i>Use my GPS location instead</button>
    </div>
    <div class="form-group">
        {!! Form::label('order_amount', 'Total payment: ') !!}
        {!! Form::number('delivery_location', '{{$order_amount}}', ['class' => 'form-control', 'disabled' => 'disabled']) !!}
    </div>

    {!! Form::hidden('latitude', '') !!}
    {!! Form::hidden('longitude', '') !!}
    {!! Form::submit('Place order', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection