@extends('client.app') 
@section('css')
<style type="text/css">
  .vc_custom_1448886049591 {
    margin-bottom: 30px !important;
  }
  .vc_custom_1448886063332 {
    margin-bottom: 30px !important;
  }
  .vc_custom_1448886076793 {
    margin-bottom: 30px !important;
  }
</style>
@endsection
@section('content')

<div class="l-main">
  <div class="l-submain for_pagehead color_secondary size_large">
    <div class="l-submain-h g-html i-cf">
      <div class="w-pagehead">
        <h1>Our Reps</h1>
      </div>
    </div>
  </div>
  <div class="l-submain wpb_row">
    <div class="l-submain-h g-html i-cf">
      	@foreach($reps as $rep)
      <div class="g-cols wpb_row offset_default  vc_custom_1448886049591">
        <div class="full-width">
          <div class="w-actionbox color_primary controls_aside">
            <div class="w-actionbox-text">
              <h3>
                <p></p>
                <p></p>
                <center>
                  {{$rep->name}} – {{$rep->designation}}
                </center>
              </h3>
              <p></p>
              <p></p>
              <center>
                {{$rep->description}}.
                <br />
                @isset($rep->email)
                email: {{$rep->email}}
                @endisset
                <br />
                @isset($rep->phone_number)
                Phone : {{$rep->phone_number}} 
                /
                @endisset
                @isset($rep->fax)
                Fax: {{$rep->fax}}
                @endisset
              </center>
              <p></p>
            </div>
            <div class="w-actionbox-controls"></div>
          </div>
        </div>
      </div>
        @endforeach
    </div>
  </div>
</div>

@endsection
