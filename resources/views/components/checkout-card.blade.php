<tr>
    <td class="py-4">
        <div class="flex items-center">
            <img class="h-16 w-16 mr-4" src="https://th.bing.com/th/id/OIP.N4o2W6d4jxR_R6ufYMI9PgHaHa?rs=1&pid=ImgDetMain"
                alt="Product image">
            <span class="font-semibold">Taylor Swift Red Tour Hoodie</span>
        </div>
    </td>
    <td class="py-4">Rp 500 000</td>
    <td class="py-4">
        <div class="flex items-center" x-data="{ amount: 1 }">
            <button @click="amount= Math.max(0,amount-1)"
                class="border rounded-md py-2 px-4 mr-2 text-black hover:bg-indigo-600 hover:text-white">-</button>
            <span class="text-center w-8" x-text="amount"></span>
            <button @click="amount= amount+1"
                class="border rounded-md py-2 px-4 ml-2 text-black hover:bg-indigo-600 hover:text-white">+</button>
        </div>
    </td>
    <td class="py-4">$19.99
    </td>
</tr>
