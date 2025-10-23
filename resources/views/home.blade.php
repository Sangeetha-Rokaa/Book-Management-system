<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    <header class="bg-white shadow py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">Book Store</h1>
            <nav class="space-x-4">
                <a href="/" class="hover:text-indigo-600">Home</a>
                <a href="#" class="hover:text-indigo-600">About</a>
                <a href="#" class="hover:text-indigo-600">Contact</a>
            </nav>
        </div>
    </header>

    <section class="text-center py-16">
        <h2 class="text-4xl font-bold text-indigo-700">Welcome to Our Book Store</h2>
        <p class="mt-4 text-lg text-gray-600">Find the best books to inspire and educate you.</p>
    </section>

    <section class="container mx-auto px-4 py-12">
        <h3 class="text-2xl font-semibold mb-6 text-center">Popular Books</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://via.placeholder.com/400x240?text=Book+1" class="w-full h-48 object-cover rounded">
                <h4 class="mt-3 font-semibold text-lg">The Alchemist</h4>
                <p class="text-sm text-gray-600 mt-1">By Paulo Coelho</p>
                <p class="font-bold text-indigo-600 mt-2">₹499</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://via.placeholder.com/400x240?text=Book+2" class="w-full h-48 object-cover rounded">
                <h4 class="mt-3 font-semibold text-lg">Atomic Habits</h4>
                <p class="text-sm text-gray-600 mt-1">By James Clear</p>
                <p class="font-bold text-indigo-600 mt-2">₹599</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://via.placeholder.com/400x240?text=Book+3" class="w-full h-48 object-cover rounded">
                <h4 class="mt-3 font-semibold text-lg">Ikigai</h4>
                <p class="text-sm text-gray-600 mt-1">By Héctor García</p>
                <p class="font-bold text-indigo-600 mt-2">₹399</p>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-6 mt-12 text-center text-sm text-gray-500">
        © {{ date('Y') }} Book Store. All rights reserved.
    </footer>

</body>
</html>
