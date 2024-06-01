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
    <style>
        /* width */
        #scroll::-webkit-scrollbar {
            width: 1px;
        }

        /* Track */
        #scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        #scroll::-webkit-scrollbar-thumb {
            background: rgb(133, 132, 132);
        }
    </style>
    </div>
    <script>
        let checkout = document.getElementById("checkout");
        let checdiv = document.getElementById("chec-div");
        let flag3 = false;
        const checkoutHandler = () => {
            if (!flag3) {
                checkout.classList.add("translate-x-full");
                checkout.classList.remove("translate-x-0");
                setTimeout(function() {
                    checdiv.classList.add("hidden");
                }, 1000);
                flag3 = true;
            } else {
                setTimeout(function() {
                    checkout.classList.remove("translate-x-full");
                    checkout.classList.add("translate-x-0");
                }, 1000);
                checdiv.classList.remove("hidden");
                flag3 = false;
            }
        };
    </script>
</head>

<body>
    <a href="/">Portal</a>
    <h1>Transaction History</h1>
    {{-- @foreach ($transactionHistory as $history)
        <p>--------------------------------------------------------</p>
        <p>customer id: {{ $history->customer_id }}</p>
        <p>ticket type: {{ $history->ticketType->name }}</p>
        <p>ticket_id (how event name help): {{ $history->ticket_id }}</p>
        <p>seat id: {{ $history->seat_id }}</p>
        <p>--------------------------------------------------------</p>
    @endforeach --}}
    <div class="flex items-center justify-center py-8">
        <button onclick="checkoutHandler(false)"
            class="py-2 px-10 rounded bg-indigo-600 hover:bg-indigo-700 text-white">Open Modal</button>
    </div>
    <div class="w-full h-full bg-black dark:bg-gray-900 bg-opacity-90 top-0 overflow-y-auto overflow-x-hidden fixed sticky-0"
        id="chec-div">
        <div class="w-full absolute z-10 right-0 h-full overflow-x-hidden transform translate-x-0 transition ease-in-out duration-700"
            id="checkout">
            <div class="flex items-end lg:flex-row flex-col justify-end" id="cart">
                <div class="lg:w-1/2 md:w-8/12 w-full lg:px-8 lg:py-14 md:px-6 px-4 md:py-8 py-4 bg-white dark:bg-gray-800 overflow-y-hidden overflow-x-hidden lg:h-screen h-auto"
                    id="scroll">
                    <div class="flex items-center text-gray-500 hover:text-gray-600 dark:text-white cursor-pointer"
                        onclick="checkoutHandler(false)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                            width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <polyline points="15 6 9 12 15 18" />
                        </svg>
                        <p class="text-sm pl-2 leading-none dark:hover:text-gray-200">Back</p>
                    </div>
                    <p class="lg:text-4xl text-3xl font-black leading-10 text-gray-800 dark:text-white pt-3">TRANSACTION
                        HISTORY</p>
                    @foreach ($data as $dat)
                        <div class="flex py-8 md:py-10 lg:py-8 border-t border-gray-50">
                            <div class="w-full">
                                <img src="https://i.ibb.co/c6KyDXN/Rectangle-5-1.png" alt="Gray Sneakers"
                                    class="h-full object-center object-cover md:block hidden" />
                                <img src="https://i.ibb.co/yVSpYqx/Rectangle-6.png" alt="Gray Sneakers"
                                    class="md:hidden w-full h-full object-center object-cover" />
                            </div>
                            <div class="w-full flex flex-col justify-center">
                                <p class="text-xs leading-3 text-gray-800 dark:text-white md:pt-0 pt-4"> Ticket Id:
                                    {{ $dat->ticket_id }}</p>
                                <div class="flex items-center justify-between w-full pt-1">
                                    <p class="text-base font-black leading-none text-gray-800 dark:text-white">
                                        {{ $dat->event_name }}
                                    </p>
                                    {{-- <select aria-label="Select quantity"
                                        class="py-2 px-1 border border-gray-200 mr-6 focus:outline-none dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select> --}}
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
</body>

</html>
