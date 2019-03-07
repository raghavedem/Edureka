@extends('client.app') @section('css')
<style type="text/css"></style>
@endsection @section('content')

<div class="l-main">
  <div class="l-submain for_pagehead color_secondary size_large">
    <div class="l-submain-h g-html i-cf">
      <div class="w-pagehead">
        <h1>About Eureka Toy &amp; Gift</h1>
      </div>
    </div>
  </div>
  <div class="l-submain wpb_row">
    <div class="l-submain-h g-html i-cf">
      <div class="g-cols wpb_row offset_default">
          	@foreach($about_details as $about)
        <div class="full-width">
          <div class="g-cols wpb_row offset_default">
            <div class="full-width">
              <div
                id="ultimate-heading5c7023839c430"
                class="uvc-heading uvc-7546 "
                data-hspacer="no_spacer"
                data-halign="left"
                style="text-align:left"
              >
                <div
                  class="uvc-main-heading ult-responsive"
                  data-ultimate-target="#ultimate-heading5c7023839c430 h4"
                  data-responsive-json-new='{"font-size":"","line-height":""}'
                >
                  <h4
                    style="font-weight:normal;color:#273790;margin-bottom:20px;"
                  >
                    {{$about->title}}
                  </h4>
                </div>
                <div
                  class="uvc-sub-heading ult-responsive"
                  data-ultimate-target="#ultimate-heading5c7023839c430 .uvc-sub-heading "
                  data-responsive-json-new='{"font-size":"","line-height":""}'
                  style="font-weight:normal;"
                ></div>
                <div class="uvc-heading-spacer no_spacer" style=""></div>
              </div>
              <div class="wpb_text_column ">
                <div class="wpb_wrapper">
                  <p style="text-align: justify;">
                    {{$about->body}}
                  </p>
                </div>
              </div>   
            </div>
          </div>
        </div>
            @endforeach
      </div>
      <!-- Row Backgrounds -->
      <div
        class="upb_no_bg"
        data-fadeout=""
        data-fadeout-percentage="30"
        data-parallax-content=""
        data-parallax-content-sense="30"
        data-row-effect-mobile-disable="true"
        data-img-parallax-mobile-disable="false"
        data-rtl="false"
        data-custom-vc-row=""
        data-vc="4.5"
        data-theme-support=""
      ></div>
      <div class="g-cols wpb_row offset_default">
        <div class="full-width">
          <div class="wpb_text_column ">
            <div class="wpb_wrapper">
              <p></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row Backgrounds -->
      <div
        class="upb_no_bg"
        data-fadeout=""
        data-fadeout-percentage=""
        data-parallax-content=""
        data-parallax-content-sense=""
        data-row-effect-mobile-disable="true"
        data-img-parallax-mobile-disable="false"
        data-rtl="false"
        data-custom-vc-row=""
        data-vc="4.5"
        data-theme-support=""
      ></div>
    </div>
  </div>
</div>

@endsection
