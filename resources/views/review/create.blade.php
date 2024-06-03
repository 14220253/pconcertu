<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    @vite('resources/css/app.css');
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

</head>

<body>
    <section>
        <div class="bg-white text-black py-20">
            <div class="container mx-auto flex flex-col md:flex-row my-6 md:my-24">
                <div class="flex flex-col w-full lg:w-1/3 p-8">
                    <p class="ml-6 text-black text-lg uppercase tracking-loose"><a
                            href="{{ route('event.index') }}">&laquo
                            BACK</a></p>
                    <p class="text-3xl md:text-5xl my-4 leading-relaxed md:leading-snug text-indigo-600">Leave us a
                        feedback!
                    </p>
                    <p class="text-sm md:text-base leading-snug text-indigo-600 text-opacity-100">
                        Please provide your valuable feedback and how do you like our application!
                    </p>
                </div>
                <div class="flex flex-col w-full lg:w-2/3 justify-center">
                    <div class="container w-full px-4">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-6/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-xl rounded-lg bg-white">
                                    <div class="flex-auto p-5 lg:p-10">
                                        <h4 class="text-2xl mb-4 text-black font-semibold">Have a suggestion?</h4>

                                        <form id="feedbackForm" action="{{ route('review.store') }}" method="POST">
                                            @csrf
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="rating">Rating</label>
                                                <input type="range" min="1" max="5" name="stars"
                                                    id="stars"
                                                    class="accent-indigo-600 border-collapse px-3 py-3 range-lg rounded text-sm w-full
                    bg-gray-300 placeholder-black text-gray-800 outline-none focus:bg-gray-400"
                                                    placeholder=" " style="transition: all 0.15s ease 0s;" required />
                                            </div>
                                            <div class="relative w-full mb-3">
                                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    for="review">Review</label>
                                                <textarea maxlength="300" name="review" id="review" rows="4" cols="80"
                                                    class="border-0 px-3 py-3 bg-gray-300 placeholder-black text-gray-800 rounded text-sm shadow focus:outline-none w-full"
                                                    placeholder="" required></textarea>
                                            </div>
                                            <div class="text-center mt-6">
                                                <button id="feedbackBtn"
                                                    class="bg-indigo-500 text-white text-center mx-auto active:bg-indigo-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                                    type="submit" style="transition: all 0.15s ease 0s;">Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
