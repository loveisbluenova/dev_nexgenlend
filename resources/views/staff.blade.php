@extends('layouts/app')

{{-- Page title --}}
@section('title')
{{$staff->first_name}} {{$staff->last_name}}
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

<link rel='stylesheet' id='shmac-frontend-css' href='../css/frontend-1.2.css' type='text/css' media='all' />
<link rel='stylesheet' id='mprogress-css' href='../css/mprogress.min-1.0.css' type='text/css' media='all' />
<link rel='stylesheet' id='shmac-custom-scrollbar-css' href='../css/jquery.mCustomScrollbar.min-3.0.9.css' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider-css' href='../css/nouislider.min-920.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpex-style-css' href='../../css/purchase.css' type='text/css' media='all' />
@stop

{{-- slider --}}
@section('top')
    <header class="page-header wpex-supports-mods">
        <div class="page-header-inner container clr">
            <h1 class="page-header-title wpex-clr"><span>{{$staff->first_name}} {{$staff->last_name}}</span></h1>
            <div class="page-subheading clr">{{$staff->job}}
                <br />NMLS#: {{$staff->NMLS}}</div>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">{{$staff->first_name}} {{$staff->last_name}}</span></span>
                </span>
                </span>
            </nav>
        </div>
    </header>
@stop

{{-- content --}}
@section('content')
    <div id="content-wrap" class="container clr">
        <div id="primary" class="content-area clr">
            <div id="content" class="site-content clr">
                <div id="single-blocks" class="wpex-clr">
                    <article class="single-staff-content entry clr" itemprop="text">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-3">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper vc_box_outline  vc_box_border_grey"><img width="139" height="140" src="../../uploads/staffs/{{$staff->pic}}" class="vc_single_image-img attachment-full" alt="" /></div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-9">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>{{$staff->profile}}</p>
                                            </div>
                                        </div>
                                        <div class="vcex-module vcex-divider vcex-divider-solid" style="margin-top:20px;margin-bottom:20px;"></div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <p>I’m here to answer any questions you might have about our products and services. Feel free to contact me using any of the following methods:</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1529594819832">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p><strong>Email: </strong>{{$staff->email}}
                                                                    <br /> <strong>Phone:</strong>{{$staff->phone}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="staff-social wpex-social-btns clr"><a href="tel:{{$staff->phone}}" class="wpex-phone-number wpex-social-btn wpex-social-btn-bordered wpex-social-border wpex-round wpex-social-color" target="_blank"><span class="fa fa-phone" aria-hidden="true"></span><span class="screen-reader-text">Phone Number</span></a><a href="mailto:{{$staff->email}}" class="wpex-email wpex-social-btn wpex-social-btn-bordered wpex-social-border wpex-round wpex-social-color"><span class="fa fa-envelope" aria-hidden="true"></span><span class="screen-reader-text">Email</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="textcenter theme-button-wrap clr"><a href="../../apply-online/index.html" class="vcex-button theme-button large align-center inline animate-on-hover"><span class="theme-button-inner">Let&#8217;s Begin</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <div class="wpex-social-share position-horizontal style-flat" data-source="https%3A%2F%2Fwww.nexgenlend.com%2F" data-url="https%3A%2F%2Fwww.nexgenlend.com%2Fstaff-member%2F{{$staff->slug}}" data-title="{{$staff->first_name}} {{$staff->last_name}}" data-image="https%3A%2F%2Fwww.nexgenlend.com%2Fwp-content%2Fuploads%2F2016%2F02%2FTerry-Robinson.jpg" data-summary="Terry%20Robinson%20has%20extensive%20entrepreneurial%20experience%20with%20start-ups%20both%20inside%20and%20outside%20of%20the%20financial%20services%20industry%2C%20including%20the%20creation%20of%20Real%20Estate%20Showcase%2C%20a%20pre-internet%20opportunity%20for%20buyers%20to" data-specs="menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600">
                        <div class="theme-heading  social-share-title"><span class="text">Share This</span></div>
                        <ul class="clr">
                            <li class="wpex-twitter"><a href="#" role="button"><span class="fa fa-twitter" aria-hidden="true"></span><span class="wpex-label">Tweet</span></a></li>
                            <li class="wpex-facebook"><a href="#" role="button"><span class="fa fa-facebook" aria-hidden="true"></span><span class="wpex-label">Share</span></a></li>
                            <li class="wpex-googleplus"><a href="#" role="button"><span class="fa fa-google-plus" aria-hidden="true"></span><span class="wpex-label">Plus one</span></a></li>
                            <li class="wpex-linkedin"><a href="#" role="button"><span class="fa fa-linkedin" aria-hidden="true"></span><span class="wpex-label">Share</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.cookie.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery.validate.min.js'></script>
    <script type='text/javascript' src='../plugins/online-mortgage-plugin-application/public/js/jquery-confirm.min-3.2.0.js'></script>
    <script type='text/javascript' src='../js/home.js'></script>
    <script type='text/javascript' src='../js/wpex.min-4.7.js'></script>
    <script type='text/javascript' src='../js/wp-embed.min.js'></script>
    <script type='text/javascript' src='../js/js_composer_front.min-5.5.2.js'></script>
    <script type='text/javascript' src='../js/wpex-social-share.min-4.7.js'></script>
    <!--page level js ends-->
@stop
