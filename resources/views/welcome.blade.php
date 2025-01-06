@extends('layouts.app')

@section('title', 'Accueil')

@push('css')
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/corporate.css') }}" />
@endpush

@section('content')
    <!-- start slider -->
    <section id="slider" class="p-0 top-space-margin ">
        <div class="demo-corporate-slider_wrapper fullscreen-container" data-alias="portfolio-viewer" data-source="gallery" style="background-color:transparent;padding:0px;">
            <div id="demo-corporate-slider" class="rev_slider bg-regal-blue fullscreenbanner" style="display:none;" data-version="5.3.1.6">
                <!-- begin slides list -->
                <ul>
                    <!-- minimum slide structure -->
                    <li data-index="rs-01" data-transition="parallaxleft" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                        data-title="Crossfit" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- slide's main background image -->
                        <img src="{{ asset('images/banner-001.jpg') }}" alt="Image"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>
                        <!-- start overlay layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-1-layer-01"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                             data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                             {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' style="background:rgba(22,35,63,0.1); z-index: 0;">
                        </div>
                        <!-- end overlay layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-1-layer-02" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['900','700','700','600']"
                             data-height="['900','700','700','600']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.5;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-1-layer-03" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['1200','1000','900','800']"
                             data-height="['1200','1000','900','800']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.3;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start row zone layer -->
                        <div id="rrzm_638" class="rev_row_zone rev_row_zone_middle">
                            <!-- start row layer -->
                            <div class="tp-caption  " id="slide-1-layer-04" data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-426','-426','-426','-426']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="row" data-columnbreak="3"
                                 data-responsive_offset="on" data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[100,75,50,30]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[100,75,50,30]">
                                <!-- start column layer -->
                                <div class="tp-caption" id="slide-1-layer-05" data-x="['left','left','left','left']"
                                     data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']"
                                     data-voffset="['100','100','100','100']" data-width="none" data-height="none"
                                     data-whitespace="nowrap" data-type="column" data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%" data-verticalalign="top"
                                     data-textAlign="['center','center','center','center']">
                                    <!-- start subtitle layer -->
                                    <div class="tp-caption mx-auto text-uppercase" id="slide-1-layer-06"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']"
                                         data-lineheight="['20','20','20','20']"
                                         data-fontweight="['500','500','500','500']"
                                         data-letterspacing="['1','1','1','1']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['800','auto','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="off"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:-50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[25,25,10,10]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial;">
                                        <i class="bi bi-award pe-5px icon-small"></i>Service disponible
                                    </div>
                                    <!-- end subtitle layer -->
                                    <!-- start title layer -->
                                    <div class="tp-caption mx-auto" id="slide-1-layer-07"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['75','60','70','50']"
                                         data-lineheight="['70','65','75','55']"
                                         data-fontweight="['700','700','700','700']"
                                         data-letterspacing="['-2','-2','-2','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['700','600','600','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":"1500","split":"chars","splitdelay":0.03,"speed":800,"split_direction":"middletoedge","frame":"0","from":"x:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;fb:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[33,28,35,25]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial; text-shadow: #0b1236 3px 3px 15px;">
                                        APPUI TECHNIQUE ET FINANCIER
                                    </div>
                                    <!-- end title layer -->
                                    <!-- start text layer -->
                                    <div class="tp-caption mx-auto" id="slide-1-layer-08"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['20','20','24','20']"
                                         data-lineheight="['36','36','40','30']"
                                         data-fontweight="['300','300','300','300']"
                                         data-letterspacing="['0','0','0','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['500','500','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:0.6;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[36,36,60,40]" data-paddingleft="[0,0,0,0]">
                                         Un accompagnement sur mesure et adapté à chaque étape du parcours entrepreneurial.
                                    </div>
                                    <!-- end text layer -->
                                    <!-- start button layer -->
                                    <div class="tp-caption tp-resizeme" id="slide-1-layer-09"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                         data-voffset="['0','0','0','0']" data-width="auto" data-height="none"
                                         data-whitespace="nowrap" data-fontsize="['18','16','16','16']"
                                         data-lineheight="['70','55','55','55']" data-type="text"
                                         data-responsive_offset="off" data-responsive="off"
                                         data-frames='[{"delay":3000,"speed":1000,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[75,70,65,60]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,35,30,30]">
                                        <a href="#"
                                           class="btn btn-extra-large get-started-btn btn-rounded with-rounded btn-gradient-flamingo-amethyst-green btn-box-shadow">Réserver<span class="bg-white text-base-color"><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                    <!-- end button layer -->
                                </div>
                                <!-- end column layer -->
                            </div>
                            <!-- end row layer -->
                        </div>
                        <!-- end row zone layer -->
                        <!-- start beige background layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-base-color border-radius-50"
                             id="slide-1-layer-10" data-x="['center','center','center','center']"
                             data-hoffset="['510','410','310','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-320','-250','-250','0']" data-width="['122','122','120','120']"
                             data-height="['122','122','120','120']" data-visibility="['on','on','off','off']"
                             data-whitespace="nowrap" data-basealign="grid" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end beige background layer -->
                        <!-- start beige text layer -->
                        <div class="tp-caption d-inline-block" id="slide-1-layer-11"
                             data-x="['center','center','center','center']" data-hoffset="['510','410','310','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-305','-250','-250','0']"
                             data-visibility="['on','on','off','off']" data-fontsize="['13','13','13','13']"
                             data-lineheight="['16','16','16','16']" data-fontweight="['500','600','600','600']"
                             data-letterspacing="['0','0','0','0']"
                             data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                             data-width="['100','100','100','100']" data-height="auto" data-whitespace="normal"
                             data-basealign="grid" data-type="text" data-responsive_offset="on"
                             data-verticalalign="middle" data-responsive="on"
                             data-frames='[{"delay":3700,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[33,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="word-break: initial;">
                            <i class="bi bi-patch-check-fill icon-extra-medium d-block pb-10px"></i> <span
                                class="d-block text-uppercase">Decided quality</span>
                        </div>
                        <!-- end beige text layer -->
                    </li>
                    <li data-index="rs-02" data-transition="parallaxleft" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                        data-title="Crossfit" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- slide's main background image -->
                        <img src="{{ asset('images/banner-002.jpg') }}" alt="Image"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>
                        <!-- start overlay layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-2-layer-01"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                             data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                             {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' style="background:rgba(22,35,63,0.1); z-index: 0;">
                        </div>
                        <!-- end overlay layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-2-layer-02" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['900','700','700','600']"
                             data-height="['900','700','700','600']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.5;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-2-layer-03" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['1200','1000','900','800']"
                             data-height="['1200','1000','900','800']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.3;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start row zone layer -->
                        <div id="rrzm_639" class="rev_row_zone rev_row_zone_middle">
                            <!-- start row layer -->
                            <div class="tp-caption  " id="slide-2-layer-04" data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-426','-426','-426','-426']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="row" data-columnbreak="3"
                                 data-responsive_offset="on" data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[100,75,50,30]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[100,75,50,30]">
                                <!-- start column layer -->
                                <div class="tp-caption" id="slide-2-layer-05" data-x="['left','left','left','left']"
                                     data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']"
                                     data-voffset="['100','100','100','100']" data-width="none" data-height="none"
                                     data-whitespace="nowrap" data-type="column" data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%" data-verticalalign="top"
                                     data-textAlign="['center','center','center','center']">
                                    <!-- start subtitle layer -->
                                    <div class="tp-caption mx-auto text-uppercase" id="slide-2-layer-06"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']"
                                         data-lineheight="['20','20','20','20']"
                                         data-fontweight="['500','500','500','500']"
                                         data-letterspacing="['1','1','1','1']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['800','auto','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="off"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:-50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[25,25,10,10]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial;">
                                        <i class="bi bi-award pe-5px icon-small"></i>SERVICES DISPONIBLE
                                    </div>
                                    <!-- end subtitle layer -->
                                    <!-- start title layer -->
                                    <div class="tp-caption mx-auto" id="slide-2-layer-07"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['75','60','70','50']"
                                         data-lineheight="['70','65','75','55']"
                                         data-fontweight="['700','700','700','700']"
                                         data-letterspacing="['-2','-2','-2','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['700','600','600','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":"1500","split":"chars","splitdelay":0.03,"speed":800,"split_direction":"middletoedge","frame":"0","from":"x:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;fb:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[33,28,35,25]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial; text-shadow: #0b1236 3px 3px 15px;">
                                        LOCATION D'ESPACES
                                    </div>
                                    <!-- end title layer -->
                                    <!-- start text layer -->
                                    <div class="tp-caption mx-auto" id="slide-2-layer-08"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['20','20','24','20']"
                                         data-lineheight="['36','36','40','30']"
                                         data-fontweight="['300','300','300','300']"
                                         data-letterspacing="['0','0','0','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['500','500','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:0.6;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[36,36,60,40]" data-paddingleft="[0,0,0,0]">
                                         Des espaces modernes et conviviaux pour stimuler la productivité et encourager la collaboration.
                                    </div>
                                    <!-- end text layer -->
                                    <!-- start button layer -->
                                    <div class="tp-caption tp-resizeme" id="slide-2-layer-09"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                         data-voffset="['0','0','0','0']" data-width="auto" data-height="none"
                                         data-whitespace="nowrap" data-fontsize="['18','16','16','16']"
                                         data-lineheight="['70','55','55','55']" data-type="text"
                                         data-responsive_offset="off" data-responsive="off"
                                         data-frames='[{"delay":3000,"speed":1000,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[75,70,65,60]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,35,30,30]">
                                        <a href="#"
                                           class="btn btn-extra-large get-started-btn btn-rounded with-rounded btn-gradient-flamingo-amethyst-green btn-box-shadow">Réserver<span class="bg-white text-base-color"><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                    <!-- end button layer -->
                                </div>
                                <!-- end column layer -->
                            </div>
                            <!-- end row layer -->
                        </div>
                        <!-- end row zone layer -->
                        <!-- start beige background layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-base-color border-radius-50"
                             id="slide-2-layer-10" data-x="['center','center','center','center']"
                             data-hoffset="['510','410','310','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-320','-250','-250','0']" data-width="['122','122','120','120']"
                             data-height="['122','122','120','120']" data-visibility="['on','on','off','off']"
                             data-whitespace="nowrap" data-basealign="grid" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end beige background layer -->
                        <!-- start beige text layer -->
                        <div class="tp-caption d-inline-block" id="slide-2-layer-11"
                             data-x="['center','center','center','center']" data-hoffset="['510','410','310','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-305','-250','-250','0']"
                             data-visibility="['on','on','off','off']" data-fontsize="['13','13','13','13']"
                             data-lineheight="['16','16','16','16']" data-fontweight="['500','600','600','600']"
                             data-letterspacing="['0','0','0','0']"
                             data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                             data-width="['100','100','100','100']" data-height="auto" data-whitespace="normal"
                             data-basealign="grid" data-type="text" data-responsive_offset="on"
                             data-verticalalign="middle" data-responsive="on"
                             data-frames='[{"delay":3700,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[33,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="word-break: initial;">
                            <i class="bi bi-patch-check-fill icon-extra-medium d-block pb-10px"></i> <span
                                class="d-block text-uppercase">Decided quality</span>
                        </div>
                        <!-- end beige text layer -->
                    </li>
                    <li data-index="rs-03" data-transition="parallaxleft" data-slotamount="default"
                        data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                        data-easeout="default" data-masterspeed="1500" data-rotate="0" data-saveperformance="off"
                        data-title="Crossfit" data-param1="" data-param2="" data-param3="" data-param4=""
                        data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                        data-description="">
                        <!-- slide's main background image -->
                        <img src="{{ asset('images/banner-003.jpg') }}" alt="Image"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                             class="rev-slidebg" data-no-retina>
                        <!-- start overlay layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper " id="slide-3-layer-01"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                             data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                             data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},
                             {"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' style="background:rgba(22,35,63,0.1); z-index: 0;">
                        </div>
                        <!-- end overlay layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-3-layer-02" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['900','700','700','600']"
                             data-height="['900','700','700','600']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1000,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.5;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start shape layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-regal-blue border-radius-50"
                             id="slide-3-layer-03" data-x="['center','center','center','center']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['0','0','0','0']" data-width="['1200','1000','900','800']"
                             data-height="['1200','1000','900','800']" data-whitespace="nowrap" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:0.3;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end shape layer -->
                        <!-- start row zone layer -->
                        <div id="rrzm_640" class="rev_row_zone rev_row_zone_middle">
                            <!-- start row layer -->
                            <div class="tp-caption  " id="slide-3-layer-04" data-x="['left','left','left','left']"
                                 data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                                 data-voffset="['-426','-426','-426','-426']" data-width="none" data-height="none"
                                 data-whitespace="nowrap" data-type="row" data-columnbreak="3"
                                 data-responsive_offset="on" data-responsive="off"
                                 data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                 data-textAlign="['inherit','inherit','inherit','inherit']"
                                 data-paddingtop="[0,0,0,0]" data-paddingright="[100,75,50,30]"
                                 data-paddingbottom="[0,0,0,0]" data-paddingleft="[100,75,50,30]">
                                <!-- start column layer -->
                                <div class="tp-caption" id="slide-3-layer-05" data-x="['left','left','left','left']"
                                     data-hoffset="['100','100','100','100']" data-y="['top','top','top','top']"
                                     data-voffset="['100','100','100','100']" data-width="none" data-height="none"
                                     data-whitespace="nowrap" data-type="column" data-responsive_offset="on"
                                     data-responsive="off"
                                     data-frames='[{"delay":"+0","speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                     data-columnwidth="100%" data-verticalalign="top"
                                     data-textAlign="['center','center','center','center']">
                                    <!-- start subtitle layer -->
                                    <div class="tp-caption mx-auto text-uppercase" id="slide-3-layer-06"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['13','13','13','13']"
                                         data-lineheight="['20','20','20','20']"
                                         data-fontweight="['500','500','500','500']"
                                         data-letterspacing="['1','1','1','1']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['800','auto','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="off"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:-50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[25,25,10,10]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial;">
                                        <i class="bi bi-award pe-5px icon-small"></i>Service disponible
                                    </div>
                                    <!-- end subtitle layer -->
                                    <!-- start title layer -->
                                    <div class="tp-caption mx-auto text-uppercase" id="slide-3-layer-07"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['75','60','70','50']"
                                         data-lineheight="['70','65','75','55']"
                                         data-fontweight="['700','700','700','700']"
                                         data-letterspacing="['-2','-2','-2','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['700','600','600','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":"1500","split":"chars","splitdelay":0.03,"speed":800,"split_direction":"middletoedge","frame":"0","from":"x:50px;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":100,"frame":"999","to":"opacity:0;fb:0;","ease":"Power4.easeOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[33,28,35,25]" data-paddingleft="[0,0,0,0]"
                                         style="word-break: initial; text-shadow: #0b1236 3px 3px 15px;">
                                        Domiciliation d'entreprise
                                    </div>
                                    <!-- end title layer -->
                                    <!-- start text layer -->
                                    <div class="tp-caption mx-auto" id="slide-3-layer-08"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']"
                                         data-y="['middle','middle','middle','middle']"
                                         data-voffset="['0','0','0','0']" data-fontsize="['20','20','24','20']"
                                         data-lineheight="['36','36','40','30']"
                                         data-fontweight="['300','300','300','300']"
                                         data-letterspacing="['0','0','0','0']"
                                         data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                                         data-width="['500','500','auto','auto']" data-height="auto"
                                         data-whitespace="normal" data-basealign="grid" data-type="text"
                                         data-responsive_offset="off" data-verticalalign="middle"
                                         data-responsive="on"
                                         data-frames='[{"delay":2500,"speed":800,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:0.6;fb:0;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                         data-textAlign="['center','center','center','center']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]"
                                         data-paddingbottom="[36,36,60,40]" data-paddingleft="[0,0,0,0]">
                                         Utiliser notre adresse comme siège social de votre entreprise.
                                    </div>
                                    <!-- end text layer -->
                                    <!-- start button layer -->
                                    <div class="tp-caption tp-resizeme" id="slide-3-layer-09"
                                         data-x="['center','center','center','center']"
                                         data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                         data-voffset="['0','0','0','0']" data-width="auto" data-height="none"
                                         data-whitespace="nowrap" data-fontsize="['18','16','16','16']"
                                         data-lineheight="['70','55','55','55']" data-type="text"
                                         data-responsive_offset="off" data-responsive="off"
                                         data-frames='[{"delay":3000,"speed":1000,"frame":"0","from":"y:100px;opacity:0;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                         data-paddingtop="[0,0,0,0]" data-paddingright="[75,70,65,60]"
                                         data-paddingbottom="[0,0,0,0]" data-paddingleft="[45,35,30,30]">
                                        <a href="{{ route('contact') }}"
                                           class="btn btn-extra-large get-started-btn btn-rounded with-rounded btn-gradient-flamingo-amethyst-green btn-box-shadow">Contacter<span class="bg-white text-base-color"><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                    <!-- end button layer -->
                                </div>
                                <!-- end column layer -->
                            </div>
                            <!-- end row layer -->
                        </div>
                        <!-- end row zone layer -->
                        <!-- start beige background layer -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme bg-base-color border-radius-50"
                             id="slide-3-layer-10" data-x="['center','center','center','center']"
                             data-hoffset="['510','410','310','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-320','-250','-250','0']" data-width="['122','122','120','120']"
                             data-height="['122','122','120','120']" data-visibility="['on','on','off','off']"
                             data-whitespace="nowrap" data-basealign="grid" data-type="shape"
                             data-responsive_offset="on"
                             data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="z-index: 0;">
                        </div>
                        <!-- end beige background layer -->
                        <!-- start beige text layer -->
                        <div class="tp-caption d-inline-block" id="slide-3-layer-11"
                             data-x="['center','center','center','center']" data-hoffset="['510','410','310','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-305','-250','-250','0']"
                             data-visibility="['on','on','off','off']" data-fontsize="['13','13','13','13']"
                             data-lineheight="['16','16','16','16']" data-fontweight="['500','600','600','600']"
                             data-letterspacing="['0','0','0','0']"
                             data-color="['#ffffff','#ffffff','#ffffff','#ffffff']"
                             data-width="['100','100','100','100']" data-height="auto" data-whitespace="normal"
                             data-basealign="grid" data-type="text" data-responsive_offset="on"
                             data-verticalalign="middle" data-responsive="on"
                             data-frames='[{"delay":3700,"speed":1000,"frame":"0","from":"x:0px;y:50px;rX:0deg;rY:0deg;rZ:0deg;sX:0.5;sY:0.5;opacity:0;","to":"o:1;","ease":"Back.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]" data-paddingbottom="[33,0,0,0]"
                             data-paddingleft="[0,0,0,0]" style="word-break: initial;">
                            <i class="bi bi-patch-check-fill icon-extra-medium d-block pb-10px"></i> <span
                                class="d-block text-uppercase">Decided quality</span>
                        </div>
                        <!-- end beige text layer -->
                    </li>
                </ul>
                <div class="tp-bannertimer"
                     style="height: 10px; background-color: rgba(0, 0, 0, 0.10); z-index: 98"></div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <!-- start section
    <section class="p-0 border-bottom border-color-extra-medium-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
                 data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 500, "easing": "easeOutQuad" }'>
                start content box item
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">99<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Track and analyze <br />business reports.</span>
                        </div>
                    </div>
                </div>
                --end content box item --
                --start content box item --
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800 ls-minus-3px">4.98</h2>
                        </div>
                        <div>
                            <div class="review-star-icon fs-20 d-inline-block text-gradient-orange-sky-blue">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="lh-24 fw-600 d-block">Best rated agency</span>
                        </div>
                    </div>
                </div>
                -- end content box item--
                --start content box item --
                <div class="col pt-35px pb-35px text-dark-gray">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">98<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Genuine repeated <br />happy customers.</span>
                        </div>
                    </div>
                </div>
                -- end content box item --
            </div>
        </div>
    </section>
     end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6 sm-pb-9">
                <div class="col-lg-6 col-md-9 position-relative md-mb-15 text-center text-lg-start"
                     data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 15, "easing": "easeOutQuad" }'>
                    <div class="absolute-middle-center z-index-9 counter-style-02 text-center">
                        <span class="fs-160 fw-800 text-dark-gray ls-minus-10px xs-ls-minus-5px position-relative lg-fs-130 xs-fs-75">10<sub class="align-top fs-80 lg-fs-70 text-dark-gray position-relative top-minus-3px">+</sub></span>
                        <span class="d-block mx-auto fs-20 fw-500 lh-26 w-70 text-center text-dark-gray xs-w-100">Années d'experience</span>
                    </div>
                    <img src="{{ asset('images/demo-corporate-03.png') }}" alt="">
                    <img src="{{ asset('images/demo-corporate-01.webp') }}" class="position-absolute top-50 left-minus-100px lg-left-minus-40px sm-left-minus-30px lg-w-50 sm-w-55" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-220px)" alt="">
                    <img src="{{ asset('images/demo-corporate-02.png') }}" class="position-absolute top-0px xl-top-minus-10px w-170px right-20px md-right-40px xs-w-40" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
                </div>
                <div class="col-lg-6 ps-6 text-center text-lg-start lg-ps-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Approche créative</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">BUSINESS HELP CONSULTING</h3>
                    <p class="w-80 xl-w-90 lg-w-100 mb-40px sm-mb-25px">Une initiative dédiée à l’accompagnement et au renforcement des capacités des jeunes entrepreneurs ou porteurs d'idée innovantes d'entreprises au Togo. Nous offrons des solutions sur mesure pour soutenir les porteurs de projets, de l'idée à la concrétisation et au développement de leurs futures entreprises.</p>
                    <a href="" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-box-shadow btn-rounded me-25px xs-me-0">
                        <span>
                            <span class="btn-text">A propos de nous</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <span class="text-dark-gray fw-700 ls-minus-05px d-block d-sm-inline-block sm-mt-15px"><a href="tel:0022890000000"><i class="feather icon-feather-phone-call me-10px"></i>00228 92 03 50 12</a></span>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center counter-style-07 ps-3 pe-3" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="796">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">DEMANDES D'APPUI</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="166">
                        <span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">ACCOMPAGNENTS</span>
                </div>
                <!-- end counter item -->
                <!-- start counter item -->
                <div class="col text-center sm-mb-30px">
                    <h2 class="vertical-counter d-inline-flex text-dark-gray fw-800 mb-0 ls-minus-3px position-relative z-index-0" data-to="50">
                        M<span class="text-highlight position-absolute bottom-9px w-100"><span class="bg-gradient-flamingo-amethyst-green h-10px opacity-2"></span></span>
                    </h2>
                    <span class="d-block fs-14 fw-700 text-uppercase text-dark-gray">Fonds Mobilisés</span>
                </div>
                <!-- end counter item -->

            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden bg-regal-blue position-relative border-radius-6px lg-border-radius-0px z-index-0">
        <img src="{{ asset('images/demo-corporate-bg-01.png') }}" class="position-absolute top-minus-150px left-minus-30px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-20deg) translateY(0)" alt="" />
        <div class="container">
            <div class="row align-items-center mb-6 sm-mb-9 text-center text-lg-start">
                <div class="col-lg-5 md-mb-20px">
                    <span class="ps-25px pe-25px mb-10px text-uppercase text-white fs-13 lh-42px fw-600 border-radius-100px bg-gradient-blue-whale-transparent d-inline-block">Approche créative</span>
                    <h3 class="text-white fw-700 mb-0 ls-minus-1px">BUSINESS HELP CONSULTING</h3>
                </div>
                <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                    <p class="w-85 md-w-100">Accompagner et renforcer les capacités des jeunes entrepreneurs ou porteurs d'idée innovantes d'entreprises au Togo.</p>
                </div>
                <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end">
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 icon-extra-medium text-white swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-left"></i>
                    </div>
                    <div class="slider-one-slide-next-1 icon-extra-medium text-white swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                        <i class="feather icon-feather-chevron-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row align-items-center mb-6">
                <div class="col-12">
                    <div class="outside-box-right-25 sm-outside-box-right-0">
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-00.jpg') }}" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">INNOVATION</div>
                                                <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 text-uppercase fs-20">Accélération</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Solutions Créatives</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-100.jpg') }}" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">INCUBATION</div>
                                                <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">PRE-INCUBATION | INCUBATION</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Entrepreneriat Féminin</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-02.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">IMPACT DURABLE</div>
                                                <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">APPUI FINANCIER</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Développement Socio-economique</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-03.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">INTEGRITE</div>
                                                <i class="line-icon-Financial text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">DOMICILIATION D'ENTREPRISE</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Transparence et honnêteté</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-001.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">EXCELLENCE</div>
                                                <i class="line-icon-Money-Bag text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">PRE-INCUBATIONS | INCUBATION</span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Qualité et Résultats</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-01.jpg') }}" alt="" />
                                        <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">INCLUSION</div>
                                                <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">APPUI TECHNIQUE </span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">PRE-INCUBATIONS | INCUBATION</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                        <img src="{{ asset('images/img-04.jpg') }}" alt="" />
                                        <div class="opacity-very-light bg-slate-blue"></div>
                                        <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">
                                            <div class="hover-label-icon position-relative z-index-9">
                                                <div class="label bg-base-color fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 ls-05px">COLLABORATION</div>
                                                <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                            </div>
                                            <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                <span class="text-white fw-600 fs-20">ESPACE DE COWORKING </span>
                                                <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">ACCELERATION</span>
                                                <a href="" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Découvrir les services</a>
                                                <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                            </div>
                                            <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                            </div>
                                            <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                            <a href="" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                        </div>
                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <i class="bi bi-envelope text-white d-inline-block align-middle icon-extra-medium me-10px md-m-5px"></i>
                    <div class="fs-18 text-white d-inline-block align-middle">Économisez votre temps précieux et vos efforts consacrés à la recherche d’une solution. <a href="{{ route('contact') }}" class="text-white text-decoration-line-bottom">Contactez nous</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container position-relative">
            <div class="row align-items-center mb-7">
                <div class="col-xxl-6 col-lg-5 md-mb-15 sm-mb-20 text-center text-lg-start">
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Processus simple</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-2px mb-40px">Comprendre la structuration d'un projet d'entreprise.</h3>
                    <div class="row row-cols-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Préparation et planification</span>
                                    <p class="w-90 lg-w-100 lh-32">Analyser la faisabilité, définir les objectifs, élaborer le business plan, et mobiliser les ressources nécessaires.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-30px">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Mise en œuvre et exécution</span>
                                    <p class="w-90 lg-w-100 lh-32">Establish the company, develop products or services, and launch commercial activities.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box xs-mb-30px">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray mb-5px fs-18">Suivi, croissance et pérennisation</span>
                                    <p class="w-90 lg-w-100 lh-32">Évaluer les performances, optimiser les opérations, et assurer la croissance durable de l’entreprise.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->
                    </div>
                </div>
                <div class="col-lg-5 offset-xxl-1 position-relative md-mb-30px sm-mb-15"
                     data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="{{ asset('images/demo-corporate-10.webp') }}" class="position-relative z-index-9 top-40px" alt="">
                    <img src="{{ asset('images/demo-corporate-03.png') }}" class="absolute-middle-center xs-w-95" alt="">
                    <img src="{{ asset('images/placeholder.com/144x64') }}" class="position-absolute top-50px left-0px xs-left-15px"
                         data-bottom-top="transform: translateY(-50px)') }}" data-top-bottom="transform: translateY(50px)"
                         alt="">
                    <img src="{{ asset('images/placeholder.com/67x34') }}" class="position-absolute top-150px left-30"
                         data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                         alt="">
                    <img src="{{ asset('images/placeholder.com/61x30') }}" class="position-absolute top-50px right-30"
                         data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                         alt="">
                    <img src="{{ asset('images/placeholder.com/93x45') }}"
                         class="position-absolute top-100px right-0px xs-right-15px"
                         data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                         alt="">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center align-items-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</div>
                    <div class="fs-18 fw-500 text-dark-gray d-inline-block align-middle">Ensemble, transformons votre idée en entreprise concrète et formidable. <a href="{{ route('contact') }}" class="text-dark-gray text-decoration-line-bottom fw-700">Vous avez un projet en tête ?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
        <div class="container background-no-repeat background-position-top"
             style="background-image: url({{ asset('images/demo-corporate-bg-02.png') }})">
            <div class="row justify-content-center mb-3">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Avis de Certains de Nos Bénéficiaires</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 position-relative ps-8 pe-8 lg-ps-15px lg-pe-15px">
                    <div class="swiper magic-cursor testimonials-style-06" data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img src="{{ asset('images/logos/mossani-logo.png') }}"  alt="">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block">
                                            <span class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</span>

                                        </a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">L'accompagnement technique m'a beaucoup aidé à mieux
                                            gérer mes employés et à recruter au poste clés de la
                                            structure. Avec les logiciels de gestion clientèle, de gestion de
                                            Stock et de gestion de trésorerie qui m'ont été données, je
                                            gère mieux ma structure.</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">BANIAB Mossani
                                            , Mossani Food
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img src="{{ asset('images/logos/ADHOC-logo.png') }}"  alt="">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block">
                                            <span class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</span>

                                        </a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Un espace coworking exceptionnel
                                            BHC est bien plus qu'un simple espace de travail. C'est un lieu
                                            qui favorise la créativité, la collaboration et la productivité. Les
                                            bureaux sont modernes et bien équipés, l'ambiance est
                                            chaleureuse, et l'équipe est toujours à l'écoute pour répondre
                                            aux besoins. En tant qu'agence Adhoc, nous sommes ravis de
                                            travailler dans un environnement aussi inspirant et
                                            professionnel. Je recommande vivement à tous ceux qui
                                            cherchent un espace de coworking conviviale..</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">NOUGBESOU Komi
                                            , Adhoc
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img src="{{ asset('images/logos/all-packing-logo.png') }}"  alt="">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block">
                                            <span class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</span>

                                        </a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Grâce à l’accompagnement personnalisé de BHC Lab,
                                            Allpackaging franchit un nouveau cap dans son développement. Nous sommes confiants que cet accompagnement nous permettra de structurer solidement notre projet et de le faire
                                            évoluer vers de nouveaux horizons.
                                            Nous avons hâte de poursuivre cette collaboration.</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">PANASSIM E. ELLA
                                            , AllPacking
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img src="{{ asset('images/logos/tsevie-dzomi-logo.png') }}"  alt="">

                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block">
                                            <span class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</span>

                                        </a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Vos accompagnements financier m'ont permis de produire et
                                            participer à la foire Togo 2000 de l'année 2022 et la foire
                                            Miadé à Tsévié en 2023. J'ai beaucoup apprécié le délai de
                                            traitement qui a été très bon et rapide ainsi que les conditions
                                            d'obtention de fonds qui ont été très flexible</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">DOSSAH Aku Dodzi, TSEVIE DZOMI
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img src="{{ asset('images/logos/marmite-logo.png') }}"  alt="">

                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block">
                                            <span class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">BHC lab</span>

                                        </a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">Avec des formations précises sur le management, le
                                            marketing, la communication, la gestion comptable et
                                            fiscale accompagné d’un appui financier du programme
                                            ENTRAIDE , l'incubateur BHC LAB m’a bien outillé pour
                                            relever mon entreprise.</span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">BOUE Essohanam, ECO ENERGY & STOVE</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev md-left-0px"><i class="feather icon-feather-arrow-left icon-extra-medium text-dark-gray"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next md-right-0px"><i class="feather icon-feather-arrow-right icon-extra-medium text-dark-gray"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 justify-content-center mb-6 md-mb-8 sm-mb-45px" data-anime='{ "el": "childs", "willchange": "transform", "perspective": [1200,1200], "translateY": [0, 0], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 1000, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col sm-mb-30px">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="{{ asset('images/img-0001.png') }}"  class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 p-15px last-paragraph-no-margin">
                            <p>Accompagnement de projet - <span class="fw-600 text-dark-gray">275%  </span></p>
                        </div>
                    </div>
                </div>
                <div class="col sm-mb-30px">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="{{ asset('images/img-0002.png') }}"  class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                            <p>Management - <span class="fw-600 text-dark-gray">195%  </span></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white h-100 border-radius-6px text-center box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                        <div class="pt-10 pb-10">
                            <img src="{{ asset('images/img-0003.png') }}"  class="h-40px md-h-35px sm-h-40px" alt="" />
                        </div>
                        <div class="border-top fs-16 border-1 border-color-extra-medium-gray p-15px last-paragraph-no-margin">
                            <p>Total Investissement - <span class="fw-600 text-dark-gray">235%  </span></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row  clients-style-06 justify-content-center ps-3 pe-3 xs-mt-40px" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

            {{-- <div class="row align-items-center mb-6"> --}}
                <div class="col-12" style="overflow: hidden; ">
                    <div class="outside-box-right-25 sm-outside-box-right-0">
                        <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 1000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 9 }, "992": { "slidesPerView": 9 }, "768": { "slidesPerView": 9 }, "320": { "slidesPerView": 9 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide" >
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/tsevie-dzomi-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                 <!-- start slider item -->
                                 <div class="swiper-slide" >
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/SIS-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/mossani-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/ADHOC-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/marmite-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/lion-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/k-empire-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/all-packing-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/ADHOC-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide" >
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/tsevie-dzomi-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start interactive banner item -->
                                    <div class="interactive-banner-style-09 border-radius-6px position-relative">
                                        <img src="{{ asset('images/logos/k-empire-logo.png') }}" alt="" />

                                    </div>
                                    <!-- end interactive banner item -->
                                </div>
                                <!-- end slider item -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="border-radius-6px h-450px md-h-350px sm-h-400px d-flex flex-wrap align-items-center justify-content-center overflow-hidden cover-background box-shadow-quadruple-large pt-15" style="background-image: url({{ asset('images/logos/bhc-logo.png') }})">
                        <div class="opacity-full-dark bg-gradient-regal-blue-transparent"></div>
                        <div class="row justify-content-center m-0">
                            <div class="col-lg-7 col-md-8 z-index-1 text-center text-md-start sm-mb-20px">
                                <h3 class="text-white mb-0 fw-400 fancy-text-style-4">Avec Business Help Consulting <span class="fw-600" data-fancy-text='{  "effect": "wave", "direction": "down",  "string": ["Vos projets prennent vie !", "Boostez votre entreprise!"] }'></span>
                                </h3>
                            </div>
                            <div class="col-md-2 position-relative z-index-1 text-center sm-mb-20px">
                                <a href="https://www.youtube.com/watch?v=Llo_zwxprXk" class="position-relative d-inline-block text-center border border-2 border-color-white rounded-circle video-icon-box video-icon-large popup-youtube">
                                    <span>
                                        <span class="video-icon">
                                            <i class="fa-solid fa-play fs-20 text-white"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="w-100 text-center position-relative mt-auto pt-20px pb-25px ps-15px pe-15px border-top border-color-transparent-white-light">
                            <div class="fs-14 text-uppercase text-white fw-600 ls-05px">Ensemble, transformons votre idée en entreprise concrète et formidable. <a href="{{ route('contact') }}" class="text-decoration-line-bottom text-white">Vous avez un projet en tête ?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 col-md-7 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Des services sur mesure</span>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Nos principaux services</h3>
                </div>
            </div>
            <div class="row align-items-end pricing-table-style-05 g-0 mb-6 background-position-center background-no-repeat justify-content-center" style="background-image: url({{ asset('images/demo-corporate-services-bg-02.png') }})">
                <div class="col-lg-4 col-md-8 md-mb-30px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="border-radius-6px position-relative overflow-hidden">
                        <div class="pricing-header pt-45px pb-10px border-radius-6px text-center position-relative top-minus-3px">
                            <span class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-13 lh-34 fw-700 border-radius-100px bg-solitude-blue d-inline-block">Espaces</span>
                            <h5 class="fw-700 mb-0 text-dark-gray alt-font">COWORKING/SALLES</h5>
                            <div class="pricing-body pt-35px">
                                <ul class="p-0 m-0 list-style-02 fw-500">
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100 me-10px" style="text-align: left !important;">Poste de travail en box privatif</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100 me-10px" style="text-align: left !important;">Connexion Internet (WiFi et Câble Ethernet)</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100 me-10px" style="text-align: left !important;">Assistance Technique</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100 me-10px" style="text-align: left !important;">Salle de Réunion</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--
                         <div class="row align-items-center pt-25px pb-25px">
                            <div class="col text-center last-paragraph-no-margin d-flex align-items-center justify-content-center">
                                <h3 class="alt-font text-dark-gray mb-0 me-15px fw-700 ls-minus-2px">$29</h3>
                                <p class="w-120px fs-15 lh-22 text-start">Per user/month billed annually*</p>
                            </div>
                        </div>
                        -->

                        <div class="pricing-footer ps-12 pe-12 pb-8 text-center">
                            <a href="demo-corporate-pricing.html" class="btn btn-large btn-dark-gray btn-box-shadow btn-hover-animation-switch btn-round-edge w-100 text-transform-none mb-15px">
                                <span>
                                    <span class="btn-text">Réserver</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <span class="fs-16">NOMADE | RÉSIDANT<br> _</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 " data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="bg-white border-radius-6px overflow-hidden position-relative box-shadow-double-large z-index-9">
                        <div class="p-10px fw-700 fs-14 text-white bg-gradient-flamingo-amethyst-green text-uppercase text-center">Populaire</div>
                        <div class="pricing-header pt-45px pb-10px bg-white border-radius-6px text-center position-relative top-minus-3px">
                            <span class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-13 lh-34 fw-700 border-radius-100px bg-solitude-blue d-inline-block">Appuis</span>
                            <h5 class="fw-700 mb-0 text-dark-gray alt-font">TECHNIQUE FINANCIER</h5>
                            <div class="pricing-body pt-35px">
                                <ul class="p-0 m-0 list-style-02 fw-500 text-center">
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left !important;">Passer à l'idée d'entreprise</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left !important;">Formations, Coaching</span>

                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left !important;">Mentoring, Conseils stratégiques</span>

                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left !important;">Mobilisation de fonds</span>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--

                        <div class="row align-items-center pt-25px pb-25px">
                            <div
                                class="col text-center last-paragraph-no-margin d-flex align-items-center justify-content-center">
                                <h3 class="alt-font text-white mb-0 me-15px fw-700 ls-minus-2px">$39</h3>
                                <p class="w-120px fs-15 lh-22 text-start">Per user/month billed annually*</p>
                            </div>
                        </div>
                        <div class="pricing-footer ps-12 pe-12 pb-8 text-center">
                            <a href="demo-corporate-pricing.html" class="btn btn-large btn-white btn-box-shadow btn-hover-animation-switch btn-round-edge w-100 text-transform-none mb-15px fw-700">
                                <span>
                                    <span class="btn-text">Join this plan </span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <span class="fs-16 text-white opacity-5 fw-300">Cancel anytime</span>
                        </div>
                        -->
                        <div class="pricing-footer ps-12 pe-12 pb-8 text-center">
                            <a href="demo-corporate-pricing.html" class="btn btn-large btn-dark-gray btn-box-shadow btn-hover-animation-switch btn-round-edge w-100 text-transform-none mb-15px">
                                <span>
                                    <span class="btn-text">Rejoindre</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <span class="fs-16">PREINCUBATION | INCUBATION  | ACCELERATION</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 md-mb-30px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="border-radius-6px position-relative overflow-hidden">
                        <div class="pricing-header pt-45px pb-10px border-radius-6px text-center position-relative top-minus-3px">
                            <span class="ps-25px pe-25px mb-15px text-uppercase text-base-color fs-13 lh-34 fw-700 border-radius-100px bg-solitude-blue d-inline-block">DOMICILIATION</span>
                            <h5 class="fw-700 mb-0 text-dark-gray alt-font">PHYSIQUE / VIRTUELLE</h5>
                            <div class="pricing-body pt-35px">
                                <ul class="p-0 m-0 list-style-02 fw-500 text-center ">
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex w-100 align-self-center justify-content-center  me-10px" >Utiliser notre adresse comme :</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left;">Adresse du siège social de votre entreprise</span>
                                    </li>
                                    <li class="pt-15px pb-15px ps-12 pe-12 border-top border-color-extra-medium-gray text-dark-gray lg-ps-10 lg-pe-10">
                                        <span class="d-flex align-self-center justify-content-center bg-green h-20px w-20px border-radius-100 ps-10px pe-10px me-10px "><i class="bi bi-check align-self-center text-white fs-14 d-flex"></i></span>
                                        <span class="d-flex w-100   me-10px" style="text-align: left;">Accéder à la grande pour vos réunions ou formation à des prix préférentiels</span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--


                        <div class="row align-items-center pt-25px pb-25px">
                            <div
                                class="col text-center last-paragraph-no-margin d-flex align-items-center justify-content-center">
                                <h3 class="alt-font text-dark-gray mb-0 me-15px fw-700 ls-minus-2px">$59</h3>
                                <p class="w-120px fs-15 lh-22 text-start">Per user/month billed annually*</p>
                            </div>
                        </div>
                          -->
                        <div class="pricing-footer ps-12 pe-12 pb-8 text-center">
                            <a href="demo-corporate-pricing.html"
                               class="btn btn-large btn-dark-gray btn-box-shadow btn-hover-animation-switch btn-round-edge w-100 text-transform-none mb-15px">
                                <span>
                                    <span class="btn-text">Contacter</span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a>
                            <span class="fs-16">DOMICILIATION PHYSIQUE<br> (sur discussions)</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 justify-content-center align-items-center">
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 sm-mb-25px text-center text-sm-start md-mb-30px">
                    <div class="d-flex justify-content-center">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-calendar-check fs-20 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fw-600 text-dark-gray">Réservation d'espace</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 sm-mb-25px text-center text-sm-start md-mb-30px">
                    <div class="d-flex justify-content-center">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-person-plus fs-20 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fw-600 text-dark-gray">Rejoindre nos cohortes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 text-center text-sm-start">
                    <div class="d-flex justify-content-center">
                        <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                            <div class="feature-box-icon me-10px">
                                <i class="bi bi-person-lines-fill fs-20 text-dark-gray"></i>
                            </div>
                            <div class="feature-box-content">
                                <span class="fw-600 text-dark-gray">Collaborez avec nous</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px pb-0">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center"
                     data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">Articles d'actualité</h3>
                </div>
            </div>
            <div class="row mb-5 sm-mb-7">
                <div class="col-12">
                    @if($articles->count() < 3 )
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="{{ route('blogs.show', 'new') }}" class="d-block"><img src="{{ asset('images/demo-corporate-blog-01.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Santé</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="{{ route('blogs.show', 'new') }}" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">Adoptez des habitudes saines pour une vie équilibrée.</a>
                                    <p>Découvrez comment des changements simples dans votre routine peuvent améliorer votre bien-être au quotidien</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">15 Novembre 2024</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">Par <a href="" class="text-dark-gray text-decoration-line-bottom">Business Help Consulting</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">#</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="{{ route('blogs.show', 'new') }}" class="d-block"><img
                                            src="{{ asset('images/demo-corporate-blog-02.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html"
                                           class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">MARKETING</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="{{ route('blogs.show', 'new') }}" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">Intégrez les tendances saisonnières dans vos campagnes.</a>
                                    <p>Apprenez à tirer parti des événements saisonniers pour booster l’impact de vos stratégies marketing</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">10 Novembre 2024</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">Par <a href="" class="text-dark-gray text-decoration-line-bottom">Business Help Consulting</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">#</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <div
                                class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="{{ route('blogs.show', 'new') }}" class="d-block"><img src="{{ asset('images/demo-corporate-blog-03.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">AFFAIRES</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="{{ route('blogs.show', 'new') }}" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">Renforcez vos relations publiques pour un meilleur impact.</a>
                                    <p>Des conseils pratiques pour construire une image positive et établir des connexions significatives.</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">8 Novembre 2024</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">Par <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Business Help Consulting</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">#</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                    </ul>
                    @else
                    <ul class="blog-gridk blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @foreach ( $articles as $article )


                        <!-- start blog item -->
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="{{ route('blogs.show', $article->id) }}" class="d-block"><img src="{{ asset('images/demo-corporate-blog-01.jpg') }}" alt="" /></a>
                                    <div class="blog-categories">
                                        <a href="demo-corporate-blog.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase fw-700">Santé</a>
                                    </div>
                                </div>
                                <div class="card-body p-12 lg-p-10">
                                    <a href="{{ route('blogs.show', $article->id) }}" class="card-title mb-15px fw-700 fs-19 text-dark-gray d-inline-block w-90 md-w-100">Adoptez des habitudes saines pour une vie équilibrée.</a>
                                    <p>{{$article->title}}</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">15 Novembre 2024</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">Par <a href="" class="text-dark-gray text-decoration-line-bottom">Business Help Consulting</a></div>
                                        </div>
                                        <div class="like-count">
                                            <a href="#"><i class="fa-regular fa-heart text-red"></i><span class="text-dark-gray align-middle fw-700">#</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                        @endforeach

                    </ul>
                    @endif
                </div>
            </div>
            <!--
            <div class="row mb-7 sm-mb-9" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col text-center">
                    <div class="fs-26 sm-fs-22 sm-lh-30 fw-600 ls-minus-1px text-dark-gray d-inline-block align-middle me-20px md-m-10px md-mt-0">What do people say about our services?</div>
                    <a href="https://www.trustpilot.com/" target="_blank"><img src="{{ asset('images/placeholder.com/416x44') }}" class="d-inline-block align-middle" alt=""></a>
                </div>
            </div>
            -->
        </div>
    </section>
    <!-- end section -->
@endsection

@push('scripts')
   <!-- slider revolution core javaScript files -->
   <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.tools.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.revolution.min.js') }}"></script>
   <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
   <!-- <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.actions.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.carousel.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.migration.min.js') }}"></script>
   <script type="text/javascript" src=" asset('r/js/extensions/revolution.extension.video.min.js') }}"></script> -->
   <script type="text/javascript" src=" {{ asset('r/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
   <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
   <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.navigation.min.js') }}"></script>
   <script type="text/javascript" src="{{ asset('r/js/extensions/revolution.extension.parallax.min.js') }}"></script>


   <!-- Slider's main "init" script -->
   <script>
       var tpj = jQuery;
       var revapi7;
       var $ = jQuery.noConflict();
       tpj(document).ready(function () {
           if (tpj("#demo-corporate-slider").revolution == undefined) {
               revslider_showDoubleJqueryError("#demo-corporate-slider");
           } else {
               revapi7 = tpj("#demo-corporate-slider").show().revolution({
                   sliderType: "standard",
                   /* sets the Slider's default timeline */
                   delay: 9000,
                   /* options are 'auto', 'fullwidth' or 'fullscreen' */
                   sliderLayout: 'fullscreen',
                   /* RESPECT ASPECT RATIO */
                   autoHeight: 'off',
                   /* options that disable autoplay */
                   stopLoop: "off",
                   stopAfterLoops: -1,
                   stopAtSlide: -1,
                   navigation: {
                       keyboardNavigation: 'on',
                       keyboard_direction: 'horizontal',
                       mouseScrollNavigation: 'off',
                       mouseScrollReverse: 'reverse',
                       onHoverStop: 'off',
                       arrows: {
                           enable: true,
                           style: 'hesperiden',
                           rtl: false,
                           hide_onleave: false,
                           hide_onmobile: true,
                           hide_under: 500,
                           hide_over: 9999,
                           hide_delay: 200,
                           hide_delay_mobile: 1200,
                           left: {
                               container: 'slider',
                               h_align: 'left',
                               v_align: 'center',
                               h_offset: 50,
                               v_offset: 0
                           },
                           right: {
                               container: 'slider',
                               h_align: 'right',
                               v_align: 'center',
                               h_offset: 50,
                               v_offset: 0
                           }
                       },
                       bullets: {

                           enable: true,
                           style: 'hermes',
                           tmp: '',
                           direction: 'horizontal',
                           rtl: false,

                           container: 'layergrid',
                           h_align: 'center',
                           v_align: 'bottom',
                           h_offset: 0,
                           v_offset: 30,
                           space: 12,

                           hide_onleave: false,
                           hide_onmobile: true,
                           hide_under: 0,
                           hide_over: 500,
                           hide_delay: true,
                           hide_delay_mobile: 500

                       },
                       touch: {
                           touchenabled: 'on',
                           touchOnDesktop: "on",
                           swipe_threshold: 75,
                           swipe_min_touches: 1,
                           swipe_direction: 'horizontal',
                           drag_block_vertical: true
                       }
                   },
                   responsiveLevels: [1240, 1024, 768, 480],
                   visibilityLevels: [1240, 1024, 768, 480],
                   gridwidth: [1240, 1024, 768, 480],
                   gridheight: [930, 850, 900, 850],
                   /* Lazy Load options are "all", "smart", "single" and "none" */
                   lazyType: "smart",
                   spinner: "spinner0",
                   parallax: {
                       type: "scroll",
                       origo: "slidercenter",
                       speed: 400,
                       levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 5],
                   },
                   shadow: 0,
                   shuffle: "off",
                   fullScreenAutoWidth: "on",
                   fullScreenAlignForce: "on",
                   fullScreenOffsetContainer: "nav",
                   fullScreenOffset: "",
                   hideThumbsOnMobile: "off",
                   hideSliderAtLimit: 0,
                   hideCaptionAtLimit: 0,
                   hideAllCaptionAtLilmit: 0,
                   debugMode: false,
                   fallbacks: {
                       simplifyAll: "off",
                       nextSlideOnWindowFocus: "off",
                       disableFocusListener: false,
                   }
               });
           }
       }); /*ready*/
   </script>
@endpush
