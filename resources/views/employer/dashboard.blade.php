<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Employer') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <div class="overflow-x-auto my-2">
                            <h1 class="text-lg font-bold sm:text-xl my-8">Table News</h1>
                            <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
                                @csrf
                                @method('delete')

                                <thead>
                                    <tr class="divide-x divide-gray-100">
                                        <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                                            Nama Job</th>
                                        <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                                            Slug
                                        </th>
                                        <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                                            Deskripsi</th>
                                        <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                                            Kriteria
                                        </th>
                                        <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">
                                            Jumlah
                                        </th>
                                    </tr>
                                </thead>

                                {{-- table innfo job --}}
                                @foreach ($jobs as $job)
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="divide-x divide-gray-100">
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">
                                            {{$job->nama}}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $job->slug }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $job->deskripsi }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $job->kriteria }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $job->jumlah }}</td>
                                        <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <a style="color: red"
                                                href={{ url('delete-job/'. $job->id) }} >Hapus</a><a style="color: blue"
                                                href={{url('edit-job/'. $job->slug)}}>Edit</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <table class="min-w-full text-sm divide-y divide-gray-200">
                            <h1 class="text-lg font-bold sm:text-xl my-8">Table Data Pelamar</h1>
                            <thead>
                                <tr>
                                    <th class="sticky left-0 p-4 text-left bg-white">
                                        <label class="sr-only" for="row_all">Select All</label>
                                        <input class="w-5 h-5 border-gray-200 rounded" type="checkbox" id="row_all" />
                                    </th>
                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            Nama
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            Email
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            Job
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>

                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            CV
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            KTP
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                    <th class="p-4 font-medium text-left text-gray-900 whitespace-nowrap">
                                        <div class="flex items-center">
                                            Aksi
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1.5 text-gray-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            @foreach ( $data as $info)
                            <tbody class="divide-y divide-gray-100">
                                <tr>
                                    <td class="sticky left-0 p-4 bg-white">
                                        <label class="sr-only" for="row_1">Row 1</label>
                                        <input class="w-5 h-5 border-gray-200 rounded" type="checkbox" id="row_1" />
                                    </td>
                                    <td class="p-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $info->pegawai->name }}
                                    </td>
                                    <td class="p-4 text-gray-700 whitespace-nowrap">
                                        {{ $info->pegawai->email }}

                                    </td>
                                    <td class="p-4 text-gray-700 whitespace-nowrap">{{ $info->kantor->nama }}</td>
                                    <td class="p-4 text-gray-700 whitespace-nowrap">{{ $info->cv }} <a
                                            style="color: blue" href={{ url('download/'. $info->id) }}>Download</a>
                                    </td>
                                    <td class="p-4 text-gray-700 whitespace-nowrap">{{ $info->ktp }}</td>
                                    <td class="p-4 text-gray-700 whitespace-nowrap"><a style="color: red" href={{
                                            url('job/delete/'. $info->id) }} >Hapus</a></td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>

                <a href="/add-jobs" class="btn btn-primary mt-4">Add Jobs</a>
            </div>
        </div>
    </div>
</x-app-layout>