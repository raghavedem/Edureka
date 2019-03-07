@extends('client.app')

@section('css')
@endsection
@section('top_js')
 <script type="text/javascript">
            jQuery(document).ready(function() {
                // CUSTOM AJAX CONTENT LOADING FUNCTION
                var ajaxRevslider = function(obj) {
                
                    // obj.type : Post Type
                    // obj.id : ID of Content to Load
                    // obj.aspectratio : The Aspect Ratio of the Container / Media
                    // obj.selector : The Container Selector where the Content of Ajax will be injected. It is done via the Essential Grid on Return of Content
                    
                    var content = "";

                    data = {};
                    
                    data.action = 'revslider_ajax_call_front';
                    data.client_action = 'get_slider_html';
                    data.token = '13d1deba69';
                    data.type = obj.type;
                    data.id = obj.id;
                    data.aspectratio = obj.aspectratio;
                    
                    // SYNC AJAX REQUEST
                    jQuery.ajax({
                        type:"post",
                        url:"http://eurekatoyandgift.com/wp-admin/admin-ajax.php",
                        dataType: 'json',
                        data:data,
                        async:false,
                        success: function(ret, textStatus, XMLHttpRequest) {
                            if(ret.success == true)
                                content = ret.data;                             
                        },
                        error: function(e) {
                            console.log(e);
                        }
                    });
                    
                     // FIRST RETURN THE CONTENT WHEN IT IS LOADED !!
                     return content;                         
                };
                
                // CUSTOM AJAX FUNCTION TO REMOVE THE SLIDER
                var ajaxRemoveRevslider = function(obj) {
                    return jQuery(obj.selector+" .rev_slider").revkill();
                };

                // EXTEND THE AJAX CONTENT LOADING TYPES WITH TYPE AND FUNCTION
                var extendessential = setInterval(function() {
                    if (jQuery.fn.tpessential != undefined) {
                        clearInterval(extendessential);
                        if(typeof(jQuery.fn.tpessential.defaults) !== 'undefined') {
                            jQuery.fn.tpessential.defaults.ajaxTypes.push({type:"revslider",func:ajaxRevslider,killfunc:ajaxRemoveRevslider,openAnimationSpeed:0.3});   
                            // type:  Name of the Post to load via Ajax into the Essential Grid Ajax Container
                            // func: the Function Name which is Called once the Item with the Post Type has been clicked
                            // killfunc: function to kill in case the Ajax Window going to be removed (before Remove function !
                            // openAnimationSpeed: how quick the Ajax Content window should be animated (default is 0.3)
                        }
                    }
                },30);
            });
        </script>
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}





    <!-- MAIN -->
    <div class="l-main">
                <div class="l-submain wpb_row"><div class="l-submain-h g-html i-cf"><div class="g-cols wpb_row offset_default"><div class="full-width"><div class="wpb_revslider_element wpb_content_element">
<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#fff;padding:0px;margin-top:-30px;margin-bottom:0px;max-height:370px;">
<!-- START REVOLUTION SLIDER 4.6.9 fullwidth mode -->
    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:370px;height:370px;">
<ul>    <!-- SLIDE  -->
    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="assets/uploads/2018/11/1.jpg"  alt="1"  data-bgposition="center top" data-bgfit="100% 100%" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li>
    <!-- SLIDE  -->
    <li data-transition="random" data-slotamount="7"  data-saveperformance="off" >
        <!-- MAIN IMAGE -->
        <img src="assets/uploads/2018/11/2.jpg"  alt="2"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->
    </li>

</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
<style type="text/css">
    #rev_slider_2_1_wrapper .tp-loader.spinner2{ background-color: #FFFFFF !important; }
</style>
</div><!-- END REVOLUTION SLIDER --></div></div></div><!-- Row Backgrounds --><div class="upb_no_bg" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false"  data-custom-vc-row=""  data-vc="4.5"  data-theme-support=""    ></div><div class="g-cols wpb_row offset_default  vc_custom_1446469585283"><div class="one-third animate_afl"><div class="w-iconbox iconpos_left size_medium type_solid color_custom">
                        <span class="w-iconbox-nolink">
                        <div class="w-iconbox-icon" style="background-color: #dd8080; box-shadow: 0 0 0 2px #dd8080 inset; color: #ffffff;">
                            <i class="fa fa-html5"></i> </div><h4 class="w-iconbox-title">Commitment to service</h4></span><div class="w-iconbox-text">
                            <p>Our commitment to your company involves maintaining a focused total line representation to our customers and to deliver a creative and aggressive approach to every selling situation.</p>
</p>
                        </div></div><div class="g-hr type_invisible">
                        <span class="g-hr-h">
                            <i class="fa fa-star"></i>
                        </span>
                    </div></div><div class="one-third animate_afb"><div class="w-iconbox iconpos_left size_medium type_solid color_custom">
                        <span class="w-iconbox-nolink">
                        <div class="w-iconbox-icon" style="background-color: #70abc9; box-shadow: 0 0 0 2px #70abc9 inset; color: #ffffff;">
                            <i class="fa fa-thumbs-o-up"></i>   </div><h4 class="w-iconbox-title">Focus on Communication</h4></span><div class="w-iconbox-text">
                            <p>Your sales will be maximized through immediate communication of market changes, promotional opportunities and trends. At Eureka! Toy &amp; Gift, we believe in an up front and honest environment of “No Surprises” . As soon as we know…..you will know.</p>
</p>
                        </div></div><div class="g-hr type_invisible">
                        <span class="g-hr-h">
                            <i class="fa fa-star"></i>
                        </span>
                    </div></div><div class="one-third animate_afr"><div class="w-iconbox iconpos_left size_medium type_solid color_custom">
                        <span class="w-iconbox-nolink">
                        <div class="w-iconbox-icon" style="background-color: #a1d67c; box-shadow: 0 0 0 2px #a1d67c inset; color: #ffffff;">
                            <i class="fa fa-tablet"></i>    </div><h4 class="w-iconbox-title">Professional Follow up</h4></span><div class="w-iconbox-text">
                            <p>In today’s competitive environment, the difference between winning and losing can often be found in the attention to details. Our experience on “both sides of the selling fence (retail and factory), has trained us to maintain strict attention to all details of your business. In short, your business will receive the professional follow up and follow through needed to be successful.</p>
</p>
                        </div></div><div class="g-hr type_invisible">
                        <span class="g-hr-h">
                            <i class="fa fa-star"></i>
                        </span>
                    </div></div></div><!-- Row Backgrounds --><div class="upb_no_bg" data-fadeout="" data-fadeout-percentage="30" data-parallax-content="" data-parallax-content-sense="30" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false"  data-custom-vc-row=""  data-vc="4.5"  data-theme-support=""    ></div><div class="g-cols wpb_row offset_default"><div class="full-width">
    <div class="wpb_text_column ">
        <div class="wpb_wrapper">
            <p>

        </div> 
    </div> </div></div><!-- Row Backgrounds --><div class="upb_no_bg" data-fadeout="" data-fadeout-percentage="" data-parallax-content="" data-parallax-content-sense="" data-row-effect-mobile-disable="true" data-img-parallax-mobile-disable="false" data-rtl="false"  data-custom-vc-row=""  data-vc="4.5"  data-theme-support=""    ></div>
</div></div>        </div>
<!-- /MAIN -->

</div>
<!-- /CANVAS -->

@endsection

