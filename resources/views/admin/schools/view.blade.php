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
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row justify-end">
                {{-- @include('backend.admin.schools.partials.action-buttons') --}}
            </div>
            <div class="mb-7.5 grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
                <div class="col-span-12 xl:col-span-5">
                    <div class="rounded-sm border pb-4 border-stroke bg-white shadow-default">
                        <div class="p-5">
                            <img src="{{ asset('storage/media/schools/' . $school->image) }}" class="w-32 h-32 rounded-full mx-auto object-cover"
                                alt="{{ $school->name }}">
                        </div>
                        <div class="px-5">
                            <table class="w-full table-auto">
                                <tr>
                                    <th class="border-b border-[#eee] py-2 px-4 text-left">{{ __('School Name') }}</th>
                                    <td class="border-b border-[#eee] py-2 px-4">{{ $school->name }} <br/><small class="text-xs text-primary">{{ $school->username }}</small></td>
                                </tr>
                                <tr>
                                    <th class="border-b border-[#eee] py-2 px-4 text-left">{{ __('School Phone') }}</th>
                                    <td class="border-b border-[#eee] py-2 px-4">{{ $school->phone }}</td>
                                </tr>
                                <tr>
                                    <th class="border-b border-[#eee] py-2 px-4 text-left">{{ __('School Email') }}
                                    </th>
                                    <td class="border-b border-[#eee] py-2 px-4">{{ $school->email }}</td>
                                </tr>
                                <tr>
                                    <th class="border-b border-[#eee] py-2 px-4 text-left">{{ __('School Manager') }}
                                    </th>
                                    <td class="border-b border-[#eee] py-2 px-4">{{ $school->user->name }}</td>
                                </tr>
                                <tr>
                                    <th class="border-b border-[#eee] py-2 px-4 text-left">{{ __('School Address') }}
                                    </th>
                                    <td class="border-b border-[#eee] py-2 px-4">{{ $school->address->address. ", " .$school->address->lga. ", " .$school->address->state }}</td>
                                </tr>
                                <tr>
                                    <th class="py-2 px-4 text-left">{{ __('Status') }}</th>
                                    <td class="py-2 px-4">
                                        @if ($school->status == 1)
                                            <span
                                                class="inline-flex rounded-full bg-success bg-opacity-10 py-1 px-3 text-sm font-medium text-success">
                                                {{ __('Active') }}
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex rounded-full bg-danger bg-opacity-10 py-1 px-3 text-sm font-medium text-danger">
                                                {{ __('Inactive') }}
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-7">
                    <div class="rounded-sm border pb-10 border-stroke bg-white shadow-default">
                        <div class="flex flex-col gap-4 p-4 sm:flex-row md:p-6 xl:p-7.5">
                            <svg class="fill-current" width="28" height="29" viewBox="0 0 28 29" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.72659 3.36759C5.32314 2.77105 6.13222 2.43591 6.97585 2.43591H16.2295L16.2299 2.43591L16.2303 2.43591C16.4817 2.43591 16.7081 2.54281 16.8665 2.71363L23.7604 9.6075C23.9312 9.76594 24.0381 9.99231 24.0381 10.2437C24.0381 10.2568 24.0378 10.2699 24.0372 10.2828V24.1241C24.0372 24.9677 23.7021 25.7768 23.1055 26.3733C22.509 26.9699 21.6999 27.305 20.8563 27.305H6.97585C6.13222 27.305 5.32313 26.9699 4.72659 26.3733C4.13005 25.7768 3.79492 24.9677 3.79492 24.1241V5.61684C3.79492 4.77321 4.13005 3.96413 4.72659 3.36759ZM6.97585 4.17097H15.3628V10.2437C15.3628 10.7228 15.7512 11.1112 16.2303 11.1112H22.3022V24.1241C22.3022 24.5075 22.1498 24.8753 21.8787 25.1465C21.6075 25.4176 21.2397 25.57 20.8563 25.57H6.97585C6.59238 25.57 6.22462 25.4176 5.95346 25.1465C5.68231 24.8753 5.52997 24.5075 5.52997 24.1241V5.61684C5.52997 5.23337 5.68231 4.86561 5.95346 4.59445C6.22462 4.3233 6.59238 4.17097 6.97585 4.17097ZM17.0979 5.3987L21.0753 9.37613H17.0979V5.3987ZM9.2896 15.1596C8.81048 15.1596 8.42208 15.548 8.42208 16.0271C8.42208 16.5062 8.81048 16.8946 9.2896 16.8946H18.5432C19.0223 16.8946 19.4107 16.5062 19.4107 16.0271C19.4107 15.548 19.0223 15.1596 18.5432 15.1596H9.2896ZM8.42208 20.654C8.42208 20.1749 8.81048 19.7865 9.2896 19.7865H18.5432C19.0223 19.7865 19.4107 20.1749 19.4107 20.654C19.4107 21.1332 19.0223 21.5216 18.5432 21.5216H9.2896C8.81048 21.5216 8.42208 21.1332 8.42208 20.654ZM9.2896 10.5328C8.81048 10.5328 8.42208 10.9212 8.42208 11.4003C8.42208 11.8795 8.81048 12.2679 9.2896 12.2679H11.603C12.0821 12.2679 12.4705 11.8795 12.4705 11.4003C12.4705 10.9212 12.0821 10.5328 11.603 10.5328H9.2896Z"
                                    fill=""></path>
                            </svg>
                            <h3 class="text-xl font-bold text-black">
                                {{ __('About ' . $school->name) }}
                            </h3>
                        </div>

                        <div class="px-7.5">
                            {!! nl2br(e($school->about)) !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Group Members --}}
            {{-- <div
                class="rounded-sm border border-stroke bg-white mb-[40px] px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
                <div class="max-w-full overflow-x-auto">
                    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <h4 class="text-2xl font-bold text-black">
                            Group Members
                        </h4>
                    </div>

                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-2 text-left">
                                <th class="min-w-[250px] py-4 px-4 font-medium text-black">
                                    {{ __('Name') }}
                                </th>
                                <th class="min-w-[180px] py-4 px-4 font-medium text-black">
                                    {{ __('Email') }}
                                </th>
                                <th class="min-w-[120px] py-4 px-4 font-medium text-black">
                                    {{ __('Position') }}
                                </th>
                                <th class="min-w-[180px] py-4 px-4 font-medium text-black text-right">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groupusers as $key => $groupuser)
                                <tr>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="h-12.5 w-15 rounded-md">
                                                <img src="{{ asset('uploads/profiles/' . $groupuser->user->profile_picture) }}"
                                                    class="w-12 h-12 rounded-full object-cover"
                                                    alt="{{ $groupuser->user->name }}">
                                            </div>
                                            <h5 class="text-black font-medium">{{ $groupuser->user->name }}</h5>
                                        </div>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $groupuser->user->email }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $groupuser->position }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <div class="flex items-right justify-end space-x-0.5">
                                            @include('backend.admin.groups.partials.edit-member-button')

                                            <x-delete-button href="#" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}

            {{-- Pending Invites --}}
            {{-- <div class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
                <div class="max-w-full overflow-x-auto">
                    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <h4 class="text-2xl font-bold text-black">
                            Pending Invites
                        </h4>
                    </div>

                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-2 text-left">
                                <th class="min-w-[250px] py-4 px-4 font-medium text-black">
                                    {{ __('Email') }}
                                </th>
                                <th class="min-w-[120px] py-4 px-4 font-medium text-black">
                                    {{ __('Position') }}
                                </th>
                                <th class="min-w-[180px] py-4 px-4 font-medium text-black text-right">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendinginvitations as $key => $pendingiv)
                                <tr>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $pendingiv->email }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $pendingiv->position }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <div class="flex items-right justify-end space-x-0.5">
                                            @include('backend.admin.groups.partials.edit-iv-button')

                                            <x-delete-button href="#" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}

        </div>
    </div>
</x-app-layout>
