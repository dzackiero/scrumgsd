<main class="w-screen flex py-16">
    <div class="flex flex-col gap-16  px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Proyek Saya</h1>
        <x-card width="max-w-6xl">
            <div class="relative overflow-x-auto shadow-md rounded sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-sm text-gray-700 bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Tim
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Detail
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(collect($projects)->isEmpty())
                        <tr>
                            <td colspan="10" class="bg-white h-20 text-center">Tidak ada data yang ditemukan</td>
                        </tr>
                    @endif
                    @foreach($projects as $project)
                        <tr class="odd:bg-white even:bg-gray-50  border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $project->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $project->year }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->team_count }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route("projects.detail", ["project" => $project->id]) }}"
                                   class="font-medium text-blue-600 hover:underline">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </x-card>
    </div>
</main>
