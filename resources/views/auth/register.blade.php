<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <div class="flex flex-row gap-0">
                <x-text-input type="text"
                    class="mt-1 block pl-2.5 pr-3 !w-[70px] rounded-r-none !bg-gray-200 mobile-code text-center"
                    :value="__('+234')" name="mobile_code" readonly />
                <x-text-input id="phone" class="block mt-1 w-full rounded-l-none" type="tel" name="phone"
                    :value="old('phone')" required />
            </div>
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Profile Picture -->
        <div class="mt-4">
            <x-input-label for="profile_picture" :value="__('Profile Picture')" />
            <x-text-input id="profile_picture"
                class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter"
                type="file" name="profile_picture" :value="old('profile_picture')" />
            <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
            <div class=" mt-3 h-24 w-24 relative hidden profile_picture-cover">
                <img src="" class="h-24 w-24 rounded-lg object-cover" />
                <div class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-profile_picture">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        width="24" height="24" class="fill-slate-100 opacity-15 group-hover:opacity-100 cursor-pointer">
                        <path
                            d="m15.707,11.707l-2.293,2.293,2.293,2.293c.391.391.391,1.023,0,1.414-.195.195-.451.293-.707.293s-.512-.098-.707-.293l-2.293-2.293-2.293,2.293c-.195.195-.451.293-.707.293s-.512-.098-.707-.293c-.391-.391-.391-1.023,0-1.414l2.293-2.293-2.293-2.293c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.293,2.293,2.293-2.293c.391-.391,1.023-.391,1.414,0s.391,1.023,0,1.414Zm7.293-6.707c0,.553-.448,1-1,1h-.885l-1.276,13.472c-.245,2.581-2.385,4.528-4.978,4.528h-5.727c-2.589,0-4.729-1.943-4.977-4.521l-1.296-13.479h-.86c-.552,0-1-.447-1-1s.448-1,1-1h4.101c.465-2.279,2.485-4,4.899-4h2c2.414,0,4.435,1.721,4.899,4h4.101c.552,0,1,.447,1,1Zm-14.828-1h7.656c-.413-1.164-1.524-2-2.828-2h-2c-1.304,0-2.415.836-2.828,2Zm10.934,2H4.87l1.278,13.287c.148,1.547,1.432,2.713,2.986,2.713h5.727c1.556,0,2.84-1.168,2.987-2.718l1.258-13.282Z" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- About -->
        <div class="mt-4">
            <x-input-label for="about" :value="__('About')" />
            <x-textarea id="about" name="about" rows="4"
                class="mt-1 block w-full">{{ old('about') }}</x-textarea>
            <x-input-error :messages="$errors->get('about')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    @section('scripts')
        <script>
            $(document).ready(function() {
                'use strict';

                $('#profile_picture').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.profile_picture-cover').removeClass('hidden');
                            $('.profile_picture-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-profile_picture').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#profile_picture').val('');
                });
            });
        </script>
    @endsection
</x-guest-layout>
