<div class="block mt-4 border border-slate-400" x-data="{ open: true}">
    <div class="flex self-center text-base text-gray-600 w-full bg-slate-50 p-4 cursor-pointer hover:bg-slate-200" @click=" open = ! open">
        <h4 class="font-medium text-black text-base">
            {{ __('Person Involved') }}
        </h4>
    </div>
    <div class="pt-5 pb-10 px-7.5" x-show="open" @click.outside="open = false">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- First Name -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="f_name" :value="__('First Name')" />
                <x-text-input id="f_name" name="f_name" type="text" class="mt-1 block w-full" :value="old('f_name')"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('f_name')" />
            </div>

            <!-- Last Name -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="l_name" :value="__('Last Name')" />
                <x-text-input id="l_name" name="l_name" type="text" class="mt-1 block w-full"
                    :value="old('l_name')" />
                <x-input-error class="mt-2" :messages="$errors->get('l_name')" />
            </div>

            <!-- Nickname -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="nickname" :value="__('Nickname')" />
                <x-text-input id="nickname" name="nickname" type="text" class="mt-1 block w-full"
                    :value="old('nickname')" />
                <x-input-error class="mt-2" :messages="$errors->get('nickname')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Grade -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="grade" :value="__('Grade')" />
                <select id="grade"
                    class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 pl-6 pr-10"
                    name="grade" required>
                    <option value="">{{ __(' -- Select Grade -- ') }}</option>
                    @foreach ($extras->grade as $key => $extra)
                        <option value="{{ $key }}">{{ $extra }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('grade')" />
            </div>

            <!-- Gender -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="gender" :value="__('Gender')" />
                <select id="gender"
                    class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 pl-6 pr-10"
                    name="gender" required>
                    <option value="">{{ __(' -- Select Gender -- ') }}</option>
                    @foreach ($extras->gender as $key => $extra)
                        <option value="{{ $key }}">{{ $extra }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('gender')" />
            </div>

            <!-- Role -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="role" :value="__('Role')" />
                <select id="role"
                    class="block mt-1 w-full border-gray-300 rounded-md text-gray-900 placeholder-gray-500 pl-6 pr-10"
                    name="role" required>
                    <option value="">{{ __(' -- Select Role -- ') }}</option>
                    @foreach ($extras->role as $key => $extra)
                        <option value="{{ $key }}">{{ $extra }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('role')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Age or DOB -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/4">
                <x-input-label for="age_dob" :value="__('Age or DOB')" />
                <x-text-input id="age_dob" name="age_dob" type="text" class="mt-1 block w-full" :value="old('age_dob')"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('age_dob')" />
            </div>

            <!-- Eyes/Glasses -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/4">
                <x-input-label for="eye_glasses" :value="__('Eyes/Glasses')" />
                <x-text-input id="eye_glasses" name="eye_glasses" type="text" class="mt-1 block w-full"
                    :value="old('eye_glasses')" />
                <x-input-error class="mt-2" :messages="$errors->get('eye_glasses')" />
            </div>

            <!-- Hair Color/Style -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/4">
                <x-input-label for="hair_color_style" :value="__('Hair Color/Style')" />
                <x-text-input id="hair_color_style" name="hair_color_style" type="text" class="mt-1 block w-full"
                    :value="old('hair_color_style')" />
                <x-input-error class="mt-2" :messages="$errors->get('hair_color_style')" />
            </div>

            <!-- Facial Hair -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/4">
                <x-input-label for="facial_hair" :value="__('Facial Hair')" />
                <x-text-input id="facial_hair" name="facial_hair" type="text" class="mt-1 block w-full"
                    :value="old('facial_hair')" required />
                <x-input-error class="mt-2" :messages="$errors->get('facial_hair')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Body Type/Build -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="body_type" :value="__('Body Type/Build')" />
                <x-text-input id="body_type" name="body_type" type="text" class="mt-1 block w-full"
                    :value="old('body_type')" required />
                <x-input-error class="mt-2" :messages="$errors->get('body_type')" />
            </div>

            <!-- Scars, Marks, Tattoos, Piercings -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="scars_marks" :value="__('Scars, Marks, Tattoos, Piercings')" />
                <x-text-input id="scars_marks" name="scars_marks" type="text" class="mt-1 block w-full"
                    :value="old('scars_marks')" />
                <x-input-error class="mt-2" :messages="$errors->get('scars_marks')" />
            </div>

            <!-- DL# or ID# -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/3">
                <x-input-label for="dl_id" :value="__('DL# or ID#')" />
                <x-text-input id="dl_id" name="dl_id" type="text" class="mt-1 block w-full"
                    :value="old('dl_id')" />
                <x-input-error class="mt-2" :messages="$errors->get('dl_id')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Clothing -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="clothing" :value="__('Clothing')" />
                <x-text-input id="clothing" name="clothing" type="text" class="mt-1 block w-full"
                    :value="old('clothing')" required />
                <x-input-error class="mt-2" :messages="$errors->get('clothing')" />
            </div>

            <!-- Address -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                    :value="old('address')" />
                <x-input-error class="mt-2" :messages="$errors->get('address')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Description of Residence -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="residence" :value="__('Description of Residence')" />
                <x-text-input id="residence" name="residence" type="text" class="mt-1 block w-full"
                    :value="old('residence')" required />
                <x-input-error class="mt-2" :messages="$errors->get('residence')" />
            </div>

            <!-- Prior Criminal History -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="criminal_history" :value="__('Prior Criminal History')" />
                <x-text-input id="criminal_history" name="criminal_history" type="text" class="mt-1 block w-full"
                    :value="old('criminal_history')" />
                <x-input-error class="mt-2" :messages="$errors->get('criminal_history')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Weapons -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="weapons" :value="__('Weapons')" />
                <x-text-input id="weapons" name="weapons" type="text" class="mt-1 block w-full"
                    :value="old('weapons')" required />
                <x-input-error class="mt-2" :messages="$errors->get('weapons')" />
            </div>

            <!-- Dogs/Animals -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="dogs_animals" :value="__('Dogs/Animals')" />
                <x-text-input id="dogs_animals" name="dogs_animals" type="text" class="mt-1 block w-full"
                    :value="old('dogs_animals')" />
                <x-input-error class="mt-2" :messages="$errors->get('dogs_animals')" />
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Gang Activity -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="gang_activity" :value="__('Gang Activity')" />
                <x-text-input id="gang_activity" name="gang_activity" type="text" class="mt-1 block w-full"
                    :value="old('gang_activity')" required />
                <x-input-error class="mt-2" :messages="$errors->get('gang_activity')" />
            </div>

            <!-- Employer / Work Schedule -->
            <div class="text-base text-gray-600 mt-4 w-full lg:w-1/2">
                <x-input-label for="employer_work" :value="__('Employer / Work Schedule')" />
                <x-text-input id="employer_work" name="employer_work" type="text" class="mt-1 block w-full"
                    :value="old('employer_work')" />
                <x-input-error class="mt-2" :messages="$errors->get('employer_work')" />
            </div>
        </div>

        <!-- Any Other Comments -->
        <div class="text-base text-gray-600 mt-4 w-full">
            <x-input-label for="other_comment" :value="__('Any Other Comments')" />
            <x-text-input id="other_comment" name="other_comment" type="text" class="mt-1 block w-full"
                :value="old('other_comment')" />
            <x-input-error class="mt-2" :messages="$errors->get('other_comment')" />
        </div>
    </div>
</div>
