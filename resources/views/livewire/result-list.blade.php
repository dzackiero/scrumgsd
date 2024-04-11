<main class="w-screen flex py-16">
    <div class="flex flex-col gap-16  px-4 md:px-12 w-full items-center">
        <h1 class="text-5xl font-semibold text-center text-white">Laporan Penilaian</h1>
        <x-card width="max-w-6xl">


            <div class="relative overflow-x-auto shadow-md rounded-lg sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-sm text-gray-700 bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Skor
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Detail
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $result)
                        <tr class="odd:bg-white even:bg-gray-50  border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $result->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $result->position }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $result->score }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="{{ route("results.detail", ["result" => $result->id]) }}"
                                   class="font-medium text-blue-600 hover:underline">Lihat Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </x-card>
    </div>
</main>
