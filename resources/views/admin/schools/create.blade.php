<x-app-layout>
    @section('pageTitle')
        {{ __($pageTitle . ' - ') }}
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $pageTitle }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto max-w-screen-2xl p-4  md:p-6 2xl:p-10">
            <div class="mx-auto">
                <form method="POST" action="{{ route('school.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-5 gap-8">
                        <div class="col-span-5 xl:col-span-3">
                            <div
                                class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-10 shadow-default sm:px-7.5 xl:pb-15">
                                <div class="border-b border-stroke pb-4 px-6.5 mb-4">
                                    <h3 class="font-semibold text-black">
                                        Enter School Details
                                    </h3>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8 pt-2">
                                    <!-- School Owner -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-2/3">
                                        <x-input-label for="name" :value="__('School Name')" />
                                        <select id="user_id"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="user_id">
                                            <option value="">{{ __('Select User') }}</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    @isset($school) {{ old('user_id', $school->user_id) == $user->id ? 'selected' : '' }} @endisset>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('user_id')" />
                                    </div>

                                    <!-- School Status -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                                        <x-input-label for="status" :value="__('School Status')" />
                                        <select id="status"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 py-4 pl-6 pr-10"
                                            name="status">
                                            <option value="1">{{ __('Active') }}</option>
                                            <option value="0">{{ __('Inactive') }}</option>
                                        </select>
                                        <x-input-error class="mt-2" :messages="$errors->get('status')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- School Name -->
                                    <div class="text-base text-gray-600 mt-4 w-full">
                                        <x-input-label for="name" :value="__('School Name')" />
                                        <x-text-input id="name" name="name" type="text"
                                            class="mt-1 block w-full" :value="old('name')" required />
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- School Email -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="email" :value="__('School Email')" />
                                        <x-text-input id="email" name="email" type="email"
                                            class="mt-1 block w-full" :value="old('email')" required />
                                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                    </div>

                                    <!-- School Phone # -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="phone" :value="__('School Phone #')" />
                                        <x-text-input id="phone" name="phone" type="tel"
                                            class="mt-1 block w-full" :value="old('phone')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- About School -->
                                    <div class="text-base text-gray-600 mt-4 w-full">
                                        <x-input-label for="about" :value="__('About School')" />
                                        <x-textarea id="about" name="about" rows="4"
                                            class="mt-1 block w-full">{{ old('about') }}</x-textarea>
                                        <x-input-error class="mt-2" :messages="$errors->get('about')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- School Address -->
                                    <div class="text-base text-gray-600 mt-4 w-full">
                                        <x-input-label for="address" :value="__('School Address')" />
                                        <x-text-input id="address" name="address" type="text"
                                            class="mt-1 block w-full" :value="old('address')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- State -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="state" :value="__('State')" />
                                        <select id="state"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 pl-6 pr-10"
                                            name="state" required>
                                            <option value="">{{ __('Select State') }}</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->state }}">{{ $state->state }}</option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                                    </div>

                                    <!-- LGA -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="lga" :value="__('Local Government')" />
                                        <select id="lga"
                                            class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 pl-6 pr-10"
                                            name="lga" required>
                                            <option value="">{{ __('Select Local Government') }}</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('lga')" class="mt-2" />
                                    </div>
                                </div>

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- School Postal Code -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="postal" :value="__('Postal Code')" />
                                        <x-text-input id="postal" name="postal" type="text"
                                            class="mt-1 block w-full" :value="old('postal')" />
                                        <x-input-error class="mt-2" :messages="$errors->get('postal')" />
                                    </div>

                                    <!-- School Country -->
                                    <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                                        <x-input-label for="country" :value="__('Country')" />
                                        <x-text-input id="country" class="block mt-1 w-full bg-slate-200"
                                            type="text" name="country" :value="__('Nigeria')" readonly />
                                        <x-input-error class="mt-2" :messages="$errors->get('country')" />
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-span-5 xl:col-span-2">
                            <div
                                class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-12 shadow-default sm:px-7.5 xl:pb-10">

                                <div class="flex flex-col lg:flex-row gap-8">
                                    <!-- School Logo -->
                                    <div class="text-base text-gray-600 mt-4 w-full">
                                        <x-input-label for="image" :value="__('School Logo')" />
                                        <x-text-input id="school_logo"
                                            class="block mt-1 w-full cursor-pointer rounded-lg border-[1.5px] border-stroke bg-transparent font-normal outline-none transition file:mr-5 file:border-collapse file:cursor-pointer file:border-0 file:border-r file:border-solid file:border-slate-200 file:bg-whiter file:px-5 file:py-2 file:hover:bg-primary file:hover:bg-opacity-10 focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter"
                                            type="file" name="image" :value="old('image')" />
                                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                        <div class=" mt-3 h-24 w-24 relative hidden school_logo-cover">
                                            <img src="" class="h-24 w-24 rounded-lg object-cover" />
                                            <div
                                                class="group flex justify-center items-center absolute top-0 bottom-0 left-0 right-0 hover:bg-black hover:bg-opacity-60 rounded-lg remove-school_logo">
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
                                <div class="flex items-center justify-end gap-8 mt-6">
                                    <a href="{{ route('schools.index') }}" class="text-danger">{{ __('Cancel') }}</a>
                                    <x-primary-button
                                        class="font-medium py-3 px-6">{{ __('Save School') }}</x-primary-button>

                                    @if (session('status') === 'school-created')
                                        <p x-data="{ show: true }" x-show="show" x-transition
                                            x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                            {{ __('School Created.') }}</p>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    @section('scripts')
        <script>
            $(document).ready(function() {
                'use strict';

                $('#school_logo').on('change', function() {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.school_logo-cover').removeClass('hidden');
                            $('.school_logo-cover img').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                });

                $('.remove-school_logo').on('click', function() {
                    $(this).siblings('img').removeAttr('src');
                    $(this).parent().addClass('hidden');
                    $('#school_logo').val('');
                });

                $('#state').on('change', function() {
                    let stateVal = $(this).val(),
                        lga = $('#lga');
                    let jsonURL = "{{ asset('backend/assets/partials/nigeria-states-lga.json') }}";

                    $.getJSON(jsonURL, function(key) {

                        for (let i = 0; i < key.length; i++) {
                            const elementKey = key[i];
                            if (elementKey["state"] === stateVal) {
                                console.log(key[i]["lgas"]);
                                lga.empty();
                                lga.append("<option>Select Local Government</option>");
                                $.each(key[i]["lgas"], function(j, value) {
                                    lga.append($("<option>").attr("value", value).text(value));
                                })
                            }

                            if (stateVal === '') {
                                lga.empty();
                                lga.append("<option>Select Local Government</option>");
                            }
                        }

                    });
                });
            });
        </script>
    @endsection
</x-app-layout>
