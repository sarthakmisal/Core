@extends('layouts.main')
@section("team-section")
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 d-flex">
            <span class="mx-auto font-weight-bold" style="color:#5F6567;font-size:0.7rem">KNOW US</span>
        </div>
        <div class="col-md-12">
            <h1 style="font-size:3rem" class="mt-3 text-center font-weight-bold">OUR CORE TEAM</h1>
            <p class="text-center font-weight-bold" style="color:#5F6567;font-size:1rem">A dynamic blend of expertise,
                passion, and dedication, working together to drive innovation and deliver exceptional results.
            </p>
        </div>
        <div class="col-md-12">
            <ul class="list-unstyled d-flex">
                <li class="mx-auto">
                    <img src="{{asset('user.png')}}" width="250vw" style="border-radius:15px" alt="">
                    <h1 style="font-size:1.5rem;text-align:center">Shankar Patel</h1>
                    <p style="color:#666666;text-align:center">MD & Business Development​</p>
                    <p class="d-flex" style="color:#FF7D1B">
                    <span class="mx-auto cursor-pointer" style="font-size:1.6rem;text-align:center">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </span>
                    </p>
                </li>
                <li class="mx-auto">
                    <img src="{{asset('rama.png')}}" width="250vw" style="border-radius:15px" alt="">
                    <h1 style="font-size:1.5rem;text-align:center;">Savala Ram Patel​</h1>
                    <p style="color:#666666;text-align:center;">Founder & CEO</p>
                    <p class="d-flex" style="color:#FF7D1B">
                    <span class="mx-auto cursor-pointer" style="font-size:1.5rem;text-align:center;">
                        <i class=" fa-brands fa-facebook"></i>
                        <i class=" fa-brands fa-instagram"></i>
                        <i class=" fa-brands fa-linkedin"></i>
                    </span>
                    </p>
                </li>
                <li class="mx-auto">
                    <img src="{{asset('user.png')}}" width="250vw" style="border-radius:15px" alt="">
                    <h1 style="font-size:1.5rem;text-align:center">Navesh patel</h1>
                    <p style="color:#666666;text-align:center;">CEO</p>
                    <p class="d-flex" style="color:#FF7D1B">
                    <span class="mx-auto cursor-pointer" style="font-size:1.5rem;text-align:center;">
                        <i class=" fa-brands fa-facebook"></i>
                        <i class=" fa-brands fa-instagram"></i>
                        <i class=" fa-brands fa-linkedin"></i>
                    </span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div><br><br>
@include('contact-us')
<br><br><br><br><br>
@endsection