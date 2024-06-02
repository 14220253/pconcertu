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
    <div
        class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 lg:h-screen h-auto">
        <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">TRANSACTION
            HISTORY</p>
        @foreach ($data as $dat)
            <div class="flex py-8 md:py-10 lg:py-8 border-t border-gray-50">
                <div class="w-full">
                    <img src="{{ $dat->poster }}" class="rounded-xl" alt="Gray Sneakers"
                        class="h-full object-center object-cover md:block hidden">
                    {{-- <img src="{{ $dat->poster }}" class="rounded-xl" alt="Gray Sneakers"
                                    class="md:hidden w-full h-full object-center object-cover"> --}}
                </div>
                <div class="w-full flex flex-col justify-center">
                    <p class="text-l leading-3 text-gray-800 dark:text-white md:pt-0 pt-4"> Ticket Id:
                        {{ $dat->ticket_id }}</p>
                    <div class="flex items-center justify-between w-full pt-1">
                        <p class="text-3xl font-black leading-none text-gray-800 dark:text-white">
                            {{ $dat->event_name }}
                        </p>

                    </div>
                    <p class="text-xl leading-3 text-gray-600 dark:text-white pt-2">Seat:
                        {{ $dat->seat_id }}</p>
                    <p class="text-xl leading-3 text-gray-600 dark:text-white py-4">Customer:
                        {{ $dat->customer_name }}</p>
                    <p class="w-96 text-xl leading-3 text-gray-600 dark:text-white">Ticket Type:
                        {{ $dat->name }}</p>
                    <div class="flex items-center justify-between pt-5">
                        <div class="flex itemms-center">
                            <button class="bg-indigo-600 rounded-xl py-3 px-4 text-white">
                                Order Merch</button>
                            {{-- <p class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Remove
                                        </p> --}}
                        </div>
                        <p class="text-xl py-3 font-black leading-none text-gray-800 dark:text-white">
                            Price: </p>
                        <p class="text-xl py-3 font-black leading-none text-gray-800 dark:text-white">
                            {{ $dat->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
