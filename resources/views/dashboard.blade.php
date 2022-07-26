<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
                <a href="/add-news" class="btn btn-primary mt-4">Add News</a>

                <div class="overflow-x-auto my-2">
                    <h1 class="text-lg font-bold sm:text-xl my-8">Table News</h1>
                    <table class="min-w-full text-sm border border-gray-100 divide-y-2 divide-gray-200">
                        @csrf
                        @method('delete')

                        <thead>
                            <tr class="divide-x divide-gray-100">
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Judul
                                    Berita</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Deskripsi
                                </th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Gambar</th>
                                <th class="px-4 py-2 font-medium text-left text-gray-900 whitespace-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($news as $j)
                        <tbody class="divide-y divide-gray-200">
                            <tr class="divide-x divide-gray-100">
                                <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">{{ $j->judul }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $j->isi }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap">{{ $j->gambar }}</td>
                                <td class="px-4 py-2 text-gray-700 whitespace-nowrap"> <a style="color: red" href={{
                                        url('delete-news/'. $j->id) }} >Hapus</a><a href={{ url('edit-news/'. $j->slug)
                                        }}>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</x-app-layout>