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

        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mx-2 md:mx-auto max-w-6xl lg:px-8">
                <!-- Breadcrumb Start -->
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="font-bold text-2xl text-black">
                        Profile
                    </h2>

                    <nav>
                        <ol class="flex items-center gap-2">
                            <li><a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a></li>
                            <li class="text-primary">Profile</li>
                        </ol>
                    </nav>
                </div>
                <!-- Breadcrumb End -->

                <!-- ====== Profile Section Start -->
                <div class="overflow-hidden pb-5 rounded-sm border border-stroke bg-white shadow-default">
                    <div class="relative z-20 h-35 md:h-65">
                        <img src="{{ get_coverbg() }}" alt="profile cover"
                            class="h-full w-full rounded-tl-sm rounded-tr-sm object-cover object-center" />
                        <div class="absolute bottom-3 right-3 z-10 xsm:bottom-4 xsm:right-4">
                            <x-nav-link :href="route('profile.edit')"
                                class="flex cursor-pointer items-center justify-center gap-2 rounded bg-primary py-1 px-2 text-sm font-medium text-white hover:bg-opacity-80 xsm:px-4">

                                <span>
                                    <svg class="fill-current" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 24 24" width="14" height="14">
                                        <path
                                            d="M9,12c3.309,0,6-2.691,6-6S12.309,0,9,0,3,2.691,3,6s2.691,6,6,6Zm0-9c1.654,0,3,1.346,3,3s-1.346,3-3,3-3-1.346-3-3,1.346-3,3-3Zm2,14.341c-.64-.226-1.313-.341-2-.341-3.16,0-5.796,2.459-6.003,5.599-.052,.793-.711,1.401-1.495,1.401-.033,0-.066,0-.1-.003-.827-.054-1.453-.769-1.398-1.595,.31-4.711,4.262-8.401,8.997-8.401,1.029,0,2.038,.172,3,.513,.781,.276,1.19,1.133,.914,1.914-.276,.781-1.132,1.19-1.914,.914Zm12.26-1.325l-6.715,6.715c-.813,.813-1.915,1.269-3.064,1.269h-.955c-.276,0-.5-.224-.5-.5v-.955c0-1.149,.457-2.252,1.269-3.064l6.808-6.808c.953-.953,2.534-.894,3.409,.176,.761,.93,.598,2.317-.252,3.167Z">
                                        </path>
                                    </svg>
                                </span>
                                <span>{{ __('Edit Profile') }}</span>
                            </x-nav-link>
                        </div>
                    </div>
                    <div class="px-4 pb-6 text-center lg:pb-8 xl:pb-11.5">
                        <div
                            class="relative z-30 mx-auto -mt-16 h-full w-full max-w-30 rounded-full bg-white/20 p-1 backdrop-blur sm:-mt-22 sm:h-44 sm:max-w-44 sm:p-3">
                            <div class="relative drop-shadow-2">
                                <img src="{{ profile_photo() }}" alt="profile"
                                    class="object-cover rounded-full h-40 w-40" />
                                <label for="profile" x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'user-profile-picture')"
                                    x-on:mouseenter="tooltip = true" x-on:mouseleave="tooltip = false"
                                    class="absolute bottom-0 right-0 flex h-8.5 w-8.5 cursor-pointer items-center justify-center rounded-full bg-primary text-white hover:bg-opacity-90 sm:bottom-2 sm:right-2">
                                    <svg class="fill-current" width="14" height="14" viewBox="0 0 14 14"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.76464 1.42638C4.87283 1.2641 5.05496 1.16663 5.25 1.16663H8.75C8.94504 1.16663 9.12717 1.2641 9.23536 1.42638L10.2289 2.91663H12.25C12.7141 2.91663 13.1592 3.101 13.4874 3.42919C13.8156 3.75738 14 4.2025 14 4.66663V11.0833C14 11.5474 13.8156 11.9925 13.4874 12.3207C13.1592 12.6489 12.7141 12.8333 12.25 12.8333H1.75C1.28587 12.8333 0.840752 12.6489 0.512563 12.3207C0.184375 11.9925 0 11.5474 0 11.0833V4.66663C0 4.2025 0.184374 3.75738 0.512563 3.42919C0.840752 3.101 1.28587 2.91663 1.75 2.91663H3.77114L4.76464 1.42638ZM5.56219 2.33329L4.5687 3.82353C4.46051 3.98582 4.27837 4.08329 4.08333 4.08329H1.75C1.59529 4.08329 1.44692 4.14475 1.33752 4.25415C1.22812 4.36354 1.16667 4.51192 1.16667 4.66663V11.0833C1.16667 11.238 1.22812 11.3864 1.33752 11.4958C1.44692 11.6052 1.59529 11.6666 1.75 11.6666H12.25C12.4047 11.6666 12.5531 11.6052 12.6625 11.4958C12.7719 11.3864 12.8333 11.238 12.8333 11.0833V4.66663C12.8333 4.51192 12.7719 4.36354 12.6625 4.25415C12.5531 4.14475 12.4047 4.08329 12.25 4.08329H9.91667C9.72163 4.08329 9.53949 3.98582 9.4313 3.82353L8.43781 2.33329H5.56219Z"
                                            fill="" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.00004 5.83329C6.03354 5.83329 5.25004 6.61679 5.25004 7.58329C5.25004 8.54979 6.03354 9.33329 7.00004 9.33329C7.96654 9.33329 8.75004 8.54979 8.75004 7.58329C8.75004 6.61679 7.96654 5.83329 7.00004 5.83329ZM4.08337 7.58329C4.08337 5.97246 5.38921 4.66663 7.00004 4.66663C8.61087 4.66663 9.91671 5.97246 9.91671 7.58329C9.91671 9.19412 8.61087 10.5 7.00004 10.5C5.38921 10.5 4.08337 9.19412 4.08337 7.58329Z"
                                            fill="" />
                                    </svg>

                                </label>

                            </div>
                        </div>
                        <div class="mt-4">
                            <h3 class="mb-1.5 text-2xl font-medium text-black">
                                {{ Auth::user()->name }}
                            </h3>
                            <p class="font-medium">{{ Auth::user()->profession }}</p>

                            <div
                                class="mx-auto mb-5.5 mt-4.5 flex flex-row gap-2 max-w-60 rounded-md border border-stroke py-2.5 shadow-1 justify-center">
                                <div
                                    class="flex flex-col items-center justify-center px-4 xsm:flex-row">
                                    <span class="font-bold text-primary">{{ __('Role:  ') }}</span>
                                    <span class="text-xs">{{ ucwords(Auth::user()->roles) }}</span>
                                </div>

                                {{-- <div
                                    class="flex flex-col items-center justify-center gap-1 border-r border-stroke px-4 xsm:flex-row">
                                    <span class="font-bold text-primary">{{ __('Set:') }}</span>
                                    <span class="text-xs">{{ Auth::user()-> }}</span>
                                </div>

                                <div
                                    class="flex flex-col items-center justify-center gap-1 px-4 xsm:flex-row">
                                    <span class="font-bold text-primary">{{ __('Country:') }}</span>
                                    <span class="text-xs">{{ Auth::user()->address->country }}</span>
                                </div> --}}
                            </div>

                            <div class="mx-auto max-w-180">
                                <h4 class="font-bold text-xl text-black">
                                    {{ __('About Me') }}
                                </h4>
                                <div class="mt-8 font-medium text-sm">
                                    {!! nl2br(e(Auth::user()->about)) !!}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ====== Profile Section End -->
            </div>
        </div>

        {{-- @include('profile.partials.upload-user-image-form') --}}

    </div>
</x-app-layout>
