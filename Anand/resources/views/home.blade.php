@extends('layouts/main')
@section("imp-content")


<br>
<style>
    .bg_custom{
        background-image: url({{asset('anand-hero.jpg')}});
        background-repeat:no-repeat;
        background-size:cover;
        background-position:right center;
        height:68vh;
    }
    @media(max-width:600px) {
        .bg_custom{
            background-image: none;
            height: 180px;
        }
    }
</style>
<div class="p-md-5">
    <div class=" mx-4 rounded bg_custom"
        >
        <!-- <img src="{{asset('anand-hero.jpg')}}" class="rounded" width="100%" alt=""> -->
        <div class="row">
            <div class="col-md-7 bg-light  shadow-none" style="border-bottom-right-radius:22px;">
                <h1 style="font-size:1.3rem;line-height:auto;" class="font-weight-bold">
                    Pioneering&nbsp;in&nbsp;IT<br>Hardware&nbsp;Solutions<br> Since 1994
                </h1>

            </div>
            <div class="col-md-5"></div>
            <div class="col-md-7"
                style="background-image: linear-gradient(128deg, white 0%, white 79%, transparent 79%);">
                <p style="font-size:2vw" class="font-weight-normal">
                    ISO&nbsp;Certified&nbsp;and&nbsp;Trusted&nbsp;by&nbsp;Leading<br>Corporates,&nbsp;<br>Bodies</p>
                <button class="text-white font-weight-bold mr-2 px-4 py-3 btn d-none d-md-block"
                    style="background-color:#FD4710;font-size:0.85rem">Schedule a Free Consultation</button>
                <button class=" px-4 py-3 btn font-weight-bold d-none d-md-block"
                    style="color:#FD4710;background-color:rgb(222,224,255);font-size:0.85rem">Services</button><br><br>
            </div>
            <div class="col-md-5"></div>
        </div>
        <!-- <div class="elementor-widget-container"> -->

        <!-- </div> -->
    </div>
</div>
<b>
    <hr>
</b>
<div class="p-md-5">
    <ul class="list-unstyled d-flex">
        <li class="mx-auto">
            <p class="d-flex flex-column">
                <span class="d-none d-md-block">
                    <span style="font-size:0.8em">REVIEWED ON</span>
                    <i style="color: #FD4710;" class="fa-solid fa-star"></i><i style="color: #FD4710;"
                        class="fa-solid fa-star"></i><i style="color: #FD4710;" class="fa-solid fa-star"></i><i
                        style="color: #FD4710;" class="fa-solid fa-star"></i><i style="color: #FD4710;"
                        class="fa-solid fa-star"></i>
                </span>
                <span class="d-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="77px"
                        height="22px" viewBox="0 0 77 22">
                        <title>clutch-logo</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="IT-Services" transform="translate(-673.000000, -5597.000000)" fill-rule="nonzero">
                                <g id="Testimonials" transform="translate(374.000000, 5125.000000)">
                                    <g id="Clutch" transform="translate(299.000000, 454.000000)">
                                        <g id="clutch-co-vector-logo" transform="translate(0.000000, 18.000000)">
                                            <polygon id="Path" fill="#17313B"
                                                points="20.02 0 23.562 0 23.562 21.868 20.02 21.868"></polygon>
                                            <path
                                                d="M35.882,14.938 C35.882,18.326 33.11,18.634 32.186,18.634 C30.03,18.634 29.722,16.632 29.722,15.554 L29.722,7.084 L26.18,7.084 L26.18,15.4 C26.18,17.402 26.796,19.25 28.028,20.328 C29.106,21.406 30.492,21.868 32.186,21.868 C33.418,21.868 34.958,21.56 35.882,20.636 L35.882,21.868 L39.424,21.868 L39.424,7.084 L35.882,7.084 C35.882,7.084 35.882,14.938 35.882,14.938 Z"
                                                id="Path" fill="#17313B"></path>
                                            <polygon id="Path" fill="#17313B"
                                                points="46.354 1.694 42.812 1.694 42.812 7.084 40.194 7.084 40.194 10.472 42.812 10.472 42.812 21.868 46.354 21.868 46.354 10.472 48.972 10.472 48.972 7.084 46.354 7.084">
                                            </polygon>
                                            <path
                                                d="M60.06,17.402 C59.29,18.018 58.212,18.48 57.134,18.48 C54.67,18.48 52.976,16.632 52.976,14.168 C52.976,11.704 54.67,10.01 57.134,10.01 C58.212,10.01 59.29,10.318 60.06,11.088 L60.522,11.55 L62.986,9.24 L62.37,8.778 C60.984,7.546 59.136,6.776 57.134,6.776 C52.822,6.776 49.588,10.01 49.588,14.322 C49.588,18.634 52.822,21.868 57.134,21.868 C59.136,21.868 60.984,21.098 62.37,19.866 L62.986,19.404 L60.522,16.94 L60.06,17.402 Z"
                                                id="Path" fill="#17313B"></path>
                                            <path
                                                d="M75.46,8.316 C74.382,7.238 73.304,6.776 71.61,6.776 C70.378,6.776 69.146,7.084 68.222,8.008 L68.222,0 L64.68,0 L64.68,21.868 L68.222,21.868 L68.222,13.706 C68.222,10.318 70.532,10.01 71.456,10.01 C73.612,10.01 73.458,12.012 73.458,13.09 L73.458,21.714 L77,21.714 L77,13.244 C77,11.242 76.538,9.394 75.46,8.316 Z"
                                                id="Path" fill="#17313B"></path>
                                            <circle id="Oval" fill="#EF4335" cx="56.98" cy="14.322" r="2.464"></circle>
                                            <path
                                                d="M15.092,16.478 C13.86,17.71 12.012,18.48 10.01,18.48 C6.16,18.48 3.388,15.4 3.388,11.242 C3.388,7.084 6.16,4.004 10.164,4.004 C12.012,4.004 13.86,4.774 15.246,6.16 L15.708,6.622 L18.018,4.312 L17.556,3.85 C15.554,1.848 12.936,0.77 10.164,0.77 C4.312,0.616 0,5.236 0,11.242 C0,17.248 4.312,21.868 10.01,21.868 C12.782,21.868 15.554,20.79 17.402,18.788 L17.864,18.326 L15.554,16.016 L15.092,16.478 Z"
                                                id="Path" fill="#17313B"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <span class="d-none d-md-block">31 REVIEWS</span>
                </span>
            </p>
        </li>
        <li class="mx-auto d-none d-md-block">
            <p class="h2">29 <span class="h5">Years</span></p>
            <p class="h6 font-weight-normal">Proven Track Record</p>
        </li>
        <li class="mx-auto d-none d-md-block">
            <p class="h2">98 <span class="h5">%</span></p>
            <p class="h6 font-weight-normal">Customer Satisfaction</p>
        </li>
        <li class="mx-auto ">
            <p class="h2">1500 <span class="h5">Projects</span></p>
            <p class="h6 font-weight-normal">Completed</p>
        </li>
        <li class="mx-auto">
            <p class="h2">100+ <span class="h5">Crore</span></p>
            <p class="h6 font-weight-normal">Average Turnover</p>
        </li>
    </ul>
</div>
<div class="px-md-5 d-none d-md-block">
    <div class="p-md-5 mx-4" style="background-color: #FD4710;height:50vh">
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-sm text-white font-weight-bold"
                    style="background-color:#D73C0E;font-size:0.7em">WHAT WE DO</button><br><br><br><br><br><br>
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
<br>
@endsection
@section("middle-section")
<div class="container-fluid" style="background-color: #B1C7E6;">
    <div class="row">
        <div class="col-md-12">
            <div class="ml-md-5 pl-md-3 pt-5">
                <button class="btn btn-sm ml-md-5 ml-3 mt-2  font-weight-bold bg-light"
                    style="color:#5F6567;font-size:0.7em">SERVICES</button>
            </div>
        </div>
        <div class="col-md-12 ml-md-5">
            <p class="ml-md-5 mt-4 pl-3 h3 font-weight-bold">Solutions engineered to give you the edge</p>
        </div>

    </div>
</div>
<style>
    .bhel {
        font-weight: bold;
    }

    .bhel:hover {
        font-weight: bold;
        color: #FD4710;
    }
</style>
<div class="container-fluid" style="background-color: #B1C7E6;">
    <div class="row mx-md-5 px-md-5">
        @foreach ($cards as $row)
            <div class="col-md-4 mt-4">
                <div class="card">
                    <div class="card-header d-flex flex-column pt-0 px-0 border-none">
                        <img src="{{asset($row['image'])}}" class="w-100" alt="">
                        <h4 class="bhel ml-4 mt-3">{{$row['title']}}</h4>
                        <p class="ml-4">{{$row['description']}}</p>
                    </div>
                    <div class="card-footer">
                        <p class="font-weight-bold underline cursor-pointer" style="color:#FD4710;font-size: 0.8em;">
                            Learn&nbsp;more</p>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-12 d-flex">
            <button class="btn py-2 mx-auto my-5 text-white" style="background-color: #FD4710;">View All
                Solutions</button>
        </div>
    </div>

</div>
@include('contact-us')
<div class="p-5 ">
    <div class="row">
        <div class="col-md-6 d-flex">
            <div class="ml-5 pt-3 my-auto"
                style="background-color:white; width:85.4vw;border-top-right-radius: 10px;border-top-left-radius: 10px;">
                <button class="btn btn-sm ml-4 mb-3 mt-2  font-weight-bold "
                    style="color:#776567;font-size:0.7em;background-color: #F5F5F5;">HAPPY CLIENTS</button>
                <h1 style="font-size:3rem" class="font-weight-bold ml-4 mb-3">
                    Recognized by the best
                </h1>
                <p class="ml-4 mb-5" style="font-size: 1.3rem;color:#666666">
                    Our
                    clients’&nbsp;satisfaction&nbsp;is&nbsp;our&nbsp;top&nbsp;priority.&nbsp;We&nbsp;take<br>pride&nbsp;in&nbsp;delivering&nbsp;top-notch&nbsp;IT&nbsp;solutions&nbsp;that&nbsp;exceed<br>expectations,&nbsp;fostering&nbsp;long-lasting&nbsp;partnerships&nbsp;built<br>on&nbsp;trust&nbsp;and&nbsp;success.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{asset('companies.png')}}" class="mx-5 pl-3 mt-3" width="78%" alt="">
        </div>
    </div>
</div>

@endsection
<!-- style="background-image: linear-gradient(128deg, white 0%, white 83.4%, transparent 83.4%);" -->