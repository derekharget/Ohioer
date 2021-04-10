<div class="col-start-1 col-end-4">
    <div class="grid grid-cols-6  mt-2">
        <div class="col-start-1 col-end-7">
            <p class="text-gray-500 text-center text-3xl">Name Search:</p>
        </div>

        <div class="col-start-1 col-end-7">
            <form action="/search" method="get">
                <div class="mb-4 pt-1 px-3"><input class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" type="text" placeholder="First Name" name="first" value="{{ request()->input('first') ?? old('first') }}"></div>
                <div class="px-3"> <input class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" type="text" placeholder="Last Name" name="last" value="{{ request()->input('last') ?? old('last') }}"></div>
        </div>

        <div class="col-start-5 col-end-6 mt-6 m">
            <button type="submit" class="text-blue-500 bg-transparent border border-solid border-blue-500 hover:bg-blue-500 hover:text-white active:bg-blue-500 font-bold uppercase text-sm px-6 py-3  rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Search</button>
            </form>
        </div>
    </div>
</div>
