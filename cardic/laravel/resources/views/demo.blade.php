@extends('layouts.master')
@section('SpecificStyles')
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styling.css') }}">
    
@stop

@section('title', 'Home')

@section('content')
<div class="accordion">
  <ul>
    <li tabindex="1">
      <div>
        <a href="{{ route('warrantiesandPolicies') }}">
          <h2>WARRANTIES AND POLICIES</h2>
       </a>
      </div>
    </li>
    <li tabindex="2">
      <div>
        <a href="{{ route('InstrumentsCare') }}">
          <h2>INSTRUMENTS CARE</h2>
        </a>
      </div>
    </li>
    <li tabindex="3">
      <div>
        <a href="{{ route('catlogue') }}">
          <h2>CATLOGUES</h2>
        </a>
      </div>
    </li>
    <li tabindex="4">
      <div>
        <a href="{{ route('career') }}">
          <h2>CAREER</h2>
        </a>
      </div>
    </li>
    <li tabindex="5">
      <div>
        <a href="{{ route('new_arrival') }}">
          <h2>NEW ARRIVALS</h2>
        </a>
      </div>
    </li>
  </ul>
</div>   

@endsection

@section('SpecificScripts')

@stop
