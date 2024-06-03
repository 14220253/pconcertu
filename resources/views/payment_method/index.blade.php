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
        <h1 class="text-2xl font-semibold mb-4">Payment Method</h1>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-indigo-500 text-white font-semibold mb-4"><a href="/event">LinkAja!</a></button>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-blue-500 text-white font-semibold mb-4"><a href="/event">BCA Virtual Account</a></button>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-red-500 text-white font-semibold mb-4"><a href="/event">Credit Card</a></button>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-purple-500 text-white font-semibold mb-4"><a href="/event">OVO</a></button>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-green-500 text-white font-semibold mb-4"><a href="/event">GoPay</a></button>
        <button class="text-2xl px-4 py-4 rounded-xl w-full bg-orange-500 text-white font-semibold mb-4"><a href="/event">Shopee Pay</a></button>

    </div>
</div>
