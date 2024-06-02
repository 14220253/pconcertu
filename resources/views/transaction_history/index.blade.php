<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-corporate-7s21b54hb-horizon-ui.vercel.app/static/css/main.d7f96858.css">

</head>
<x-nav></x-nav>

<body>
    <div class="w-full bg-black dark:bg-gray-900 bg-opacity-90 top-0">
        <div class="w-full z-10 right-0">
            <div class="flex items-end lg:flex-row flex-col justify-end">
                <div
                    class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 lg:h-screen h-auto">
                    <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg> --}}
                        <p class="text-sm pl-2 leading-none dark:hover:text-gray-200">Back</p>
                    </div>
                    <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">TRANSACTION
                        HISTORY</p>
                    @foreach ($data as $dat)
                        <div class="flex py-8 md:py-10 lg:py-8 border-t border-gray-50">
                            <div class="w-full">
                                <img src="{{ $dat->poster }}" alt="Gray Sneakers"
                                    class="h-full object-center object-cover md:block hidden" />
                                <img src="{{ $dat->poster }}" alt="Gray Sneakers"
                                    class="md:hidden w-full h-full object-center object-cover" />
                            </div>
                            <div class="w-full flex flex-col justify-center">
                                <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4"> Ticket Id:
                                    {{ $dat->ticket_id }}</p>
                                <div class="flex items-center justify-between w-full pt-1">
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                                        {{ $dat->event_name }}
                                    </p>

                                </div>
                                <p class="text-xs leading-3 text-gray-600 dark:text-white pt-2">Seat:
                                    {{ $dat->seat_id }}</p>
                                <p class="text-xs leading-3 text-gray-600 dark:text-white py-4">Customer:
                                    {{ $dat->customer_name }}</p>
                                <p class="w-96 text-xs leading-3 text-gray-600 dark:text-white">Ticket Type:
                                    {{ $dat->name }}</p>
                                <div class="flex items-center justify-between pt-5">
                                    <div class="flex itemms-center">
                                        <p
                                            class="text-xs leading-3 underline text-gray-800 dark:text-white cursor-pointer">
                                            Detail</p>
                                        <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove
                                        </p>
                                    </div>
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                                        Price: </p>
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                                        {{ $dat->price }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>TEST</div>
</body>

</html>
