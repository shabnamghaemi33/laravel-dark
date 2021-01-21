@extends('welcome')

@section('content')
<div class="md:mr-20 bg-transparent w-9/10 mx-auto">
    <div class="w-full flex flex-row-reverse">
        <div class="px-16 w-full mt-14 md:mt-0">
            <div class="dashboard my-7">
                <div class="dashboard-header md:flex md:flex-row-reverse">
                    <div class="pixel:block pixel:mx-auto md:mx-0 md:inline-block w-16">
                        <img src="./img/8.jpg" alt="logo" class="rounded-full pixel:w-24 md:w-70">
                    </div>
                    <div class="greeting inline-block md:mr-4 pixel:mx-auto">
                        <h3 class="text-2xl text-gray-700 md:text-right pixel:text-center"> خوش اومدی کاربر </h3>
                        <p class="md:text-right pixel:text-center text-base text-gray-500"> ما خیلی خوشحالیم که شما را دوباره در صفحه داشبورد می بینیم. </p>
                    </div>
                    <!-- greeting btns -->
                    <div class="flex items-center mr-auto">
                        <button class="px-5 py-2 bg-purple-700 hover:bg-purple-800 mr-2 text-white focus:outline-none text-sm rounded"> مدیریت فروشگاه </button>
                        <button class="px-5 py-2 text-sm bg-white mr-2 rounded border focus:outline-none hover:border-gray-400 transition-all text-gray-700"> مشاهده گزارشات </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('dashboard')
    داشبورد
@endsection