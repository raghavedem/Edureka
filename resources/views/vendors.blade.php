@extends('client.app')
@section('css') 
@endsection 
@section('content')
<div class="l-main">
  <div class="l-submain for_pagehead color_secondary size_large">
    <div class="l-submain-h g-html i-cf">
      <div class="w-pagehead">
        <h1>Vendors</h1>
        <!-- breadcrums -->
        <div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
          <span typeof="v:Breadcrumb"
            ><a
              class="g-breadcrumbs-item"
              rel="v:url"
              property="v:title"
              href="http://eurekatoyandgift.com/"
              >Home</a
            ></span
          >
          <span class="g-breadcrumbs-separator"
            ><i class="fa fa-angle-right"></i
          ></span>
          <span class="g-breadcrumbs-item">Vendors</span>
        </div>
      </div>
    </div>
  </div>
  <div class="l-submain wpb_row">
    <div class="l-submain-h g-html i-cf">
    	@foreach($vendors as $vendor)
      <div class="g-cols wpb_row offset_default">
        <div class="full-width">
          <div class="wpb_text_column ">
            <div class="wpb_wrapper">
              <h1>{{$vendor->title}}</h1>
              <p>
                <a
                  ref="magnificPopup"
                  href="assets/uploads/2017/02/Be-Amazing.png"
                  ><img
                    class="size-medium wp-image-4565 alignleft"
                    src="assets/uploads/2017/02/{{$vendor->image_url}}"
                    alt="Be Amazing"
                    width="232"
                    height="300"
                /></a>
              </p>
              <p>
                @isset($vendor->description)
                {{$vendor->description}}
                @endisset
              </p>
              <p>
                <a
                  href="{{$vendor->pdf_link}}"
                  target="_blank"
                  >[Click here to view New Product-Announcement-Flyer pdf]</a
                >
              </p>
              @if($vendor->pdf_link1)
              <p>
                <a
                  href="{{$vendor->pdf_link1}}"
                  target="_blank"
                  >[Click here to view Toys Catalog Small pdf]</a
                >
              </p>
              @endif
              <p>Once open in new tab please press “Ctrl+s” to save catalog.</p>
            </div>
          </div>
          @isset($vendor->term_title)
          <div class="w-actionbox color_primary controls_aside">
            <div class="w-actionbox-text">
              <h3>{{$vendor->term_title}}</h3>
              <p>
                {{$vendor->term_content}}
              </p>
            </div>
            <div class="w-actionbox-controls"></div>
          </div>
          @endisset
          <div class="g-hr size_big no_icon">
            <span class="g-hr-h">
              <i class="fa fa-"></i>
            </span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
