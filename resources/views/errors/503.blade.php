@extends('layouts.app')

@section('content')
<div id="content">
    <h1>< {{ __('Sorry, we\'re down for maintenance.') }} /></h1>
    <p>{{ __('Thanks for your patience. We\'ll be back up shortly.') }}</p>
</div>
<div id="outer-crane-container">
    <div class="buildings">
        <div></div>
        <div class="1"></div>
        <div class="2"></div>
        <div class="3"></div>
        <div class="4"></div>
    </div>
    <div class="crane crane-three">
        <div class="line line-one"></div>
        <div class="line line-two"></div>
        <div class="line line-three"></div>
        <div class="stand"></div>
        <div class="weight"></div>
        <div class="cabin"></div>
        <div class="arm"></div>
    </div>
    <div class="crane crane-two">
        <div class="line line-one"></div>
        <div class="line line-two"></div>
        <div class="line line-three"></div>
        <div class="stand"></div>
        <div class="weight"></div>
        <div class="cabin"></div>
        <div class="arm"></div>
    </div>
    <div class="crane crane-one">
        <div class="line line-one"></div>
        <div class="line line-two"></div>
        <div class="line line-three"></div>
        <div class="stand"></div>
        <div class="weight"></div>
        <div class="cabin"></div>
        <div class="arm"></div>
    </div>
</div>
@endsection
