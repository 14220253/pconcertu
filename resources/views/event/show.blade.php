<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Detail</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite('resources/css/app.css')
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    </head>

    <body>
        <x-nav> </x-nav>
        <div>
            <div
                class="w-full max-w-screen-lg mx-auto my-10 bg-white-100 flex flex-row justify-items-center align-item-center">
                <img class = "rounded-xl"
                    src="https://th.bing.com/th/id/OIP.lrbGqhDubOOFt6ONB9bnbwHaKn?rs=1&pid=ImgDetMain" alt="nirvana">
                <div class="container px-4 mx-4 my-4">
                    <h1 class="text-4xl font-bold">{{ $data->event_name }}</h1>
                    <div class="py-5">
                        <p class="text-3xl font-bold"> EVENT DETAIL </p>
                    </div>
                    <div class="py-5">
                        <p class="text-2xl font-bold"> PRIMARY INFO </p>
                    </div>
                    <div class="container-fluid py-4 text-lg font-bold">
                        <table class="border table-auto rounded-xl shadow-xl">
                            <tr>
                                <td class="py-4 px-3">Location</td>
                                <td class="py-4 px-3">{{ $data->location }}</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-3">Date</td>
                                <td class="py-4 px-3">{{ $data->date }}</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-3">Guest Star</td>
                                <td class="py-4 px-3">{{ $data->guest_name }}</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-3">Dress Code</td>
                                <td class="py-4 px-3">{{ $data->dress_code }}</td>
                            </tr>
                            <tr>
                                <td class="py-4 px-3">Time</td>
                                <td class="py-4 px-3">{{ $data->times }}</td>
                            </tr>
                        </table>
                    </div>
                    <button
                        class="w-full bg-indigo-700 py-4 px-4 rounded-xl text-white hover:bg-indigo-300 hover:text-black"><a href="/echeckout">Buy Ticket</a></button>
                </div>

            </div>
            <div class="py-5 px-4">
                <p class="text-2xl font-bold"> ADDITIONAL INFO </p>
            </div>
            <div class="container flex flex-nowrap gap-8 row-3 overflow-autos mx-6">
                <a href=#><img
                        src="https://as2.ftcdn.net/v2/jpg/03/46/22/65/1000_F_346226539_j5OA9Fz1gspCbDnswc4liDPCydvZKvDu.jpg"
                        class="w-112 h-64 rounded-xl aspect-square"></img></a>
                <a href=#><img
                        src="https://as2.ftcdn.net/v2/jpg/03/46/22/65/1000_F_346226539_j5OA9Fz1gspCbDnswc4liDPCydvZKvDu.jpg"
                        class="w-112 h-64 rounded-xl aspect-square"></img></a>
                <a><img src="https://as2.ftcdn.net/v2/jpg/03/46/22/65/1000_F_346226539_j5OA9Fz1gspCbDnswc4liDPCydvZKvDu.jpg"
                        class="w-112 h-64 rounded-xl aspect-square"></img></a>
            </div>
            <div class="py-5 px-4">
                <p class="text-2xl font-bold"> TICKET TYPE </p>
            </div>
            <div class="container flex flex-nowrap gap-8 row-3 overflow-auto mx-6">
                @foreach ($groupedData as $event_data)
                    <div class="w-96 h-54 rounded-xl aspect-square px-4 py-4 bg-indigo-600">
                        <h1 class="text-xl font-bold text-white my-5">TYPE</h1>
                        <p class="text-white my-5">{{ $event_data->ticket_category_name }}</p>
                        <h1 class="text-xl font-bold text-white my-5">PRICE</h1>
                        <p class="text-white my-5">{{ $event_data->price }}</p>
                        <button class="w-full text-black rounded-lg bg-white px-4 py-4">Learn More</button>
                    </div>
                @endforeach
                {{-- <div class="w-96 h-54 rounded-xl aspect-square px-4 py-4 bg-indigo-600">
                        <h1 class="text-xl font-bold text-white my-5">TYPE</h1>
                        <p class="text-white my-5">Ticket Diamond</p>
                        <h1 class="text-xl font-bold text-white my-5">PRICE</h1>
                        <p class="text-white my-5">Rp 9 100 000</p>
                        <button class="w-full text-black rounded-lg bg-white px-4 py-4">Learn More</button>
                    </div>
                    <div class="w-96 h-54 rounded-xl aspect-square px-4 py-4 bg-indigo-600">
                        <h1 class="text-xl font-bold text-white my-5">TYPE</h1>
                        <p class="text-white my-5">Ticket Diamond</p>
                        <h1 class="text-xl font-bold text-white my-5">PRICE</h1>
                        <p class="text-white my-5">Rp 9 100 000</p>
                        <button class="w-full text-black rounded-lg bg-white px-4 py-4">Learn More</button>
                    </div> --}}
            </div>
        </div>
        <div class="py-5 px-4">
            <p class="text-2xl font-bold"> REVIEW </p>
        </div>
        @foreach ($reviews as $review)
            <div class="w-full bg-white px-4 py-4 mx-5">
                <div class="flex flex-row ">
                    <p class="text-xl font-bold"> {{ $review->name }}</p>
                    <p class="text-md font-normal mx-5">Customer Id: {{ $review->cust_id }}</p>
                    <p class="mx-5">Rating: {{ $review->rating }}</p>
                </div>
                <p class="text-lg font-normal">{{ $review->review }}</p>


            </div>
        @endforeach
    </body>

    </html>
