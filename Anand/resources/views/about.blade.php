@extends("layouts.main")

@section("about-content")
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <h1 style="font-size:3.5vw;color:#0A0D31" class="text-center font-weight-bold">
                Dedicated&nbsp;to&nbsp;delivering<br>excellence</h1>
            <p class="text-center" style="color:#666666;font-size:1.4rem">Everyone has a story. Here is ours.</p>
        </div>
        <div class="col-md-6 mt-5 mb-5 d-flex">
            <img src="{{asset('about1.jpg')}}" class="mx-auto" width="300vw" alt="">
        </div>
        <div class="col-md-6 mt-5 d-flex">
            <div class="row">

                <div class="col-md-12 mx-md-auto mx-5 pl-5">
                    <h4 class="text-center">The Begining</h4>
                    <p style="color:#666666;font-size:0.98rem;">
                        We&nbsp;embarked&nbsp;on&nbsp;our&nbsp;journey&nbsp;in&nbsp;1994&nbsp;with&nbsp;a<br>solid&nbsp;business&nbsp;plan&nbsp;centered&nbsp;around&nbsp;CPUs<br>and&nbsp;memory&nbsp;devices.&nbsp;Initially,&nbsp;we&nbsp;entered<br>the&nbsp;market&nbsp;by&nbsp;selling&nbsp;branded&nbsp;memory<br>devices,&nbsp;and&nbsp;over&nbsp;time,&nbsp;we&nbsp;expanded&nbsp;our<br>offerings&nbsp;to&nbsp;include&nbsp;services&nbsp;such&nbsp;as&nbsp;data<br>recovery&nbsp;and&nbsp;solutions&nbsp;for&nbsp;memory&nbsp;devices.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-5 d-flex flex-column align-items-center justify-content-end">
            <!-- <div class="col-md-9 mx-auto"> -->
            <h4>Mission</h4>
            <p style="color:#666666;font-size:0.98rem;">
                At&nbsp;AnandIT&nbsp;Infotech,&nbsp;our&nbsp;mission&nbsp;is&nbsp;to<br>evolve&nbsp;and&nbsp;adapt&nbsp;to&nbsp;the&nbsp;dynamic&nbsp;world&nbsp;of<br>technology&nbsp;continuously.&nbsp;Since&nbsp;our<br>establishment&nbsp;in&nbsp;1994,&nbsp;we’ve&nbsp;grown&nbsp;into&nbsp;a<br>trusted&nbsp;provider&nbsp;of&nbsp;complete&nbsp;IT&nbsp;Solutions.<br>From&nbsp;Basic&nbsp;IT&nbsp;devices&nbsp;to&nbsp;the&nbsp;Latest&nbsp;VR<br>products&nbsp;and&nbsp;robotics&nbsp;products.
            </p>
            <!-- </div> -->
        </div>
        <div class="col-md-6 d-flex">
            <img src="{{asset('about2.jpg')}}" class="mx-auto" width="300vw" alt="">
        </div>
        <div class="col-md-6 mt-5 mb-5 d-flex">
            <img src="{{asset('about3.jpg')}}" class="mx-auto" width="300vw" alt="">
        </div>
        <div class="col-md-6 mt-5 d-flex">
            <div class="col-md-9 mx-auto d-flex flex-column">
                <h4 class="text-center">We are global</h4>
                <p class="mx-auto" style="color:#666666;font-size:0.98rem;">
                    AnandIT&nbsp;Infotech&nbsp;is&nbsp;a&nbsp;global&nbsp;solutions<br>provider,&nbsp;serving&nbsp;clients&nbsp;worldwide.&nbsp;Our<br>commitment&nbsp;to&nbsp;delivering&nbsp;top-notch<br>technology&nbsp;solutions&nbsp;extends&nbsp;across<br>borders,&nbsp;making&nbsp;us&nbsp;a&nbsp;trusted&nbsp;partner&nbsp;on&nbsp;a<br>global&nbsp;scale.&nbsp;We&nbsp;serve&nbsp;in&nbsp;Singapore,<br>Hong&nbsp;Kong,&nbsp;and&nbsp;Taiwan.
                </p>
            </div>
        </div>
    </div>
    <style>
        .para{
            font-size:1.3rem;color:#5F6567;
        }
        @media(max-width:600px){
            .para{
                color:#5F6567;
            }
        }
    </style>
    <div class="row my-5">
        <div class="col-md-12 ml-5 pl-5">
            <span class="px-2 py-2 mx-5 border-none outline-none"
                style="font-size:0.7rem; background-color: #F5F5F5;color:#5F6567">ABOUT</span><br><br>
        </div>
        <div class="col-md-12 mx-md-5 px-md-5">
            <p class=" para mx-md-5 px-md-4">
                Founded&nbsp;in&nbsp;1994,&nbsp;AnandIT&nbsp;Infotech&nbsp;has&nbsp;forged&nbsp;a&nbsp;path&nbsp;for&nbsp;long-term&nbsp;success&nbsp;by&nbsp;adhering<br>to&nbsp;a&nbsp;profound&nbsp;business&nbsp;plan&nbsp;initially&nbsp;centered&nbsp;around&nbsp;CPUs&nbsp;and&nbsp;memory&nbsp;devices.&nbsp;Our<br>journey&nbsp;began&nbsp;with&nbsp;the&nbsp;distribution&nbsp;of&nbsp;branded&nbsp;memory&nbsp;devices,&nbsp;but&nbsp;we&nbsp;quickly&nbsp;diversified,<br>offering&nbsp;services&nbsp;such&nbsp;as&nbsp;data&nbsp;recovery&nbsp;and&nbsp;comprehensive&nbsp;memory&nbsp;solutions.&nbsp;As&nbsp;an&nbsp;ISO-<br>ertified&nbsp;company,&nbsp;we&nbsp;extend&nbsp;our&nbsp;expertise&nbsp;to&nbsp;the&nbsp;corporate&nbsp;sector&nbsp;as&nbsp;a&nbsp;trusted&nbsp;provider&nbsp;of<br>computer&nbsp;hardware&nbsp;solutions.&nbsp;Notably,&nbsp;we&nbsp;hold&nbsp;the&nbsp;prestigious&nbsp;position&nbsp;of&nbsp;All&nbsp;India<br>Authorized&nbsp;distributor&nbsp;for&nbsp;esteemed&nbsp;brands&nbsp;like&nbsp;Realwear,&nbsp;Transcend,&nbsp;ADATA,&nbsp;Patriot<br>Memory,&nbsp;BIOSTAR,&nbsp;and&nbsp;Estimote.&nbsp;We’ve&nbsp;also&nbsp;expanded&nbsp;into&nbsp;the&nbsp;AR/VR&nbsp;industrial<br>solutions&nbsp;space,&nbsp;providing&nbsp;complete&nbsp;remote&nbsp;mentoring&nbsp;and&nbsp;training&nbsp;solutions.&nbsp;Serving&nbsp;as<br>regional&nbsp;distributors&nbsp;and&nbsp;resellers&nbsp;of&nbsp;IT&nbsp;products&nbsp;for&nbsp;numerous&nbsp;leading&nbsp;brands&nbsp;in<br>Karnataka,&nbsp;AnandIT&nbsp;Infotech&nbsp;is&nbsp;the&nbsp;premium&nbsp;dealer&nbsp;for&nbsp;mobile&nbsp;and&nbsp;communication&nbsp;devices<br>from&nbsp;renowned&nbsp;manufacturers.&nbsp;Our&nbsp;dedication&nbsp;to&nbsp;excellence&nbsp;and&nbsp;commitment&nbsp;to<br>innovation&nbsp;continue&nbsp;to&nbsp;drive&nbsp;our&nbsp;success&nbsp;in&nbsp;the&nbsp;ever-evolving&nbsp;technology&nbsp;landscape
            </p>
        </div>
    </div>

</div>
<div class="px-md-5 mx-md-5">
    <div class="p-md-5 mx-4 d-none d-md-block" style="background-color: #242627;height:50vh">
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-sm text-white font-weight-bold"
                    style="background-color:#1F2021;font-size:0.7em">WHAT WE DO</button><br><br><br><br><br><br>
                <p class="font-weight-bold" style="font-size:3em;color:#DEE0FF">
                    Simplifying&nbsp;IT<br>for&nbsp;a&nbsp;complex&nbsp;world</p>

            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 overflow-hidden">
                <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" width="291" height="294" viewBox="0 0 291 294">
                    <path
                        d="m145.48 18.18-9-9 9-9 9 9-9 9m0 33-7-7 7-7 7 7-7 7m0 34-6-6 6-6 6 6-6 6m-.5 34-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m.5 35-4-4 4-4 4 4-4 4m-18-120-8-8 8-8 8 8-8 8m.5 34-6.5-6.5 6.5-6.5 6.5 6.5-6.5 6.5m-.5 34-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m-17.5-120-7-7 7-7 7 7-7 7m0 34-6-6 6-6 6 6-6 6m-.5 34-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m-17.5-120-6.5-6.5 6.5-6.5 6.5 6.5-6.5 6.5m-.5 34-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m-.5 35-3-3 3-3 3 3-3 3m-18-121-6-6 6-6 6 6-6 6m.5 34-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m-.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m-17.5-121-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m-.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m.5 35-3-3 3-3 3 3-3 3m0 34-2-2 2-2 2 2-2 2m-17.5-121-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m-.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m-.5 35-2-2 2-2 2 2-2 2m-18-122-4-4 4-4 4 4-4 4m.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m-.5 35-3-3 3-3 3 3-3 3m0 34-2-2 2-2 2 2-2 2m0 36-2-2 2-2 2 2-2 2m-17-122-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m-.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m.5 35-2-2 2-2 2 2-2 2m-.5 35-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5m159.5-259-8-8 8-8 8 8-8 8m-.5 34-6.5-6.5 6.5-6.5 6.5 6.5-6.5 6.5m.5 34-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m-.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m17.5-120-7-7 7-7 7 7-7 7m0 34-6-6 6-6 6 6-6 6m.5 34-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m-.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m17.5-120-6.5-6.5 6.5-6.5 6.5 6.5-6.5 6.5m.5 34-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m-.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m.5 35-3-3 3-3 3 3-3 3m18-121-6-6 6-6 6 6-6 6m-.5 34-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m-.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m17.5-121-5-5 5-5 5 5-5 5m0 34-4-4 4-4 4 4-4 4m.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m-.5 35-3-3 3-3 3 3-3 3m0 34-2-2 2-2 2 2-2 2m17.5-121-4.5-4.5 4.5-4.5 4.5 4.5-4.5 4.5m.5 35-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m-.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m.5 35-2-2 2-2 2 2-2 2m18-122-4-4 4-4 4 4-4 4m-.5 35-3.5-3.5 3.5-3.5 3.5 3.5-3.5 3.5m.5 35-3-3 3-3 3 3-3 3m0 34-2-2 2-2 2 2-2 2m0 36-2-2 2-2 2 2-2 2m17-122-4-4 4-4 4 4-4 4m0 34-3-3 3-3 3 3-3 3m.5 35-2.5-2.5 2.5-2.5 2.5 2.5-2.5 2.5m-.5 35-2-2 2-2 2 2-2 2m.5 35-1.5-1.5 1.5-1.5 1.5 1.5-1.5 1.5"
                        fill="#DEE0FF" fill-rule="evenodd"></path>
                </svg>
            </div>
        </div>
    </div>
</div>
<div class="px-md-5 mx-md-5 d-none d-md-block">
    <div class="p-md-5 mx-4" style="background-color: #white;height:50vh">
        <div class="row">
            <ul class="list-unstyled d-flex ">
                <li class="mr-5">
                    <i class="fa-solid fa-bullseye" style="color:#FD4710;font-size:4rem"></i>
                    <h3 style="color:#0A0D31">Passionate</h3>
                    <p style="color:#666666;font-size:0.85rem">We are intensely enthusiastic about<br>providing a
                        superior experience.</p>
                </li>
                <li class="mx-4 pl-4">
                    <i class="fa-solid fa-house-flag" style="color:#FD4710;font-size:4rem"></i>
                    <h3 style="color:#0A0D31">Respectful</h3>
                    <p style="color:#666666;font-size:0.85rem;">We are polite and kind to one another,<br>even when it
                        gets tough.</p>
                </li>
                <li class="mx-4 pl-5">
                    <i class="fa-solid fa-trophy" style="color:#FD4710;font-size:4rem"></i>
                    <h3 style="color:#0A0D31">Ownership</h3>
                    <p style="color:#666666;font-size:0.85rem;">We are empowered to do our jobs and<br>work towards a
                        common goal.</p>
                </li>
                <li class="mx-4 pl-4">
                    <i class="fa-solid fa-tree" style="color:#FD4710;font-size:4rem"></i>
                    <h3 style="color:#0A0D31">Unified</h3>
                    <p style="color:#666666;font-size:0.85rem;">We work as a team and trust each other<br>to create a
                        seamless experience.</p>
                </li>

            </ul>
        </div>
    </div>
</div>
<div class="px-md-5 mx-md-5">
    <div class="p-md-5 mx-4" style="background-image:linear-gradient(90deg,#E9E6EF 0%,#B4C8E6 100%);height:50vh">
        <div class="row py-5">
            <div class="col-md-12">
                <p style="font-size:3rem;font-weight:bold;text-align:center">A team built on experience</p>
                <p style="color:#56585E" class="text-center">We’re continuing to build our network nationally, bringing
                    together a vibrant team with best-in-class<br>service and technical skills alike. With more than 800
                    employees across the US, our team is<br>growing fast.
                </p>
            </div>
            <div class="col-md-12 d-flex ">
                <button class="btn px-3 mx-auto text-white py-2" style="background-color: #FD4710;">Meet the
                    team</button>
            </div>

        </div><br><br><br>
    </div>
</div><br><br>
<div class="container d-none d-md-block"
    style="height:22vh;background-image:url({{asset('company.png')}});background-size:100% 100%;background-repeat:no-repeat">
</div>
<div class="pt-5 px-5 pb-2 mx-5">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="py-4">
                        Better Together
                    </h1>
                </div>
                <div class="col-md-12 d-none d-md-block">
                    <p>
                        We&nbsp;know&nbsp;that&nbsp;work&nbsp;is&nbsp;important,&nbsp;but&nbsp;so&nbsp;is&nbsp;play!&nbsp;We&nbsp;respect&nbsp;all&nbsp;of<br>our&nbsp;partnerships,&nbsp;and&nbsp;we&nbsp;make&nbsp;every&nbsp;effort&nbsp;to&nbsp;engage&nbsp;in&nbsp;fun<br>ways&nbsp;that&nbsp;solve&nbsp;critical&nbsp;problems&nbsp;and&nbsp;leave&nbsp;a&nbsp;smile&nbsp;on&nbsp;your&nbsp;face&nbsp;at<br>the&nbsp;same&nbsp;time.<br><br>We&nbsp;love&nbsp;our&nbsp;job&nbsp;and&nbsp;love&nbsp;helping&nbsp;our&nbsp;clients.&nbsp;Life&nbsp;is&nbsp;just&nbsp;too&nbsp;short<br>to&nbsp;not&nbsp;enjoy&nbsp;every&nbsp;minute!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mb-sm-5">
            <img src="{{asset('meeting.jpg')}}" width="100%" class="rounded">
        </div>
    </div>
</div>

@endsection