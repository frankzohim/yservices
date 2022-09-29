@extends('layouts.master')
@section('title', __('Service Modèle'))

@section('content')
<style>

	.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl,.container-xxl{padding-right:15px;padding-left:15px}
.row{margin-right:-15px;margin-left:-15px}.row>*{padding-right:15px;padding-left:15px}.row.g-0{margin-right:0;margin-left:0}.row.g-0>*{padding-right:0;padding-left:0}header [class^=container-] [class*=" col-"],header [class^=container-] [class^=col-]{position:relative;padding-left:15px;padding-right:15px}@media (prefers-reduced-motion:no-preference){:root{scroll-behavior:auto}}
.alt-font{font-family:Poppins,sans-serif}
.main-font{font-family:Roboto,sans-serif!important}h1,h2,h3,h4,h5,h6{margin:0 0 25px 0;padding:0;letter-spacing:-.5px;font-weight:inherit}h1{font-size:5rem;line-height:5rem}h2{font-size:3.9rem;line-height:4.2rem}h3{font-size:3.4rem;line-height:3.9rem}h4{font-size:2.85rem;line-height:3.4rem}h5{font-size:2.3rem;line-height:3rem}h6{font-size:1.8rem;line-height:2.5rem}
.content-wrap{position:relative;padding:80px 0;overflow:hidden; background-color: white;}
	.blog-content,.blog-right-side-bar .blog-sidebar{float:right}
.blog-left-side-bar .blog-sidebar,.blog-right-side-bar 
.blog-content{float:left}
.aside-title{position:absolute;top:0;left:0;right:0;transform:translateY(-50%)}.aside-title span{padding:2px 20px}
.blog-left-side-bar .blog-content,.blog-right-side-bar .blog-sidebar,.shopping-left-side-bar .shopping-content,.shopping-right-side-bar .shopping-sidebar{order:13;-ms-flex-order:13}
.blog-left-side-bar .blog-sidebar,.blog-right-side-bar .blog-content,.shopping-left-side-bar .shopping-sidebar,.shopping-right-side-bar .shopping-content{order:1;-ms-flex-order:1}
.margin-2-rem-bottom{margin-bottom:2rem}

.last-paragraph-no-margin p:last-of-type{margin-bottom:0}dl,ol,ul{list-style-position:outside;margin-bottom:25px}ul{margin:0;padding:0}input,select,textarea{border:1px solid #dfdfdf;padding:10px 15px;width:100%;margin:0 0 15px 0;max-width:100%;resize:none;outline:0;color:#828282;line-height:initial;word-break:initial}select{background-image:url(../images/down-arrow.png);background-position:right 14px center;background-repeat:no-repeat;background-size:10px;border-radius:0;-webkit-appearance:none;-moz-appearance:none;appearance:none;cursor:pointer}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=submit]{width:auto}input[type=button],input[type=email],input[type=password],input[type=search],input[type=submit],input[type=tel],input[type=text],textarea{-webkit-appearance:none}input:focus,textarea:focus{border:1px solid #b9b9b9;outline:0}input[type=submit]:focus{outline:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;-moz-appearance:none;appearance:none;margin:0}input::-ms-clear{display:none}input:-webkit-autofill,input:-webkit-autofill:active,input:-webkit-autofill:focus,input:-webkit-autofill:hover,select:-webkit-autofill,select:-webkit-autofill:active,select:-webkit-autofill:focus,select:-webkit-autofill:hover{transition:background-color 5000s;transition:all 0s 50000s;-webkit-animation-name:autofill;-webkit-animation-fill-mode:both}select::-ms-expand{display:none}iframe{border:0}button,button:focus,button:hover{outline:0}
.alt-font{font-family:Poppins,sans-serif}
.alt-font strong{font-weight:600}
.margin-4-half-rem-bottom{margin-bottom:4.5rem}
.w-100{width:100%}
.border-radius-6px{border-radius:6px}
.border-width-4px{border-width:4px!important}
.border-color-fast-blue{border-color:#0038e3!important}
.margin-60px-left{margin-left:60px}
.margin-5-half-rem-tb{margin-top:5.5rem;margin-bottom:5.5rem}
.first-letter{float:left;font-size:50px;line-height:normal;margin:0 20px 0 0;text-align:center;padding:10px 0;font-weight:600}
.first-letter-big{float:left;font-size:100px;line-height:100px;margin:0 35px 0 0;padding:0 8px;text-align:center;font-weight:600;position:relative}
.first-letter-big:before{position:absolute;border-bottom:1px solid;content:"";display:block;width:100%;top:55%;left:0}
.first-letter-block{font-size:30px;height:55px;line-height:25px;padding:15px 0;width:55px;font-weight:500;margin-top:5px}
.first-letter-block-round{border-radius:6px;border:1px solid}
.first-letter-round{border-radius:50%;font-size:35px;padding:15px;width:65px;height:65px;line-height:35px}
.padding-15px-tb{padding-top:15px;padding-bottom:15px}
.margin-20px-bottom{margin-bottom:20px}
a.likes-count{width:auto;border:1px solid #e4e4e4;font-size:12px;border-radius:4px;padding:5px 18px 6px;line-height:20px;margin:0 0 10px 0;display:inline-block}
a.likes-count i{margin-right:8px;color:#fa5c47}
a.likes-count:hover{box-shadow:0 0 10px rgba(23,23,23,.1);color:#232323}
.tag-cloud a{display:inline-block;text-align:center;font-size:13px;line-height:20px;margin:0 6px 10px 0;padding:5px 18px 6px;border-radius:4px;border:1px solid #e4e4e4}
.tag-cloud a.active,.tag-cloud a:hover{box-shadow:0 0 10px rgba(23,23,23,.1);color:#828282}

.social-icon-style-09 a{text-align:center;display:inline-block;border-radius:100%;color:#232323;position:relative;text-align:center}
.social-icon-style-09 a:hover{color:#fff}
.social-icon-style-09 a:after{content:'';display:block;position:absolute;top:0;left:0;height:100%;width:100%;-webkit-transform:scale(.8);-moz-transform:scale(.8);-ms-transform:scale(.8);-o-transform:scale(.8);transform:scale(.8);border:1px solid;border-radius:100%;opacity:0;-webkit-transition:all .5s cubic-bezier(0,0,.2,1);transition:all .5s cubic-bezier(0,0,.2,1)}
.social-icon-style-09 a:hover:after{opacity:.4;-webkit-transform:scale(1.3);-moz-transform:scale(1.3);-ms-transform:scale(1.3);-o-transform:scale(1.3);transform:scale(1.3)}
.social-icon-style-09 a.facebook:after{border-color:#3b5998;color:#3b5998}
.social-icon-style-09 a.twitter:after{border-color:#00aced;color:#00aced}
.social-icon-style-09 a.google:after{border-color:#dc4a38;color:#dc4a38}
.social-icon-style-09 a.dribbble:after{border-color:#ea4c89;color:#ea4c89}
.social-icon-style-09 a.youtube:after{border-color:#b00;color:#b00}
.social-icon-style-09 a.linkedin:after{border-color:#0077b5;color:#0077b5}
.social-icon-style-09 a.instagram:after{border-color:#fe1f49;color:#fe1f49}
.social-icon-style-09 a.pinterest:after{border-color:#cb2027;color:#cb2027}
.social-icon-style-09 a.flickr:after{border-color:#ff0084;color:#ff0084}
.social-icon-style-09 a.rss:after{border-color:#f2890a;color:#f2890a}
.social-icon-style-09 a.behance:after{border-color:#1769ff;color:#1769ff}
.social-icon-style-09 a.vine:after{border-color:#00bf8f;color:#00bf8f}
.social-icon-style-09 a.email:after{border-color:#7d7d7d;color:#7d7d7d}
.social-icon-style-09 a.sms:after{border-color:#ffbd00;color:#ffbd00}
.social-icon-style-09 a.sharethis:after{border-color:#95d03a;color:#95d03a}
.social-icon-style-09 a.reddit:after{border-color:#ff4500;color:#ff4500}
.social-icon-style-09 a.tumblr:after{border-color:#32506d;color:#32506d}
.social-icon-style-09 a.digg:after{border-color:#262626;color:#262626}
.social-icon-style-09 a.stumbleupon:after{border-color:#eb4924;color:#eb4924}
.social-icon-style-09 a.whatsapp:after{border-color:#25d366;color:#25d366}
.social-icon-style-09 a.vk:after{border-color:#4c6c91;color:#4c6c91}
.social-icon-style-09 a.weibo:after{border-color:#f93;color:#f93}
.social-icon-style-09 a.odnoklassniki:after{border-color:#d7772d;color:#d7772d}
.social-icon-style-09 a.xing:after{border-color:#1a7576;color:#1a7576}
.social-icon-style-09 a.print:after{border-color:#222;color:#222}
.social-icon-style-09 a.blogger:after{border-color:#ff8000;color:#ff8000}
.social-icon-style-09 a.flipboard:after{border-color:#e12828;color:#e12828}
.social-icon-style-09 a.meneame:after{border-color:#ff6400;color:#ff6400}
.social-icon-style-09 a.mailru:after{border-color:#168de2;color:#168de2}
.social-icon-style-09 a.delicious:after{border-color:#205cc0;color:#205cc0}
.social-icon-style-09 a.livejournal:after{border-color:#00b0ea;color:#00b0ea}
.text-fast-blue,a.text-fast-blue-hover:hover{color:#0038e3}
.margin-10px-right{margin-right:10px}
.margin-25px-right{margin-right:25px}
</style>
<section class="main-intro-all">

	  	<!-- start blog content section --> 
        <section class="blog-right-side-bar content-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom">
                        <div class="row">
                            <div class="col-12 blog-details-text last-paragraph-no-margin margin-6-rem-bottom">
                                <ul class="list-unstyled margin-2-rem-bottom">
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="fa fa-calendar text-fast-blue margin-10px-right"></i>
																			<a href="#" style="color: #0038e3">09 Août 2020</a></li>
                                    <li class="d-inline-block align-middle margin-25px-right"><i class="fa fa-folder text-fast-blue margin-10px-right"></i>
																			<a href="#" style="color: #0038e3">Aide au lever</a></li>
                                    <li class="d-inline-block align-middle"><i class="fa fa-user text-fast-blue margin-10px-right"></i>By 
																			<a href="#" style="color: #0038e3">Youdom Care</a></li>
                                </ul>
                                <h5 class="alt-font font-weight-500 text-extra-dark-gray margin-4-half-rem-bottom">
																	We believe people deserve to earn a living doing what they love - full width post
																</h5>
                                <img src="{{ asset('_next/static/media/blog-img54.jpg') }}" alt="" class="w-100 border-radius-6px margin-4-half-rem-bottom">
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                <p>There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                
																<blockquote class="alt-font border-width-4px border-color-fast-blue margin-60px-left pe-0 margin-5-half-rem-tb md-margin-40px-left 
																sm-no-margin-left wow animate__fadeIn">
                                    <p>Tomorrow is the most important thing in life. Comes into us at midnight very clean. It's perfect when it arrives and it puts itself in our hands. It hopes we've learned something from yesterday.</p>
                                    <footer class="text-medium text-fast-blue d-inline-block text-uppercase">John Wayne</footer>
                                </blockquote>
                                <img src="{{ asset('_next/static/media/blog-img77.jpg') }}" alt="" class="w-100 border-radius-6px margin-4-rem-bottom wow animate__fadeIn">
                                <!-- dropcaps -->
                                <p class="wow animate__fadeIn"><span class="alt-font first-letter first-letter-big text-fast-blue">M</span>aster design is simply dummy text 
																	of the printing and typesetting industry. lorem ipsum has been the an industry standard dummy text ever since the 1500s, when an unknown 
																	printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <!-- end dropcaps -->
                                <p class="wow animate__fadeIn">There are many variations of passages of lorem ipsum available, but the majority have suffered alteration 
																	in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                            <div class="col-12 d-flex flex-wrap align-items-center padding-15px-tb mx-auto margin-20px-bottom wow animate__fadeIn">
                                <div class="col-12 col-md-9 text-center text-md-start sm-margin-10px-bottom px-0">
                                    <div class="tag-cloud">
                                        <a href="#">Development</a>
                                        <a href="#">Events</a>
                                        <a href="#">Media</a>
                                        <a href="#">Mountains</a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3 text-center text-md-end px-0">
                                    <a class="likes-count text-uppercase text-extra-dark-gray font-weight-500" href="#"><i class="far fa-heart"></i><span>05 Likes</span></a>
                                </div>
                            </div>
                          <!--
                            <div class="col-12 text-center elements-social social-icon-style-09 mx-auto">
                                <ul class="medium-icon">
                                    <li class="wow animate__fadeIn" data-wow-delay="0.2s"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.3s"><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.4s"><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.5s"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                                    <li class="wow animate__fadeIn" data-wow-delay="0.6s"><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fab fa-behance"></i><span></span></a></li>
                                </ul>
                            </div>      
													-->                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
     <!-- end blog content section -->				




</section>

@endsection
