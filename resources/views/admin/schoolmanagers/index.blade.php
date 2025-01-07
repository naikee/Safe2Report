<x-app-layout>
    @section('pageTitle')
        {{ __($pageTitle . ' - ') }}
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($pageTitle) }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-end">
                <form action="" method="GET" class="">
                    <div class="flex flex-row gap-0">
                        <input type="search" name="search" class="w-60 border border-slate-200 rounded-l-md bg-white" placeholder="{{ __('Search account') }}"
                            value="{{ request()->search }}">
                        <button type="submit" class="p-2.5 bg-blue-700 text-white text-base rounded-r-md">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" x="0" y="0"
                                viewBox="0 0 513.749 513.749" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="fill-current">
                                <g>
                                    <path
                                        d="m504.352 459.061-99.435-99.477c74.402-99.427 54.115-240.344-45.312-314.746S119.261-9.277 44.859 90.15-9.256 330.494 90.171 404.896c79.868 59.766 189.565 59.766 269.434 0l99.477 99.477c12.501 12.501 32.769 12.501 45.269 0 12.501-12.501 12.501-32.769 0-45.269l.001-.043zm-278.635-73.365c-88.366 0-160-71.634-160-160s71.634-160 160-160 160 71.634 160 160c-.094 88.326-71.673 159.906-160 160z"
                                        fill="" opacity="1" data-original="" class=""></path>
                                </g>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <div class="rounded-sm border border-stroke bg-white px-5 pt-6 pb-2.5 shadow-default sm:px-7.5 xl:pb-1">
                <div class="max-w-full overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-2 text-left">
                                <th class="min-w-[250px] py-4 px-4 font-medium text-black">
                                    {{ __('Name') }}
                                </th>
                                <th class="min-w-[120px] py-4 px-4 font-medium text-black">
                                    {{ __('School Name') }}
                                </th>
                                <th class="min-w-[180px] py-4 px-4 font-medium text-black">
                                    {{ __('Email') }}
                                </th>
                                <th class="min-w-[140px] py-4 px-4 font-medium text-black">
                                    {{ __('Phone') }}
                                </th>
                                <th class="min-w-[100px] py-4 px-4 font-medium text-black">
                                    {{ __('Status') }}
                                </th>
                                <th class="py-4 px-4 font-medium text-black">
                                    {{ __('Actions') }}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                                            <div class="h-12.5 w-15 rounded-md">
                                                <img src="{{ asset('storage/media/users/' . $user->profile_picture) }}"
                                                    class="w-12 h-12 rounded-full object-cover"
                                                    alt="{{ $user->name }}">
                                            </div>
                                            <h5 class="text-black font-medium">{{ $user->name }}</h5>
                                        </div>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $user->schools->name }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $user->email }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <p class="text-black">{{ $user->phone }}</p>
                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        @if ($user->status == 1)
                                            <p
                                                class="inline-flex rounded-full bg-success bg-opacity-10 py-1 px-3 text-xs font-medium text-success border border-success">
                                                {{ __('Active') }}
                                            </p>
                                        @else
                                            <p
                                                class="inline-flex rounded-full bg-danger bg-opacity-10 py-1 px-3 text-xs font-medium text-danger border border-danger">
                                                {{ __('Inactive') }}
                                            </p>
                                        @endif

                                    </td>
                                    <td class="border-b border-[#eee] py-5 px-4">
                                        <div class="flex items-center space-x-0.5">
                                            <x-view-button :href="route('schoolmanagers.show', $user)" />

                                            <x-edit-button :href="route('schoolmanagers.edit', $user)" />

                                            <x-delete-button href="#" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mx-auto max-w-screen-2xl px-4 py-4 md:px-6 md:pb-6 2xl:px-10 2xl:pb-10">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
