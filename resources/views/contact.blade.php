@extends('client.app') 
@section('css')
<style type="text/css"></style>
@endsection
@section('content')

<div class="l-main">
  <div class="l-submain for_pagehead color_secondary size_large">
    <div class="l-submain-h g-html i-cf">
      <div class="w-pagehead">
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
  <div class="l-submain wpb_row">
    <div class="l-submain-h g-html i-cf">
      <div class="g-cols wpb_row offset_default">
        <div class="one-half">
          <div class="wpb_text_column ">
            <div class="wpb_wrapper">
              <h4>Contact Info</h4>
            </div>
          </div>
          <div class="w-contacts">
            <div class="w-contacts-h">
              <div class="w-contacts-list">
                <div class="w-contacts-item">
                  <i class="fa fa-map-marker"></i>
                  <span class="w-contacts-item-value">
                    {{$contact_info->location}}
                  </span>
                </div>
                <div class="w-contacts-item">
                  <i class="fa fa-phone"></i>
                  <span
                    class="w-contacts-item-value"
                    >{{$contact_info->phone_number}}</span
                  >
                </div>
                <div class="w-contacts-item">
                  <i class="fa fa-print"></i>
                  <span
                    class="w-contacts-item-value"
                    >{{$contact_info->fax}}</span
                  >
                </div>
                <div class="w-contacts-item">
                  <i class="fa fa-envelope"></i>
                  <span class="w-contacts-item-value"
                    ><a
                      href="mailto:{{$contact_info->email}}"
                      >{{$contact_info->email}}</a
                    ></span
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="g-hr type_invisible">
            <span class="g-hr-h">
              <i class="fa fa-star"></i>
            </span>
          </div>
           @foreach($contact_details as $details)
          <div class="g-cols wpb_row offset_default  vc_custom_1451655061464">
            <div class="full-width">
              <div class="wpb_text_column ">
                <div class="wpb_wrapper">
                  <h3>{{$details->name}}</h3>
                  <p>
                    {{$details->designation}}<br />
                    Email : {{$details->email}}<br />
                    Phone : {{$details->phone_number}} / Fax: {{$details->fax}}
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach 
        </div>
        <div class="one-half">
          <div
            id="ultimate-heading5c7024009e1f5"
            class="uvc-heading uvc-8566 "
            data-hspacer="no_spacer"
            data-halign="left"
            style="text-align:left"
          >
            <div class="uvc-heading-spacer no_spacer" style=""></div>
            <div
              class="uvc-main-heading ult-responsive"
              data-ultimate-target="#ultimate-heading5c7024009e1f5 h4"
              data-responsive-json-new='{"font-size":"","line-height":""}'
            >
              <h4 style="font-weight:normal;margin-bottom:30px;">
                Send us a Message
              </h4>
            </div>
            <div
              class="uvc-sub-heading ult-responsive"
              data-ultimate-target="#ultimate-heading5c7024009e1f5 .uvc-sub-heading "
              data-responsive-json-new='{"font-size":"","line-height":""}'
              style="font-weight:normal;"
            ></div>
          </div>
          <div class="w-form align_left">
            <form
              action=""
              method="post"
              id="contact_form"
              class="contact_form"
            >
              <input type="hidden" name="post_id" value="1437" />
              <div class="w-form-row" id="name_row">
                <div class="w-form-label">
                  <label for="name">Your name *</label>
                </div>
                <div class="w-form-field">
                  <input
                    id="name"
                    type="text"
                    name="name"
                    data-required="1"
                    placeholder="Your name *"
                  />
                  <i class="fa fa-user"></i>
                </div>
                <div class="w-form-state" id="name_state"></div>
              </div>
              <div class="w-form-row" id="email_row">
                <div class="w-form-label">
                  <label for="email">Email *</label>
                </div>
                <div class="w-form-field">
                  <input
                    id="email"
                    type="email"
                    name="email"
                    data-required="1"
                    placeholder="Email *"
                  />
                  <i class="fa fa-envelope"></i>
                </div>
                <div class="w-form-state" id="email_state"></div>
              </div>
              <div class="w-form-row" id="phone_row">
                <div class="w-form-label">
                  <label for="phone">Phone Number</label>
                </div>
                <div class="w-form-field">
                  <input
                    id="phone"
                    type="text"
                    name="phone"
                    data-required="0"
                    placeholder="Phone Number"
                  />
                  <i class="fa fa-phone"></i>
                </div>
                <div class="w-form-state" id="phone_state"></div>
              </div>
              <div class="w-form-row" id="message_row">
                <div class="w-form-label">
                  <label for="message">Message *</label>
                </div>
                <div class="w-form-field">
                  <textarea
                    id="message"
                    name="message"
                    cols="30"
                    rows="10"
                    data-required="1"
                    placeholder="Message *"
                  ></textarea>
                  <i class="fa fa-pencil"></i>
                </div>
                <div class="w-form-state" id="message_state"></div>
              </div>
              <div class="w-form-row" id="captcha_row">
                <div class="w-form-label">
                  <label for="contact_captcha"
                    >Just to prove you are a human, please solve the equation:
                    18 - 14</label
                  >
                </div>
                <div class="w-form-field">
                  <input
                    type="hidden"
                    name="captcha_result"
                    value="417d6856659642b3770327fb3abd6642"
                  />
                  <input type="text" name="captcha" value="" />
                </div>
                <div class="w-form-state" id="captcha_state"></div>
              </div>
              <div class="w-form-row for_submit">
                <div class="w-form-field">
                  <button
                    class="g-btn  color_primary outlined"
                    id="message_send"
                  >
                    <i class="fa fa-spinner fa-spin"></i
                    ><span>Send Message</span>
                  </button>
                  <div class="w-form-field-success"></div>
                </div>
              </div>
            </form>
          </div>
          <div class="wpb_text_column ">
            <div class="wpb_wrapper">
              <p>
                <span style="color: #ffffff;"
                  ><em
                    ><span style="color: #000000;"
                      >We&nbsp;will&nbsp;contact&nbsp;you&nbsp;within&nbsp;1-2&nbsp;business&nbsp;days..!!</span
                    ></em
                  ></span
                >
              </p>
            </div>
          </div>
          <script type="text/javascript">
            jQuery(document).ready(function() {
              jQuery("#map_867858").gMap({
                latitude: "32.803707",
                longitude: "-96.824516",
                zoom: 15,
                maptype: "ROADMAP",
                markers: [
                  {
                    latitude: "32.803707",
                    longitude: "-96.824516",
                    html: "Eureka! Toy &amp; Gift"
                  }
                ]
              });
            });
          </script>
        </div>
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
    </div>
  </div>
</div>

@endsection
