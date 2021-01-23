@extends('welcome')

@section('list')
    <div class="px-16 w-full mt-4">
        <div class="flex justify-between flex-row-reverse">
            <div class="">
                <div class="flex m-2">
                    <button class="rounded-r-none bg-white focus:outline-none flex justify-center px-4 py-2 rounded text-md hover:bg-purple-100 cursor-pointer 
                        border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-medium">
                            ارتقاع&nbsp; &nbsp;
                            <i class="fa fa-check"></i>
                        </div>
                    </button>
                    <button class="trounded-l-none rounded-r-none bg-white border-l-0 border-r-0 focus:outline-none text-md hover:bg-purple-100 flex justify-center px-4 py-2 rounded cursor-pointer 
                    border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-medium">
                            ویرایش &nbsp; &nbsp;
                            <i class="fa fa-edit"></i>
                        </div>
                    </button>
                    <button class="rounded-l-none focus:outline-none bg-white flex justify-center px-4 py-2 rounded cursor-pointer hover:bg-purple-100
                        border duration-200 ease-in-out transition">
                        <div class="flex leading-5 font-medium">
                            انتقال &nbsp; &nbsp;
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </button>
                </div>
            </div>
            <div class="my-auto">
                <button
                    class="bg-purple-700 hover:bg-purple-800 transition-all text-white px-4 py-2 rounded-md text-sm focus:outline-none">
                    افزودن کاربر
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="mt-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 w-full align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="w-full divide-y rtl mb-4 rounded-md overflow-hidden ">
                                <thead class="bg-white dark:bg-gray-800">
                                    <tr class="dark:bg-gray-800">
                                        <th scope="col"
                                            class="px-2 w-6 py-3 border border-gray-200 text-left text-xs font-medium text-gray-500 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 min-w-6 w-box text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            تصویر کالا
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border min-w-6 w-48 border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="dark:text-gray-300">نام کالا</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 border min-w-6 w-48 border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="">کد کالا</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 border w-price border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            <div class="flex justify-between">
                                                <span class="">قیمت</span>
                                                <span class="">
                                                    <i class="fa fa-angle-double-down text-gray-500"></i>
                                                </span>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-1 py-3 w-24 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            موجودی
                                        </th>
                                        <th scope="col"
                                            class="px-2 py-3 min-w-6 w-52 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            دسته بندی
                                        </th>
                                        <th scope="col"
                                            class="px-6 w-empty py-3 text-center border border-gray-200 text-sm md:text-md font-bold text-gray-800">
                                            {{-- ویرایش --}}
                                        </th>
                                    </tr>

                                    <tr class="h-12 bg-gray-100  dark:bg-gray-800">
                                        <td class=""></td>
                                        <td class=""></td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <span
                                                    class="z-10 h-full leading-snug font-normal right-0 text-center text-gray-500 absolute bg-transparent rounded text-base items-center justify-center w-8 py-3">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <input type="text" placeholder="پیدا کردن کالا"
                                                    class="py-3 pr-10 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full" />
                                            </div>
                                        </td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <span
                                                    class="z-10 h-full leading-snug font-normal right-0 text-center text-gray-500 absolute bg-transparent rounded text-base items-center justify-center w-8 py-3">
                                                    <i class="fa fa-search"></i>
                                                </span>
                                                <input type="text" placeholder="پیدا کردن کالا"
                                                    class="py-3 pr-10 placeholder-gray-400 text-gray-700 relative bg-white rounded text-sm outline-none focus:outline-none focus:shadow-outline w-full" />
                                            </div>
                                        </td>
                                        <td class=""></td>
                                        <td class=""></td>
                                        <td class="px-4 py-4">
                                            <div class="relative ">
                                                <select name="" id=""
                                                    class="w-full text-center md:pr-2.5 outline-none h-11 cursor-pointer focus:outline-none text-gray-600">
                                                    <option value="بر اساس" class="text-center">
                                                        بر اساس
                                                    </option>
                                                    <option value="قیمت">
                                                        قیمت
                                                    </option>
                                                    <option value="موجود">
                                                        موجود
                                                    </option>
                                                </select>
                                            </div>
                                        </td>
                                        <td class=""></td>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    <tr class="h-sm cursor-pointer hover:bg-gray-50 transition-all">
                                        <td class="px-2 w-6 py-3 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative">
                                            <img src="./img/8.jpg" alt="logo" width="110" height="38"
                                                class="mx-auto w-24 h-10" />
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                کاناپه
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                717-56885
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                7500000
                                            </span>
                                            <span class="text-gray-800 text-sm">
                                                تومان
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                5
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                مبل راحتی
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <button
                                                class="px-2 py-1 rounded focus:outline-none hover:bg-gray-100 border border-gray-300">
                                                <i class="fa fa-edit text-md"></i>
                                                ویرایش
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="h-sm cursor-pointer hover:bg-gray-50 transition-all">
                                        <td class="px-2 w-6 py-3 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative">
                                            <img src="./img/8.jpg" alt="logo" width="110" height="38"
                                                class="mx-auto w-24 h-10" />
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                کاناپه
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                717-56885
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                7500000
                                            </span>
                                            <span class="text-gray-800 text-sm">
                                                تومان
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                5
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                مبل راحتی
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <button
                                                class="px-2 py-1 rounded focus:outline-none hover:bg-gray-100 border border-gray-300">
                                                <i class="fa fa-edit text-md"></i>
                                                ویرایش
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="h-sm cursor-pointer hover:bg-gray-50 transition-all">
                                        <td class="px-2 w-6 py-3 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative">
                                            <img src="./img/8.jpg" alt="logo" width="110" height="38"
                                                class="mx-auto w-24 h-10" />
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                کاناپه
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                717-56885
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                7500000
                                            </span>
                                            <span class="text-gray-800 text-sm">
                                                تومان
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                5
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                مبل راحتی
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <button
                                                class="px-2 py-1 rounded focus:outline-none hover:bg-gray-100 border border-gray-300">
                                                <i class="fa fa-edit text-md"></i>
                                                ویرایش
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="h-sm cursor-pointer hover:bg-gray-50 transition-all">
                                        <td class="px-2 w-6 py-3 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative">
                                            <img src="./img/8.jpg" alt="logo" width="110" height="38"
                                                class="mx-auto w-24 h-10" />
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                کاناپه
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                717-56885
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                7500000
                                            </span>
                                            <span class="text-gray-800 text-sm">
                                                تومان
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                5
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                مبل راحتی
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <button
                                                class="px-2 py-1 rounded focus:outline-none hover:bg-gray-100 border border-gray-300">
                                                <i class="fa fa-edit text-md"></i>
                                                ویرایش
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="h-sm cursor-pointer hover:bg-gray-50 transition-all">
                                        <td class="px-2 w-6 py-3 relative">
                                            <span
                                                class="w-6 h-6 bg-white flex rounded-full border border-gray-300 cursor-pointer"></span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative">
                                            <img src="./img/8.jpg" alt="logo" width="110" height="38"
                                                class="mx-auto w-24 h-10" />
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                کاناپه
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                717-56885
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                7500000
                                            </span>
                                            <span class="text-gray-800 text-sm">
                                                تومان
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                5
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <span class="text-gray-800 text-sm md:text-md">
                                                مبل راحتی
                                            </span>
                                        </td>
                                        <td class="px-2 w-6 py-3 relative text-center">
                                            <button
                                                class="px-2 py-1 rounded focus:outline-none hover:bg-gray-100 border border-gray-300">
                                                <i class="fa fa-edit text-md"></i>
                                                ویرایش
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- pagination --}}
                <div class="flex rtl justify-between pb-8">
                    <div class="text-md text-gray-600">
                        نمایش
                        <span class=""> 1 </span>
                        تا
                        <span class=""> 10 </span>
                        از
                        <span class=""> 16 </span>
                        محصول
                    </div>
                    <div class="">
                        <ul class="flex gap-2">
                            <li class="bg-purple-700 text-white rounded-full">
                                <i class="fa fa-angle-right px-2 py-1"></i>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full">
                                <a href="#" class="px-2 py-1">1</a>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full">
                                <a href="#" class="px-2 py-1">2</a>
                            </li>
                            <li class="bg-purple-700 text-white rounded-full">
                                <i class="fa fa-angle-left px-2 py-1"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('dashboard')
    کالا
@endsection
