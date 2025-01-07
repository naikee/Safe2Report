<x-app-layout>
    @section('pageTitle')
        {{ __($pageTitle . ' - ') }}
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($pageTitle) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-4 max-w-screen-2xl md:mx-auto sm:px-6 lg:px-8">
            <div class="h-screen py-6 flex flex-col justify-start sm:py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 w-full gap-7.5" x-data="{ tab: 1 }">
                    <div class="flex flex-col justify-start col-span-1 space-y-3">
                        <a class="w-full px-6 py-4 text-sm rounded-lg group relative flex items-center gap-2 shadow-1"
                            :class="{
                                'z-20 border-l-2 transform translate-x-1 border-green-600 font-bold px-5 bg-gray-950 text-gray-50': tab ===
                                    1,
                                ' transform -translate-x-1 bg-white text-gray-800': tab !== 1
                            }"
                            href="#" @click.prevent="tab = 1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                class="fill-current" fill="none">
                                <g id="vuesax/outline/setting-3">
                                    <g id="setting-3">
                                        <path id="Vector"
                                            d="M15 22.75H9C3.57 22.75 1.25 20.43 1.25 15V9C1.25 3.57 3.57 1.25 9 1.25H15C20.43 1.25 22.75 3.57 22.75 9V15C22.75 20.43 20.43 22.75 15 22.75ZM9 2.75C4.39 2.75 2.75 4.39 2.75 9V15C2.75 19.61 4.39 21.25 9 21.25H15C19.61 21.25 21.25 19.61 21.25 15V9C21.25 4.39 19.61 2.75 15 2.75H9Z"
                                            fill="" />
                                        <path id="Vector_2"
                                            d="M15.58 19.2501C15.17 19.2501 14.83 18.9101 14.83 18.5001V14.6001C14.83 14.1901 15.17 13.8501 15.58 13.8501C15.99 13.8501 16.33 14.1901 16.33 14.6001V18.5001C16.33 18.9101 15.99 19.2501 15.58 19.2501Z"
                                            fill="" />
                                        <path id="Vector_3"
                                            d="M15.58 8.2C15.17 8.2 14.83 7.86 14.83 7.45V5.5C14.83 5.09 15.17 4.75 15.58 4.75C15.99 4.75 16.33 5.09 16.33 5.5V7.45C16.33 7.86 15.99 8.2 15.58 8.2Z"
                                            fill="" />
                                        <path id="Vector_4"
                                            d="M15.58 13.4C13.73 13.4 12.23 11.9 12.23 10.05C12.23 8.19995 13.73 6.69995 15.58 6.69995C17.43 6.69995 18.93 8.19995 18.93 10.05C18.93 11.9 17.42 13.4 15.58 13.4ZM15.58 8.19995C14.56 8.19995 13.73 9.02995 13.73 10.05C13.73 11.07 14.56 11.9 15.58 11.9C16.6 11.9 17.43 11.07 17.43 10.05C17.43 9.02995 16.59 8.19995 15.58 8.19995Z"
                                            fill="" />
                                        <path id="Vector_5"
                                            d="M8.42001 19.25C8.01001 19.25 7.67001 18.91 7.67001 18.5V16.55C7.67001 16.14 8.01001 15.8 8.42001 15.8C8.83001 15.8 9.17001 16.14 9.17001 16.55V18.5C9.17001 18.91 8.84001 19.25 8.42001 19.25Z"
                                            fill="" />
                                        <path id="Vector_6"
                                            d="M8.42001 10.15C8.01001 10.15 7.67001 9.81 7.67001 9.4V5.5C7.67001 5.09 8.01001 4.75 8.42001 4.75C8.83001 4.75 9.17001 5.09 9.17001 5.5V9.4C9.17001 9.81 8.84001 10.15 8.42001 10.15Z"
                                            fill="" />
                                        <path id="Vector_7"
                                            d="M8.42001 17.3001C6.57001 17.3001 5.07001 15.8001 5.07001 13.9501C5.07001 12.1001 6.57001 10.6001 8.42001 10.6001C10.27 10.6001 11.77 12.1001 11.77 13.9501C11.77 15.8001 10.27 17.3001 8.42001 17.3001ZM8.42001 12.1001C7.40001 12.1001 6.57001 12.9301 6.57001 13.9501C6.57001 14.9701 7.40001 15.8001 8.42001 15.8001C9.44001 15.8001 10.27 14.9701 10.27 13.9501C10.27 12.9301 9.45001 12.1001 8.42001 12.1001Z"
                                            fill="" />
                                    </g>
                                </g>
                            </svg>
                            General Settings
                        </a>
                        <a class="w-full px-6 py-4 text-sm rounded-lg group relative flex items-center gap-2 shadow-1"
                            :class="{
                                'z-20 border-l-2 transform translate-x-1 border-green-600 font-bold px-5 bg-gray-950 text-gray-50': tab ===
                                    2,
                                ' transform -translate-x-1 bg-white text-gray-800': tab !== 2
                            }"
                            href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="fill-current">
                                <g>
                                    <path
                                        d="M22 15.184V8a5.006 5.006 0 0 0-5-5H7a5.006 5.006 0 0 0-5 5v7.184A2.993 2.993 0 0 0 3 21h18a2.993 2.993 0 0 0 1-5.816ZM7 5h10a3 3 0 0 1 3 3v7h-4.151a2 2 0 0 0-1.528.708l-.247.292H9.925l-.246-.292A2 2 0 0 0 8.151 15H4V8a3 3 0 0 1 3-3Zm14 14H3a1 1 0 0 1 0-2h5.152l.246.292A2 2 0 0 0 9.925 18h4.149a2 2 0 0 0 1.528-.708l.247-.292H21a1 1 0 0 1 0 2Z"
                                        fill="" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            System Settings
                        </a>
                        <a class="w-full px-6 py-4 text-sm rounded-lg group relative flex items-center gap-2 shadow-1"
                            :class="{
                                'z-20 border-l-2 transform translate-x-1 border-green-600 font-bold px-5 bg-gray-950 text-gray-50': tab ===
                                    3,
                                ' transform -translate-x-1 bg-white text-gray-800': tab !== 3
                            }"
                            href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="fill-current">
                                <g>
                                    <path
                                        d="M18.573 2.126 12.314.051a.995.995 0 0 0-.629 0L5.426 2.126a4.993 4.993 0 0 0-3.427 4.746v5.171c0 6.563 7.005 10.577 9.152 11.65 0 0 .43.307.85.307s.791-.24.791-.24c2.16-.869 9.207-4.281 9.207-11.717V6.872a4.993 4.993 0 0 0-3.427-4.746ZM20 12.043c0 6.182-6.088 9.111-7.953 9.861C10.158 20.96 4 17.46 4 12.043V6.872c0-1.295.826-2.439 2.056-2.848L12 2.053l5.944 1.971A2.998 2.998 0 0 1 20 6.872v5.171ZM14.5 9.5a2.498 2.498 0 0 1-1.5 2.291V15a1 1 0 1 1-2 0v-3.209A2.5 2.5 0 1 1 14.5 9.5Z"
                                        fill="" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            Token & 2FA
                        </a>
                        <a class="w-full px-6 py-4 text-sm rounded-lg group relative flex items-center gap-2 shadow-1"
                            :class="{
                                'z-20 border-l-2 transform translate-x-1 border-green-600 font-bold px-5 bg-gray-950 text-gray-50': tab ===
                                    4,
                                ' transform -translate-x-1 bg-white text-gray-800': tab !== 4
                            }"
                            href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
                                id="Outline" viewBox="0 0 24 24" width="20" height="20" class="fill-current">
                                <path
                                    d="M19,1H5A5.006,5.006,0,0,0,0,6V18a5.006,5.006,0,0,0,5,5H19a5.006,5.006,0,0,0,5-5V6A5.006,5.006,0,0,0,19,1ZM5,3H19a3,3,0,0,1,2.78,1.887l-7.658,7.659a3.007,3.007,0,0,1-4.244,0L2.22,4.887A3,3,0,0,1,5,3ZM19,21H5a3,3,0,0,1-3-3V7.5L8.464,13.96a5.007,5.007,0,0,0,7.072,0L22,7.5V18A3,3,0,0,1,19,21Z">
                                </path>
                            </svg>
                            Email Configuration
                        </a>
                        <a class="w-full px-6 py-4 text-sm rounded-lg group relative flex items-center gap-2 shadow-1"
                            :class="{
                                'z-20 border-l-2 transform translate-x-1 border-green-600 font-bold px-5 bg-gray-950 text-gray-50': tab ===
                                    5,
                                ' transform -translate-x-1 bg-white text-gray-800': tab !== 5
                            }"
                            href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="fill-current">
                                <g>
                                    <path
                                        d="M17 10v4a1 1 0 1 1-2 0v-3.559l-6.294 6.268a1 1 0 1 1-1.412-1.416l6.318-6.292H10a1 1 0 1 1 0-2h4c1.654 0 3 1.346 3 3Zm7 2.34V19c0 2.757-2.243 5-5 5h-5.917C6.082 24 .471 19.208.029 12.854a12.027 12.027 0 0 1 3.48-9.333A12.043 12.043 0 0 1 12.836.029C19.097.454 24 5.862 24 12.34Zm-2 0c0-5.431-4.085-9.962-9.299-10.316a10.015 10.015 0 0 0-7.778 2.91 10.022 10.022 0 0 0-2.898 7.782c.372 5.38 5.023 9.285 11.058 9.285H19c1.654 0 3-1.346 3-3v-6.66Z"
                                        fill="" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            SMS Gateway
                        </a>
                    </div>

                    @php $settings = \App\Models\Setting::all(); @endphp

                    <div class="col-span-1 bg-white shadow-md rounded-lg p-12 mb-16 md:col-span-3">
                        <div class="w-full space-y-6" x-show="tab === 1">
                            <h3 class="text-2xl font-bold leading-tight" x-show="tab === 1"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                General Settings
                            </h3>
                            <form method="post" action="{{ route('settings.update', 'store') }}"
                                class="mt-6 space-y-6" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Company Name -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="company_name" :value="__('Company Name')" />
                                        <x-text-input id="company_name" name="company_name" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'company_name')" required autofocus />
                                        <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                                    </div>

                                    <!-- Site Title -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="site_title" :value="__('Site Title')" />
                                        <x-text-input id="site_title" name="site_title" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'site_title')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('site_title')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Phone -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="phone" :value="__('Phone')" />
                                        <x-text-input id="phone" name="phone" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'phone')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                    </div>

                                    <!-- Email -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" name="email" type="email"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'email')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="text-base text-gray-600 mt-4 w-full" x-show="tab === 1"
                                    x-transition:enter="transition delay-600 duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    <x-input-label for="address" :value="__('Address')" />
                                    <x-textarea id="address" name="address" rows="4"
                                        class="mt-1 block w-full">{{ get_setting($settings, 'address') }}</x-textarea>
                                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Typography -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-600 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="typography" :value="__('App Typography')" />
                                        <x-text-input id="typography" name="typography" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'typography')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('typography')" />
                                    </div>

                                    <!-- Copyright -->
                                    <div class="text-base text-gray-600 my-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-700 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="copyright" :value="__('Copyright')" />
                                        <x-text-input id="copyright" name="copyright" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'copyright')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('copyright')" />
                                    </div>
                                </div>


                                <div class="border-b border-stroke mt-4 relative w-full" x-show="tab === 1"
                                    x-transition:enter="transition delay-800 duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0"></div>

                                <h4 class="font-bold text-lg mt-4 leading-tight w-full" x-show="tab === 1"
                                    x-transition:enter="transition delay-700 duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    Social Media
                                </h4>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Facebook -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-900 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="facebook" :value="__('Facebook')" />
                                        <x-text-input id="facebook" name="facebook" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'facebook')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
                                    </div>

                                    <!-- Instagram -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1000 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="instagram" :value="__('Instagram')" />
                                        <x-text-input id="instagram" name="instagram" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'instagram')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Twitter -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="twitter" :value="__('Twitter')" />
                                        <x-text-input id="twitter" name="twitter" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'twitter')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('twitter')" />
                                    </div>

                                    <!-- LinkedIn -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="linkedin" :value="__('LinkedIn')" />
                                        <x-text-input id="linkedin" name="linkedin" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'linkedin')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Tiktok -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="tiktok" :value="__('Tiktok')" />
                                        <x-text-input id="tiktok" name="tiktok" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'tiktok')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('tiktok')" />
                                    </div>

                                    <!-- Whatsapp -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1400 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="whatsapp" :value="__('WhatsApp')" />
                                        <x-text-input id="whatsapp" name="whatsapp" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'whatsapp')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('whatsapp')" />
                                    </div>
                                </div>

                                <div class="border-b border-stroke mt-4 relative w-full" x-show="tab === 1"
                                    x-transition:enter="transition delay-1500 duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0"></div>

                                <h4 class="font-bold text-lg mt-4 leading-tight w-full" x-show="tab === 1"
                                    x-transition:enter="transition delay-1500 duration-500 transform ease-in"
                                    x-transition:enter-start="opacity-0">
                                    Default Currency
                                </h4>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Currency -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1600 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="currency" :value="__('Currency')" />
                                        <x-text-input id="currency" name="currency" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'currency')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('currency')" />
                                    </div>

                                    <!-- Currency Symbol -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 1"
                                        x-transition:enter="transition delay-1700 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="currency_symbol" :value="__('Currency Symbol')" />
                                        <x-text-input id="currency_symbol" name="currency_symbol" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'currency_symbol')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('currency_symbol')" />
                                    </div>
                                </div>

                                <!-- Save button -->
                                <div class="flex items-center gap-8" x-show="tab === 1">
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save settings') }}</x-primary-button>

                                    @if (session('status') === 'settings-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('Settings Saved.') }}</p>
                                    @endif
                                </div>
                            </form>

                        </div>

                        <div class="w-full space-y-6" x-show="tab === 2">
                            <h3 class="text-2xl font-bold leading-tight" x-show="tab === 2"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                System Settings
                            </h3>
                            <form method="post" action="{{ route('settings.update', 'store') }}"
                                class="mt-6 space-y-6" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Upload Logo -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 2"
                                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="app_logo" :value="__('Upload Logo')" />
                                        <x-text-input id="app_logo" name="app_logo" type="file"
                                        class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter" :value="get_setting($settings, 'app_logo')"
                                            data-default-file="{{ app_logo() }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('app_logo')" />
                                        <div class="mt-3 h-24 w-24 relative hidden app_logo-cover">
                                            <img src="" class="h-24 w-24 rounded-lg object-cover" />
                                            <div
                                                class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-app_logo">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24"
                                                    class="fill-slate-100 opacity-15 group-hover:opacity-100 cursor-pointer">
                                                    <path
                                                        d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- White Logo -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 2"
                                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="app_logo_white" :value="__('Upload White Logo')" />
                                        <x-text-input id="app_logo_white" name="app_logo_white" type="file"
                                        class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter" :value="get_setting($settings, 'app_logo_white')" data-allowed-formats="square"
                                            data-default-file="{{ app_logo_white() }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('app_logo_white')" />
                                        <div class="mt-3 h-24 w-24 relative hidden app_logo_white-cover">
                                            <img src="" class="h-24 w-24 rounded-lg object-cover" />
                                            <div
                                                class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-app_logo_white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24"
                                                    class="fill-slate-100 opacity-15 group-hover:opacity-100 cursor-pointer">
                                                    <path
                                                        d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Upload Favicon -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 2"
                                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="favicon" :value="__('Upload Favicon')" />
                                        <x-text-input id="favicon" name="favicon" type="file"
                                        class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter" :value="get_setting($settings, 'favicon')" data-allowed-formats="square"
                                            data-default-file="{{ get_favicon() }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('favicon')" />
                                        <div class="mt-3 h-24 w-24 relative hidden favicon-cover">
                                            <img src="" class="h-24 w-24 rounded-lg object-cover" />
                                            <div
                                                class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-favicon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24"
                                                    class="fill-slate-100 opacity-15 group-hover:opacity-100 cursor-pointer">
                                                    <path
                                                        d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profile Cover Background -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 2"
                                        x-transition:enter="transition delay-400 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="coverbg" :value="__('Upload Profile Background Cover Image')" />
                                        <x-text-input id="coverbg" name="coverbg" type="file"
                                        class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter" :value="get_setting($settings, 'coverbg')" data-allowed-formats="square"
                                            data-default-file="{{ get_coverbg() }}" />
                                        <x-input-error class="mt-2" :messages="$errors->get('coverbg')" />
                                        <div class="mt-3 h-24 w-24 relative hidden coverbg-cover">
                                            <img src="" class="h-24 w-24 rounded-lg object-cover" />
                                            <div
                                                class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-coverbg">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24"
                                                    class="fill-slate-100 opacity-15 group-hover:opacity-100 cursor-pointer">
                                                    <path
                                                        d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Save button -->
                                <div class="flex items-center gap-8" x-show="tab === 2">
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save settings') }}</x-primary-button>

                                    @if (session('status') === 'settings-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('Settings Saved.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <div class="w-full space-y-6" x-show="tab === 3">
                            <h3 class="text-2xl font-bold leading-tight" x-show="tab === 3"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Token & 2FA Auth
                            </h3>
                            <form method="post" action="{{ route('settings.update', 'store') }}"
                                class="mt-6 space-y-6" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Email Verification -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="email_verification" :value="__('Email Verification')" />
                                        <select id="email_verification"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="email_verification">
                                            <option value="no"
                                                {{ get_setting($settings, 'email_verification') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, 'email_verification') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('email_verification')" />
                                    </div>

                                    <!-- Mobile Verification -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="mobile_verification" :value="__('Mobile Verification')" />
                                        <select id="mobile_verification"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="mobile_verification">
                                            <option value="no"
                                                {{ get_setting($settings, 'mobile_verification') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, 'mobile_verification') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('mobile_verification')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- 2FA Authentication -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="2fa_auth" :value="__('2FA Enable')" />
                                        <select id="2fa_auth"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="2fa_auth">
                                            <option value="no"
                                                {{ get_setting($settings, '2fa_auth') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, '2fa_auth') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('2fa_auth')" />
                                    </div>

                                    <!-- Google Recaptcha -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-400 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="recaptcha" :value="__('Google Recaptcha V3')" />
                                        <select id="recaptcha"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="recaptcha">
                                            <option value="no"
                                                {{ get_setting($settings, 'recaptcha') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, 'recaptcha') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('recaptcha')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Recaptcha Site Key -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="recaptcha_site_key" :value="__('Recaptcha Site Key')" />
                                        <x-text-input id="recaptcha_site_key" name="recaptcha_site_key"
                                            type="text" class="mt-1 block w-full" :value="get_setting($settings, 'recaptcha_site_key')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('recaptcha_site_key')" />
                                    </div>

                                    <!-- Recaptcha Secret Key -->
                                    <div class="text-base text-gray-600 my-4 w-full lg:w-1/2" x-show="tab === 3"
                                        x-transition:enter="transition delay-600 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="recaptcha_secret_key" :value="__('Recaptcha Secret Key')" />
                                        <x-text-input id="recaptcha_secret_key" name="recaptcha_secret_key"
                                            type="text" class="mt-1 block w-full" :value="get_setting($settings, 'recaptcha_secret_key')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('recaptcha_secret_key')" />
                                    </div>
                                </div>

                                <!-- Save button -->
                                <div class="flex items-center gap-8" x-show="tab === 3">
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save settings') }}</x-primary-button>

                                    @if (session('status') === 'settings-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('Settings Saved.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <div class="w-full space-y-6" x-show="tab === 4">
                            <h3 class="text-2xl font-bold leading-tight" x-show="tab === 4"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Email Configuration
                            </h3>
                            <form method="post" action="{{ route('settings.update', 'store') }}"
                                class="mt-6 space-y-6" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Email Sender Type -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="email_sender" :value="__('Email Sender Type')" />
                                        <select id="email_sender"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="email_sender">
                                            <option value="smtp"
                                                {{ get_setting($settings, 'email_sender') == 'smtp' ? 'selected' : '' }}>
                                                {{ __('SMTP') }}</option>
                                            <option value="sendmail"
                                                {{ get_setting($settings, 'email_sender') == 'sendmail' ? 'selected' : '' }}>
                                                {{ __('Sendmail') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('email_sender')" />
                                    </div>

                                    <!-- From Email -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="from_email" :value="__('From Email')" />
                                        <x-text-input id="from_email" name="from_email" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'from_email')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('from_email')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- From Name -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="from_name" :value="__('From Name')" />
                                        <x-text-input id="from_name" name="from_name" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'from_name')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('from_name')" />
                                    </div>

                                    <!-- SMPT Host -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-400 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="smtp_host" :value="__('SMPT Host')" />
                                        <x-text-input id="smtp_host" name="smtp_host" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'smtp_host')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('smtp_host')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- SMTP Port -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-500 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="smtp_port" :value="__('SMTP Port')" />
                                        <x-text-input id="smtp_port" name="smtp_port" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'smtp_port')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('smtp_port')" />
                                    </div>

                                    <!-- SMTP Username -->
                                    <div class="text-base text-gray-600 my-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-600 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="smtp_username" :value="__('SMTP Username')" />
                                        <x-text-input id="smtp_username" name="smtp_username" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'smtp_username')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('smtp_username')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- SMTP Password -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-700 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="smtp_password" :value="__('SMTP Password')" />
                                        <x-text-input id="smtp_password" name="smtp_password" type="password"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'smtp_password')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('smtp_password')" />
                                    </div>

                                    <!-- SMTP Encryption Type -->
                                    <div class="text-base text-gray-600 my-4 w-full lg:w-1/2" x-show="tab === 4"
                                        x-transition:enter="transition delay-800 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="smtp_encryption" :value="__('SMTP Encryption Type')" />
                                        <select id="smtp_encryption"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="smtp_encryption">
                                            <option value="no"
                                                {{ get_setting($settings, 'smtp_encryption') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, 'smtp_encryption') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('smtp_encryption')" />
                                    </div>
                                </div>

                                <!-- Save button -->
                                <div class="flex items-center gap-8" x-show="tab === 4">
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save settings') }}</x-primary-button>

                                    @if (session('status') === 'settings-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('Settings Saved.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                        <div class="w-full space-y-6" x-show="tab === 5">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                SMS Gateway
                            </h3>
                            <form method="post" action="{{ route('settings.update', 'store') }}"
                                class="mt-6 space-y-6" enctype="multipart/form-data">
                                @csrf

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Enable SMS -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 5"
                                        x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="enable_sms" :value="__('Enable SMS')" />
                                        <select id="enable_sms"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="enable_sms">
                                            <option value="no"
                                                {{ get_setting($settings, 'enable_sms') == 'no' ? 'selected' : '' }}>
                                                {{ __('Disable') }}</option>
                                            <option value="yes"
                                                {{ get_setting($settings, 'enable_sms') == 'yes' ? 'selected' : '' }}>
                                                {{ __('Enable') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('enable_sms')" />
                                    </div>

                                    <!-- Twilio Account SID -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 5"
                                        x-transition:enter="transition delay-200 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="twilio_account_sid" :value="__('Twilio Account SID')" />
                                        <x-text-input id="twilio_account_sid" name="twilio_account_sid"
                                            type="text" class="mt-1 block w-full" :value="get_setting($settings, 'twilio_account_sid')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('twilio_account_sid')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- Twilio Auth Token -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 5"
                                        x-transition:enter="transition delay-300 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="twilio_auth_token" :value="__('Twilio Auth Token')" />
                                        <x-text-input id="twilio_auth_token" name="twilio_auth_token" type="text"
                                            class="mt-1 block w-full" :value="get_setting($settings, 'twilio_auth_token')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('twilio_auth_token')" />
                                    </div>

                                    <!-- Twilio Mobile Number -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2" x-show="tab === 5"
                                        x-transition:enter="transition delay-400 duration-500 transform ease-in"
                                        x-transition:enter-start="opacity-0">
                                        <x-input-label for="twilio_mobile_number" :value="__('Twilio Mobile Number')" />
                                        <x-text-input id="twilio_mobile_number" name="twilio_mobile_number"
                                            type="text" class="mt-1 block w-full" :value="get_setting($settings, 'twilio_mobile_number')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('twilio_mobile_number')" />
                                    </div>
                                </div>

                                <!-- Save button -->
                                <div class="flex items-center gap-8" x-show="tab === 5">
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save settings') }}</x-primary-button>

                                    @if (session('status') === 'settings-updated')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('Settings Saved.') }}</p>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            $(document).ready(function() {
                'use strict';

                //App Logo
                $('#app_logo').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.app_logo-cover').removeClass('hidden');
                            $('.app_logo-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-app_logo').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#app_logo').val('');
                });

                //App Logo White
                $('#app_logo_white').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.app_logo_white-cover').removeClass('hidden');
                            $('.app_logo_white-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-app_logo_white').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#app_logo_white').val('');
                });

                //Favicon
                $('#favicon').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.favicon-cover').removeClass('hidden');
                            $('.favicon-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-favicon').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#favicon').val('');
                });

                //Cover Background
                $('#coverbg').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.coverbg-cover').removeClass('hidden');
                            $('.coverbg-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-coverbg').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#coverbg').val('');
                });
            });
        </script>
    @endsection
</x-app-layout>
