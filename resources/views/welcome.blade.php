<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            .w-100 {
                width: 100%;
            }
            .salmon {
                color: #f65c78;
            }

            .biru {
                fill: #26D3FF;
            }
            .salmon {
                fill: #f65c78;
            }
            .green {
                fill: #42e6a4;
            }
            .violet {
                fill: #9326FF
            }
            .sea {
                fill: #0278ae;
            }
            .orange {
                fill: #ffb516;
            }
            .pink {
                fill: #fc06cb;
            }

            .border-biru {
                border-left: 4px solid #26D3FF;
            }
            .border-salmon {
                border-left: 4px solid #f65c78;
            }
            .border-green {
                border-left: 4px solid #42e6a4;
            }
            .border-violet {
                border-left: 4px solid #9326FF;
            }
            .border-sea {
                border-left: 4px solid #0278ae;
            }
            .border-orange {
                border-left: 4px solid #ffb516;
            }
            .border-pink {
                border-left: 4px solid #fc06cb;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900" style="padding-top: 40px">

            <div class="mx-auto sm:px-6 lg:px-8 w-100">
                <div class="flex justify-center pt-8 sm:justify-between sm:pt-0" style="align-items: center">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                    <h1 style="color: #EF3B2D">Backend Kelompok 4</h1>
                </div>

                <div class="flex mt-8" style="width: 100%; justify-content: space-between; align-items: center">
                    <h1 class="text-gray-900 font-semibold dark:text-white">Authentication</h1>
                    <span style="margin-top: 10px"><span class="salmon">*</span> <span class="text-gray-900 font-semibold dark:text-white">Jika Edit/Update, Semua field bersifat <strong>Optional</strong>.</span></span>
                </div>

                <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#26D3FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Register User</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/register
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <h4>Registration through email</h4>
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "username" : string, "email": string, "password": string, "c_password": string }</li><hr>

                                        <h4>Registration through phone number</h4>
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "username" : string, "hp": string, "password": string, "c_password": string }</li><hr>
                                        {{-- <span style="margin-top: 10px"><span class="salmon">*</span> untuk role ada 3 pilihan, "teacher" , "musyrif" & "student"</span><br> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#26D3FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Login User</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/login
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <h4>Login through email</h4>
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "email" : string, "password": string }</li>

                                        <h4>Login through phone number</h4>
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "hp" : string, "password": string }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#26D3FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Resend Email Verification</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/email/resend
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "email" : string }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#26D3FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Forgot Password</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/forgot-password
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "email" : string }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#26D3FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Logout User</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/logout
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="biru"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">User Detail</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/user/detail
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="biru"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Update User</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/user-update
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "name" : string, "username" : string, "profile" : string, "dob" : string, "address" : string, "hp" : string, "email" : string, "password" : string }</li><hr>
                                        {{-- <span style="margin-top: 10px"><span class="salmon">*</span> untuk role ada 3 pilihan, "teacher" , "musyrif" & "student"</span><br> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-biru">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="biru"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Update User Image</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/update-avatar
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">Form Data:</span> "image": file</li><hr>
                                        {{-- <span style="margin-top: 10px"><span class="salmon">*</span> untuk role ada 3 pilihan, "teacher" , "musyrif" & "student"</span><br> --}}
                                        <span style="margin-top: 10px"><span class="salmon">*</span> tipe image yang disupport : <span class="text-gray-900 font-semibold dark:text-white">jpeg, jpg, jfif, png, webp.</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Store</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-violet">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#9326FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Go to Store / Shop</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/store/{store_id}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-violet">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#9326FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Open Store</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/open-store
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "name" : string, "city_id" : integer }</li>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> untuk referensi value dari city_id diambil berdasarkan id kota yang berada di API Raja Ongkir</span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-violet">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#9326FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Update Store</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    PUT
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/update-store/{store_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-violet">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#9326FF"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Delete Store</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    DELETE
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/delete-store/{store_id}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Image</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-green">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#42e6a4"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get Image By ID</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/image/{image_id}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-green">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#42e6a4"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get Banner Images</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span class="text-gray-600">Guest ,</span> <span style="color: rgb(13, 208, 149)">All Role</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/banners/{banner_type}
                                </div>

                                <span style="margin-top: 10px"><span class="salmon">*</span> banner type: <span class="text-gray-900 font-semibold dark:text-white">big, small</span></span><br>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Category</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-orange">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="orange" /></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get All Categories</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #f0259f">Admin</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/category
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-orange">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="orange" /></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Create Category</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #f0259f">Admin</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/create-category
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">Form Data:</span> "name" : string, "image" : file </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-orange">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="orange" /></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Update Category</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #f0259f">Admin</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/update-category/{category_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">Form Data:</span> "name" : string, "image" : file </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-orange">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="orange" /></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Delete Category</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #f0259f">Admin</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    DELETE
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/delete-category/{category_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Product</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get All Products</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/products
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Detail Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/product/{product_id}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get Products By Category</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/category/{category_id}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Create Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/create-product
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "name" : string, "desc": string, "price": integer, "stock": integer, "condition": boolean, "heavy": integer, "categories": array }</li><hr>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> field category harus bertipe <span class="text-gray-900 font-semibold dark:text-white"> array (category_id).</span></span><br>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> <span class="text-gray-900 font-semibold dark:text-white">contoh "categories": [5, 10]</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Upload Image Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/store-image/{product_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">Form Data:</span> image</li><hr>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> Format gambar: <span class="text-gray-900 font-semibold dark:text-white"> jpeg, jpg, jfif, png.</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Update Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/update-product/{product_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "name" : string, "desc": string, "price": integer, "stock": integer, "condition": boolean, "heavy": integer, "categories": array }</li><hr>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> field category harus bertipe <span class="text-gray-900 font-semibold dark:text-white"> array (category_id).</span></span><br>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> <span class="text-gray-900 font-semibold dark:text-white">contoh "categories": [5, 10]</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Delete Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    DELETE
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/delete-product/{product_id}
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Filter / Search</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-sea">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" fill="#0278ae"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Filter Product</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/search/products
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "name" : string, "condition": boolean, "price": [min_price, max_price], "categories": array, "sort_by": string }</li><hr>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> untuk price, value <span class="text-gray-900 font-semibold dark:text-white"> min_price</span><span> & </span><span class="text-gray-900 font-semibold dark:text-white"> max_price</span> = integer</span><br>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> untuk categories, value <span class="text-gray-900 font-semibold dark:text-white"> = </span><span class="text-gray-900 font-semibold dark:text-white"> integer</span>, contoh "categories": [category_id, category_id]</span><br>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> opsi sort_by: <span class="text-gray-900 font-semibold dark:text-white"> rating, name, min_price, max_price</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-gray-900 font-semibold dark:text-white">Cart System</h1>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-pink">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="pink"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Get User Cart</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    GET
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/get-cart
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-pink">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="pink"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Add Product to Cart</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/update-cart
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "product_id" : [product_id] }</li><hr>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> field product_id bersifat <span class="text-gray-900 font-semibold dark:text-white">Array</span><span> integer</span><br>
                                        <span style="margin-top: 10px"><span class="salmon">*</span> contoh <span class="text-gray-900 font-semibold dark:text-white">"product_id": [1]</span> atau </span><span class="text-gray-900 font-semibold dark:text-white">"product_id": [1, 3, 6]</span></span><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="border-pink">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 52 52"><circle id="postl" cx="26" cy="26" r="26" class="pink"/></svg>
                                <div class="flex" style="width: 100%; justify-content: space-between">
                                    <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Remove Product from Cart</span></div>
                                    {{-- <div class="ml-4 text-lg leading-2 font-semibold"><span class="text-gray-900 dark:text-white">Role :</span> <span style="color: #0278ae">Student</span></div> --}}
                                </div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-1 text-gray-600 dark:text-gray-400 font-semibold text-md">
                                    POST
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    /api/remove-cart
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Headers</span>
                                    <ul style="margin: 0">
                                        <li><span class="font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { 'Authorization' : "Bearer {token}" }</li>
                                    </ul>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold">Body</span>
                                    <ul style="margin: 0">
                                        <li><span class=" font-semibold" style="color: rgb(255, 23, 104)">JSON:</span> { "product_id" : integer }</li><hr>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Albeline Marketplace
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
