@extends('layouts/app')

{{-- Page title --}}
@section('title')
Meet Our Team
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
            <h1 class="page-header-title wpex-clr" itemprop="headline"><span>Meet Our Team</span></h1>
            <nav class="site-breadcrumbs wpex-clr hidden-phone position-absolute has-js-fix"><span class="breadcrumb-trail"><span><span><a href="/">Home</a> &raquo; <span class="breadcrumb_last">Meet Our Team</span></span>
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
                <article id="single-blocks" class="single-page-article wpex-clr">
                    <div class="single-page-content entry clr">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vcex-module vcex-staff-grid-wrap clr">
                                            <div class="wpex-row vcex-staff-grid entries wpex-clr">
                                                @foreach($staffs as $key => $staff)
                                                <div class="staff-entry span_1_of_4 textcenter col col-{{$key+1}} has-readmore post-1496 entry type-staff has-media">
                                                    <div class="staff-entry-inner entry-inner clr">
                                                        <div class="staff-entry-media entry-media wpex-clr">
                                                            <a href="/staff-member/{{$staff->slug}}" title="{{$staff->first_name}} {{$staff->last_name}}" class="staff-entry-media-link"><img src="../uploads/staffs/{{$staff->pic}}" data-no-retina width="139" height="140" /></a>
                                                        </div>
                                                        <div class="staff-entry-details entry-details wpex-clr">
                                                            <h2 class="staff-entry-title entry-title"><a href="/staff-member/{{$staff->slug}}">{{$staff->first_name}} {{$staff->last_name}}</a></h2>
                                                            <div class="staff-entry-position">{{$staff->job}}
                                                                <br />NMLS#: {{$staff->NMLS}}</div>
                                                            <div class="staff-entry-social-links wpex-clr">
                                                                <div class="staff-social wpex-social-btns clr"><a href="tel:{{$staff->phone}}" class="wpex-phone-number wpex-social-btn wpex-social-btn-bordered wpex-social-border wpex-round wpex-social-color" target="_blank"><span class="fa fa-phone" aria-hidden="true"></span><span class="screen-reader-text">Phone Number</span></a><a href="mailto:{{$staff->email}}" class="wpex-email wpex-social-btn wpex-social-btn-bordered wpex-social-border wpex-round wpex-social-color"><span class="fa fa-envelope" aria-hidden="true"></span><span class="screen-reader-text">Email</span></a></div>
                                                            </div>
                                                            <div class="staff-entry-readmore-wrap entry-readmore-wrap clr"><a href="/staff-member/{{$staff->slug}}" class="theme-button minimal-border" style="font-size:14px;">SEE PROFILE</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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
    <!--page level js ends-->
@stop
