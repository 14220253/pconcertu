<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

</head>

<x-nav></x-nav>
<div class="bg-gray-100 h-screen py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Order Checkout</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Event</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
    <td class="py-4">
        <div class="flex items-center">
            <img class="h-16 w-16 mr-4" src="https://th.bing.com/th/id/OIP.lrbGqhDubOOFt6ONB9bnbwHaKn?rs=1&pid=ImgDetMain"
                alt="Product image">
            <span class="font-semibold">Nirvana Nevermind</span>
        </div>
    </td>
    <td class="py-4">Rp 5 000 000</td>
    <td class="py-4">
        <div class="flex items-center" x-data="{ amount: 1 }">
            <button @click="amount= Math.max(0,amount-1)"
                class="border rounded-md py-2 px-4 mr-2 text-black hover:bg-indigo-600 hover:text-white">-</button>
            <span class="text-center w-8" x-text="amount"></span>
            <button @click="amount= amount+1"
                class="border rounded-md py-2 px-4 ml-2 text-black hover:bg-indigo-600 hover:text-white">+</button>
        </div>
    </td>
    <td class="py-4">$190.99
    </td>
</tr>

                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>$190.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>$1.99</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">$192.98</span>
                    </div>
                    <button class="bg-indigo-600 text-white py-2 px-4 rounded-lg mt-4 w-full"><a href="/payment_method">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
