@extends('frontend.layouts.app')
@section('content')

    <div role="main" class="main" id="home">
        <div class="slider-container rev_slider_wrapper" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
                <ul>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="{!! asset('assets/frontend/collection/img/slides/slide-one-page-1-1.jpg') !!}"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="left" data-hoffset="['0','-150','-200','-200']"
                             data-y="top" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="{!! asset('assets/frontend/collection/img/slides/slide-one-page-1-2.jpg') !!}" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="right" data-hoffset="['0','-150','-200','-200']"
                             data-y="top" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="assets/frontend/collection/img/slides/slide-one-page-1-3.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="left" data-hoffset="['0','-150','-200','-200']"
                             data-y="bottom" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="assets/frontend/collection/img/slides/slide-one-page-1-4.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                             data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-type="image"
                             data-x="right" data-hoffset="['0','-150','-200','-200']"
                             data-y="bottom" data-voffset="['-100','-150','-200','-200']"
                             data-width="['auto']"
                             data-height="['auto']"
                             data-basealign="slide"><img src="assets/frontend/collection/img/slides/slide-one-page-1-5.jpg" alt=""></div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-170','-170','-170','-365']"
                             data-y="center" data-voffset="['-80','-80','-80','-105']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-80','-80','-80','-105']"
                             data-start="700"
                             data-fontsize="['16','16','16','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;"> A Japan-Bangladesh Joint Venture </div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['170','170','170','365']"
                             data-y="center" data-voffset="['-80','-80','-80','-105']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>

                        <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['-30','-30','-30','-30']"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">Providing Ingenious IT Solutions</h1>

                        <div class="tp-caption"
                             data-frames='[{"delay":2000,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-40','-40','-40','-40']"
                             data-y="center" data-voffset="['2','2','2','15']"><img src="assets/frontend/collection/img/slides/slide-blue-line-big.png" alt=""></div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.03,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['53','53','53','105']"
                             data-width="['530','530','530','1100']"
                             data-fontsize="['18','18','18','40']"
                             data-lineheight="['26','26','26','45']"
                             style="color: #b5b5b5;"> Innovating digital space for interactive <strong class="text-color-light">solutions</strong>integrated into businesses.</div>

                        <a class="tp-caption btn btn-primary btn-rounded font-weight-semibold"
                           data-frames='[{"delay":2500,"speed":2000,"frame":"0","from":"opacity:0;y:50%;","to":"o:1;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                           data-hash
                           data-hash-offset="85"
                           href="#projects"
                           data-x="center" data-hoffset="0"
                           data-y="center" data-voffset="['133','133','133','255']"
                           data-whitespace="nowrap"
                           data-fontsize="['14','14','14','33']"
                           data-paddingtop="['15','15','15','40']"
                           data-paddingright="['45','45','45','110']"
                           data-paddingbottom="['15','15','15','40']"
                           data-paddingleft="['45','45','45','110']">GET STARTED NOW!</a>

                    </li>
                    <!--							<li class="slide-overlay" data-transition="fade">-->
                    <!--								<img src="assets/frontend/collection/img/slides/slide-bg-2.jpg"  -->
                    <!--									alt=""-->
                    <!--									data-bgposition="center center" -->
                    <!--									data-bgfit="cover" -->
                    <!--									data-bgrepeat="no-repeat" -->
                    <!--									class="rev-slidebg">-->
                    <!--				-->
                    <!--								<div class="tp-caption"-->
                    <!--									data-x="center" data-hoffset="['-170','-170','-170','-350']"-->
                    <!--									data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--									data-start="1000"-->
                    <!--									data-transform_in="x:[-300%];opacity:0;s:500;"-->
                    <!--									data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!--				-->
                    <!--								<div class="tp-caption text-color-light font-weight-normal"-->
                    <!--									data-x="center"-->
                    <!--									data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--									data-start="700"-->
                    <!--									data-fontsize="['16','16','16','40']"-->
                    <!--									data-lineheight="['25','25','25','45']"-->
                    <!--									data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>-->
                    <!--				-->
                    <!--								<div class="tp-caption"-->
                    <!--									data-x="center" data-hoffset="['170','170','170','350']"-->
                    <!--									data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--									data-start="1000"-->
                    <!--									data-transform_in="x:[300%];opacity:0;s:500;"-->
                    <!--									data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!--				-->
                    <!--								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"-->
                    <!--									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--									data-x="center"-->
                    <!--									data-y="center"-->
                    <!--									data-fontsize="['50','50','50','90']"-->
                    <!--									data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>-->
                    <!--				-->
                    <!--								<div class="tp-caption font-weight-light ws-normal text-center"-->
                    <!--									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'-->
                    <!--									data-x="center"-->
                    <!--									data-y="center" data-voffset="['60','60','60','105']"-->
                    <!--									data-width="['530','530','530','1100']"-->
                    <!--									data-fontsize="['18','18','18','40']"-->
                    <!--									data-lineheight="['26','26','26','45']"-->
                    <!--									style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>-->
                    <!--								-->
                    <!--							</li>-->
                    <!--<li class="slide-overlay slide-overlay-dark" data-transition="fade">-->
                    <!--<img src="assets/frontend/collection/img/slides/slide-bg-6.jpg"  -->
                    <!--alt=""-->
                    <!--data-bgposition="center center" -->
                    <!--data-bgfit="cover" -->
                    <!--data-bgrepeat="no-repeat" -->
                    <!--class="rev-slidebg">-->
                    <!---->
                    <!--<div class="tp-caption"-->
                    <!--data-x="center" data-hoffset="['-145','-145','-145','-320']"-->
                    <!--data-y="center" data-voffset="['-80','-80','-80','-130']"-->
                    <!--data-start="1000"-->
                    <!--data-transform_in="x:[-300%];opacity:0;s:500;"-->
                    <!--data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!---->
                    <!--<div class="tp-caption text-color-light font-weight-normal"-->
                    <!--data-x="center"-->
                    <!--data-y="center" data-voffset="['-80','-80','-80','-130']"-->
                    <!--data-start="700"-->
                    <!--data-fontsize="['16','16','16','40']"-->
                    <!--data-lineheight="['25','25','25','45']"-->
                    <!--data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>-->
                    <!---->
                    <!--<div class="tp-caption"-->
                    <!--data-x="center" data-hoffset="['145','145','145','320']"-->
                    <!--data-y="center" data-voffset="['-80','-80','-80','-130']"-->
                    <!--data-start="1000"-->
                    <!--data-transform_in="x:[300%];opacity:0;s:500;"-->
                    <!--data-transform_idle="opacity:0.2;s:500;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light"-->
                    <!--data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center" data-hoffset="['-155','-155','-155','-255']"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['145','145','145','250']"-->
                    <!--data-lineheight="['150','150','150','260']">P</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light"-->
                    <!--data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center" data-hoffset="['-80','-80','-80','-130']"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['145','145','145','250']"-->
                    <!--data-lineheight="['150','150','150','260']">O</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light"-->
                    <!--data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['145','145','145','250']"-->
                    <!--data-lineheight="['150','150','150','260']">R</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light"-->
                    <!--data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center" data-hoffset="['65','65','65','115']"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['145','145','145','250']"-->
                    <!--data-lineheight="['150','150','150','260']">T</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light"-->
                    <!--data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center" data-hoffset="['139','139','139','240']"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['145','145','145','250']"-->
                    <!--data-lineheight="['150','150','150','260']">O</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-light text-color-light"-->
                    <!--data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'-->
                    <!--data-x="center"-->
                    <!--data-y="center" data-voffset="['85','85','85','140']"-->
                    <!--data-fontsize="['18','18','18','40']"-->
                    <!--data-lineheight="['26','26','26','45']">The best choice for your new website</div>-->
                    <!---->
                    <!--</li>-->
                    <!--<li class="slide-overlay" data-transition="fade">-->
                    <!--<img src="assets/frontend/collection/img/blank.gif"  -->
                    <!--alt=""-->
                    <!--data-bgposition="center center" -->
                    <!--data-bgfit="cover" -->
                    <!--data-bgrepeat="no-repeat" -->
                    <!--class="rev-slidebg">-->
                    <!---->
                    <!--<div class="rs-background-video-layer" -->
                    <!--data-forcerewind="on" -->
                    <!--data-volume="mute" -->
                    <!--data-videowidth="100%" -->
                    <!--data-videoheight="100%" -->
                    <!--data-videomp4="video/memory-of-a-woman.mp4" -->
                    <!--data-videopreload="preload" -->
                    <!--data-videoloop="loop" -->
                    <!--data-forceCover="1" -->
                    <!--data-aspectratio="16:9" -->
                    <!--data-autoplay="true" -->
                    <!--data-autoplayonlyfirsttime="false" -->
                    <!--data-nextslideatend="false">-->
                    <!--</div>-->
                    <!---->
                    <!--<div class="tp-caption"-->
                    <!--data-x="center" data-hoffset="['-170','-170','-170','-350']"-->
                    <!--data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--data-start="1000"-->
                    <!--data-transform_in="x:[-300%];opacity:0;s:500;"-->
                    <!--data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!---->
                    <!--<div class="tp-caption text-color-light font-weight-normal"-->
                    <!--data-x="center"-->
                    <!--data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--data-start="700"-->
                    <!--data-fontsize="['16','16','16','40']"-->
                    <!--data-lineheight="['25','25','25','45']"-->
                    <!--data-transform_in="y:[-50%];opacity:0;s:500;" style="z-index: 5;">WE WORK HARD AND PORTO HAS</div>-->
                    <!---->
                    <!--<div class="tp-caption"-->
                    <!--data-x="center" data-hoffset="['170','170','170','350']"-->
                    <!--data-y="center" data-voffset="['-50','-50','-50','-75']"-->
                    <!--data-start="1000"-->
                    <!--data-transform_in="x:[300%];opacity:0;s:500;"-->
                    <!--data-transform_idle="opacity:0.2;s:500;" style="z-index: 5;"><img src="assets/frontend/collection/img/slides/slide-title-border.png" alt=""></div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"-->
                    <!--data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'-->
                    <!--data-x="center"-->
                    <!--data-y="center"-->
                    <!--data-fontsize="['50','50','50','90']"-->
                    <!--data-lineheight="['55','55','55','95']" style="z-index: 5;">PERFECT VIDEOS</div>-->
                    <!---->
                    <!--<div class="tp-caption font-weight-light ws-normal text-center"-->
                    <!--data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'-->
                    <!--data-x="center"-->
                    <!--data-y="center" data-voffset="['60','60','60','105']"-->
                    <!--data-width="['530','530','530','1100']"-->
                    <!--data-fontsize="['18','18','18','40']"-->
                    <!--data-lineheight="['26','26','26','45']"-->
                    <!--style="color: #b5b5b5; z-index: 5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>-->
                    <!---->
                    <!--<div class="tp-dottedoverlay tp-opacity-overlay"></div>-->
                    <!--</li>-->
                </ul>
            </div>
        </div>

        <section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
            <div class="container my-3">
                <div class="row mb-5">
                    <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-color-light mb-2"> What We Do Best </h2>
                        <!--								<p class="text-color-light opacity-7">What We Do Best</p>-->
                    </div>
                </div>
                <div class="row mb-lg-4">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-support text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2"> IT Consultancy  </h4>
                                <p class="text-color-light opacity-7">From strategic planning to implementation, SoftSourceBD plans for ultimate business success crafted by trained IT Professionals.   <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-layers text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">Web Design </h4>
                                <p class="text-color-light opacity-7">A well-designed website builds identity for your business and our web design means creativity that establish your brand.     </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-menu text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">Web Development </h4>
                                <p class="text-color-light opacity-7">No website, no existence! Let us make you exist in the digital space with industry defining, well-coded and interactive website.  </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-doc text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">App Development </h4>
                                <p class="text-color-light opacity-7">App means growth and our DNA is rooted into next-gen app development driven by strategy, design, and technology for ultimate success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-user text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">Software Development </h4>
                                <p class="text-color-light opacity-7">Business automation software boost efficiency while reduce cost and our developers deliver your success automated.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-screen-desktop text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">Digital Marketing </h4>
                                <p class="text-color-light opacity-7">Without digital marketing, you are losing business. Worry not, we got you covered, no matter the size of your business. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="projects" class="container">
            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-9 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                        <h2 class="font-weight-bold mb-2">Successful Projects</h2>
                        <p class="mb-4">Our industry experience gathered through success.</p>
                    </div>
                    <p class="pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">SoftSourceBD has worked on 100+ projects and continuing industry innovation to make businesses succeed with digital world.</p>
                </div>
            </div>
        </div>

        <div class="container py-2">
            <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Show All</a></li>
                @if(count($portfolios) > 0)
                    @foreach($portfolios as $portfolio)
                    <li class="nav-item" data-option-value=".{!! $portfolio->category->name !!}"><a class="nav-link text-1 text-uppercase" href="#">{!! $portfolio->category->name !!}</a></li>
                    @endforeach
                @endif
            </ul>
        </div>

        <div class="ml-4 mr-4 mt-4 pt-2">

            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                    @if(count($portfolios) > 0)
                        @foreach($portfolios as $portfolio)
                        <div class="col-md-6 col-lg-1-5 isotope-item {!! $portfolio->category->name !!}">
                        <div class="portfolio-item">
                            <a href="{!! route('portfolio') !!}">
                                <span class="thumb-info thumb-info-lighten border-radius-0">
                                    <span class="thumb-info-wrapper border-radius-0">
                                        <img src="uploads/portfolio_images/{!! $portfolio->photo !!}" class="img-fluid border-radius-0" alt="">

                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">{!! $portfolio->title !!}</span>
                                            <span class="thumb-info-type">{!! $portfolio->category->name !!}</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>

        <section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(img/bg-one-page-1-1.jpg); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="font-weight-bold text-color-light mb-2"> Our Clients</h2>
                        <p class="text-color-light opacity-7">We work with top companies, and innovating the business automation</p>
                    </div>
                </div>
                <div class="row text-center py-3 my-4">
                    <div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>


                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>


                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>


                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>


                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>


                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-white.png" alt="">
                        </div>

                        <div>
                            <img class="img-fluid" src="assets/frontend/collection/img/logos/aamartech-logo-black.png" alt="">
                        </div>



                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                    <blockquote>
                                        <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
                                    <blockquote>
                                        <p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-4 bg-color-grey-scale-1 border-0 m-0" id="ourblog">
            <div class="container container-xl">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-6 text-center">
                        <div class="overflow-hidden mb-3">
                            <h2 class="text-color-dark font-weight-bold pb-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="250">Our Blog</h2>
                        </div>
                        <p class="font-weight-light text-color-dark line-height-9 text-4 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="350">Blogging is a great way to show your talents and interests to prospective... </p>
                    </div>
                </div>
                <div id="portfolioLoadMoreWrapperBlog" class="row portfolio-list sort-destination pb-2" data-sort-id="portfolio" data-total-pages="3" data-ajax-url="ajax/demo-architecture-interior-blog-ajax-load-more-">

                    @if(count($blogs) > 0)
                        @foreach($blogs as $blog)
                            <div class="col-lg-4 isotope-item text-left">
                                <div class="portfolio-item appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="450">
                                    <div class="card">
                                        <div class="card-body p-5 mt-2">
                                            <h3 class="font-weight-bold text-transform-none line-height-4 text-5 pr-xl-5 mr-xl-5">
                                                <a href="{!! route('blog-details', $blog->id) !!}" class="text-color-dark text-decoration-none">{!! $blog->title!!}</a>
                                            </h3>
                                            <p class="mb-4">{!! \Illuminate\Support\Str::limit($blog->content, 150, $end='...')  !!}</p>
                                            <?php
                                                $user = DB::table('users')->where('id', $blog->created_by)->first();
                                            ?>
                                            <p class="mb-4">By {!! $user->name  !!}  <span class="float-right">Created At: {!! $blog->created_at  !!}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div id="portfolioLoadMoreBtnWrapperBlog" class="row">
                    <div class="col text-center">

                        <div id="portfolioLoadMoreLoaderBlog" class="portfolio-load-more-loader" style="min-height: 61px;">
                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>

                        <a href="demo-architecture-interior-blog.html" class="btn btn-primary btn-outline ml-2 font-weight-extra-bold text-3 px-5 py-3 border-width-4 appear-animation" data-appear-animation="fadeInUpShorter">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection



