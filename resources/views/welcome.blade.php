<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v27.2.0/dist/font-face.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito';
        }

    </style>
</head>

<body>
    {{-- right menu on windows size --}}
    <div class="w-20 bg-gray-50 h-screen fixed right-0 pixel:hidden md:block dark:bg-gray-900">
        <div class="top-link h-14 flex align-items">
            <a href="/" class="flex mx-auto">
                <img src="./img/logo.svg" alt="main logo" class="top-logo h-9 my-auto" />
            </a>
        </div>
        <div class="bg-gray-50">
            <ul class="">
                <li class="w-20 h-14 flex items-center border-r-4 border-indigo-700 dark:bg-gray-900 ">
                    <a href="" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity sidebar-svg">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </a>
                </li>
                <li class="w-20 h-14 flex items-center dark:bg-gray-900">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid sidebar-svg">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </a>
                </li>
                <li class="w-20 h-14 flex items-center dark:bg-gray-900">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-box sidebar-svg">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-20 h-14 flex items-center  dark:bg-gray-900">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu sidebar-svg">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <line x1="9" y1="1" x2="9" y2="4"></line>
                            <line x1="15" y1="1" x2="15" y2="4"></line>
                            <line x1="9" y1="20" x2="9" y2="23"></line>
                            <line x1="15" y1="20" x2="15" y2="23"></line>
                            <line x1="20" y1="9" x2="23" y2="9"></line>
                            <line x1="20" y1="14" x2="23" y2="14"></line>
                            <line x1="1" y1="9" x2="4" y2="9"></line>
                            <line x1="1" y1="14" x2="4" y2="14"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-20 h-14 flex items-center dark:bg-gray-900">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-circle sidebar-svg">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
            <ul class="absolute bottom-2">
                <li class="w-20 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-search sidebar-svg">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-20 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 hover:text-indigo-700 animate-spin"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-settings sidebar-svg">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="">
                    <div class="relative">
                        <img src="./img/8.jpg" alt="profile" class="rounded-full w-14 mx-auto" />
                        <span class="w-3 h-3 bg-green-300 rounded-full absolute top-0 left-4"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    {{-- top menu on mobile size --}}
    <div class="h-14 bg-white block md:hidden fixed w-full">
        <div class="flex flex-row-reverse justify-between">
            <div class="relative w-14 h-14 text-center pr-4">
                <span class="w-4 h-px bg-gray-500 absolute top-4"></span>
                <span class="w-4 h-px bg-gray-500 absolute top-6"></span>
                <span class="w-4 h-px bg-gray-500 absolute top-8"></span>
            </div>
            <a href="#" class="flex items-center">
                <img src="./img/logo.svg" alt="logo" class="w-8 h-8 flex items-center">
            </a>
            <div class="flex items-center ml-4">
                <div class="inline-block mr-4">
                    <a href="#" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                    </a>
                </div>
                <div class="inline-block">
                    <img src="./img/8.jpg" alt="profile pic" class="w-8 h-8 rounded-full">
                </div>
            </div>
        </div>
    </div>
    {{-- right menu on mobile size --}}

    <div class="top-14 bg-white h-screen w-68 right-0 fixed hidden">
        <div class="w-14 absolute right-0 custom-menu-height">
            <ul class="">
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </a>
                </li>
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                    </a>
                </li>
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="6" height="6"></rect>
                            <line x1="9" y1="1" x2="9" y2="4"></line>
                            <line x1="15" y1="1" x2="15" y2="4"></line>
                            <line x1="9" y1="20" x2="9" y2="23"></line>
                            <line x1="15" y1="20" x2="15" y2="23"></line>
                            <line x1="20" y1="9" x2="23" y2="9"></line>
                            <line x1="20" y1="14" x2="23" y2="14"></line>
                            <line x1="1" y1="9" x2="4" y2="9"></line>
                            <line x1="1" y1="14" x2="4" y2="14"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
            <ul class="absolute bottom-0 right-0 w-full">
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </a>
                </li>
                <li class="w-14 h-14 flex items-center">
                    <a href="#" class="mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto text-gray-500" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path
                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                            </path>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        {{-- submenu from the right on mobile size --}}
        <div class="bg-gray-50 h-full custom-menu-width">
            <div class="rtl">
                <div class="pt-4 flex">
                    <div class="inline-block mr-4">
                        <h3 class="text-3xl font-medium text-gray-600">داشبورد</h3>
                    </div>
                </div>
                <div class="mt-4">
                    <ul class="">
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-2">
                            <div class="w-4/5 h-px flex items-center bg-gray-400 mr-2"></div>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-2">
                            <div class="w-4/5 h-px flex items-center bg-gray-400 mr-2"></div>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="h-9">
                            <div class="flex flex-row">
                                <a href="#"
                                    class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                                    <span class=""> دارایی </span>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="relative text-gray-500 transform rotate-180" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
                                </a>
                            </div>
                            <ul class="leading-8 hidden">
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                        <i class="fa fa-user ml-4"></i> شخصی اول
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی دوم
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#"
                                        class="flex flex-row mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                        <i class="fa fa-user ml-4"></i> شخصی سوم
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- submenu from the right on windows size --}}
    <div class="w-60 h-screen fixed bg-white right-20 hidden">
        <div class="px-5">
            <div class="mt-4 mx-auto items-center flex flex-row-reverse">
                <div class="cursor-pointer inline-block mr-4">
                    <span class="text-green-500 bg-green-200 px-3 py-2 rounded-full text-xs font-bold">H</span>
                </div>
                <div class="inline-block mr-4">
                    <h3 class="text-xl font-medium text-gray-400">داشبورد</h3>
                </div>
            </div>
        </div>
        <div class="w-60 relative mt-8">
            <ul class="leading-10">
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 rotate-180 transform"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی: اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> دارایی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="w-4/5 h-px flex items-center bg-gray-400 ml-8"></div>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="w-4/5 h-px flex items-center bg-gray-400 ml-8"></div>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="mb-5">
                    <div class="flex flex-row-reverse">
                        <a href="#"
                            class="flex justify-between mr-4 text-gray-500 hover:text-gray-900 text-base font-medium w-4/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="relative text-gray-500 transform rotate-180"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                            <span class=""> شخصی </span>
                        </a>
                    </div>
                    <ul class="leading-8 hidden">
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 text-gray-500 hover:text-gray-900 focus:text-indigo-500 items-center">
                                <i class="fa fa-user ml-4"></i> شخصی اول
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی دوم
                            </a>
                        </li>
                        <li class="">
                            <a href="#"
                                class="flex flex-row-reverse mr-8 items-center hover:text-gray-900 focus:text-indigo-500 text-gray-500">
                                <i class="fa fa-user ml-4"></i> شخصی سوم
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- content --}}
    <div class="md:mr-20 bg-gray-light h-screen dark:bg-gray-700">
        <div class="w-full flex flex-row-reverse">
            <div class="px-4 w-full mt-14 md:mt-0">
                <div class="header flex justify-between my-4">
                    <div class="">
                        <span
                            class="relative inline-block items-center transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8">
                            <a href="#" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-2 dark:text-gray-300" width="20" height="20"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                            </a>
                        </span>
                        <span
                            class="relative pixel:hidden md:inline-block items-center ml-4 transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8 dark:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mt-2 dark:text-gray-300" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="animate-ping"></span>
                        </span>
                        <span
                            class="relative inline-block ml-4 items-center transition-all cursor-pointer rounded-full bg-transparent hover:bg-white w-8 h-8">
                            <a href="#" class="">
                                <img src="./img/logo.svg" width="16" height="16" alt="flag" class="mx-auto mt-2" />
                            </a>
                        </span>
                        <span
                            class="relative inline-block ml-4 items-center transition-all cursor-pointer bg-transparent hover:bg-white rounded-full w-8 h-8 mx-auto mt-2 btn-toggle">
                            {{-- <a href="#" class="">
                                <img src="./img/8.jpg" width="16" height="16" alt="flag" class="mx-auto mt-2" />
                            </a> --}}
                            {{-- <i class="fa fa-sun-o bg-yellow-300 text-yellow-500 rounded-full"></i> --}}
                            {{-- <div class="relative"> --}}
                                <span class="custom-dark">

                                </span>
                            {{-- </div> --}}
                        </span>
                    </div>
                    <div class="items-center flex">
                        <div class="inline-block text-xl md:text-2xl mr-2 text-gray-700">
                            @yield('dashboard')
                        </div>
                        <div class="inline-block relative w-7 h-7 cursor-pointer pixel:hidden md:block">
                            <span class="w-6 h-0.5 bg-indigo-700 absolute right-0 top-1"></span>
                            <span class="w-4 h-0.5 bg-indigo-700 absolute right-0 top-3"></span>
                            <span class="w-6 h-0.5 bg-indigo-700 absolute top-5 right-0"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @yield('content')
        @yield('list')
        @yield('emptylist')
    </div>


    <script> 
// load theme
const currentTheme = localStorage.getItem("theme");
//console.log(currentTheme);
if(currentTheme == 'dark'){
    document.body.classList.add("dark");
}

const btn = document.querySelector(".btn-toggle");
btn.addEventListener("click", function () {
    //test
    const currentTheme = localStorage.getItem("theme");
    //console.log('====================================');
    //console.log(currentTheme);
    //console.log('====================================');

    // switch theme
    document.body.classList.toggle("dark");
    
    // save user theme
    var theme = document.body.classList.contains("dark") ? "dark" : "light";
    localStorage.setItem("theme", theme);

    // test
    //console.log('====================================');
    //console.log(localStorage.getItem("theme"));
    //console.log('====================================');
});

</script>
</body>

</html>
