
@include('template.header')



<!-- Navigation bar template needs to go right here -->
@include('template.navigation')



<div class="grid grid-cols-12 gap-4 mt-2">

    @include('template.search')

    <div class="col-start-4 col-end-12">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        @if($citizen_user_data->isNotEmpty())
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Age
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Address
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Zip
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($citizen_user_data as $citizen)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                <a href="/citizen/{{ $citizen->id }}">{{$citizen->getFullName()}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $citizen->getAge() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold">
                      {{ $citizen->AddressFormat() }}
                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $citizen->residential_zip }}
                                </td>

                            </tr>
                            @endforeach

                            <!-- More items... -->
                            </tbody>
                        </table>
                        @else
                            <div>No data found</div>
                        @endif
                    </div>
                    <div class="mt-6">
                    {{ $citizen_user_data->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('template.footer')
