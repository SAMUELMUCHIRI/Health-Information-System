<div class="flex flex-col flex-1 gap-2 w-full overflow-x-auto" >
    @php 
        use Carbon\Carbon; 
        Carbon::setLocale('en');
    @endphp

    <table class="min-w-full table-auto text-left">
        <thead class="bg-gray-100 dark:bg-gray-700">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Years</th>
                <th class="px-4 py-2">Sex</th>
                <th class="px-4 py-2">Contact</th>
                <th class="px-4 py-2">Created at</th>
                <th class="px-4 py-2">Check</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($latest_clients as $client)
                <tr class="bg-gray-200 dark:bg-gray-50 border-b border-gray-300 dark:border-gray-600 hover:bg-gray-300 transition-all flex-1">
                    <td class="px-4 py-2 font-semibold capitalize">{{$client->firstname}} {{$client->secondname}}</td>
                    <td class="px-4 py-2">{{Carbon::parse( $client->date_of_birth)->age}} </td>
                    <td class="px-4 py-2">{{$client->gender}}</td>
                    <td class="px-4 py-2">{{$client->contact_info}}</td>
                    <td class="px-4 py-2">{{ Carbon::parse($client->created_at)->diffForHumans() }}</td>
                    <td class="px-4 py-2 text-blue-600 hover:underline cursor-pointer">Check</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
