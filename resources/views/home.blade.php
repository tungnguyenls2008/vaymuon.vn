@extends('layouts.master')
@section('content')
    @include('partials.home.banner_top')
    @include('partials.home.operate_model')
    @include('partials.how_to')
    @include('partials.stories')
    @include('partials.home.mobile_app_install')
    @include('partials.home.press')
    @include('partials.support_box')
    <script>
        $(document).ready(function(){

            $('#cb-detail-slide').owlCarousel({
                loop:true,
                margin:30,
                nav:true,
                navText:false,
                dots:false,
                autoplay:false,
                autoHeight:false,
                autoplayTimeout:3200,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    320:{
                        items:1
                    },
                    360:{
                        items:1
                    },
                    480:{
                        items:1
                    },
                    533:{
                        items:1
                    },
                    640:{
                        items:2
                    },
                    676:{
                        items:2
                    },
                    1199:{
                        items:3
                    }
                }
            });
            $('a[href*=#]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
            });
            $('#slide-step').owlCarousel({
                loop:true,
                margin:30,
                nav:true,
                navText:false,
                dots:false,
                autoplay:false,
                autoHeight:false,
                autoplayTimeout:3200,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    320:{
                        items:1
                    },
                    360:{
                        items:1
                    },
                    480:{
                        items:2
                    },
                    533:{
                        items:2
                    },
                    640:{
                        items:3
                    },
                    676:{
                        items:3
                    },
                    1199:{
                        items:4
                    }
                }
            });
//support click
            $('.support-small').click(function(){
                $(this).hide();
                $('.support-full').show();
            });
            $('.close-support').click(function(){
                $('.support-small').show();
                $('.support-full').hide();
            });
            $('.wap-close').click(function(){
                $('.wap-ovelay').hide();
            });

        });


    </script>
@stop
