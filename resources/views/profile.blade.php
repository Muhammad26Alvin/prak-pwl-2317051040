<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-r from-yellow-500 via-white-500 to-brown-500">

    <div class="bg-white/20 backdrop-blur-md rounded-2xl shadow-xl p-8 w-80 text-center text-white">
        <!-- Profile Picture -->
        <div class="flex justify-center mb-6 relative">
            <img src="{{ asset('storage/alvin_idv.png') }}" alt="Profile"
                class="w-28 h-28 rounded-full border-4 border-white shadow-lg object-cover">
        </div>


        <!-- Profile Info -->
        <div class="space-y-4">
            <div class="bg-white/30 rounded-lg py-3 font-bold text-lg shadow">{{ $Nama }}</div>
            <div class="bg-white/30 rounded-lg py-3 font-bold text-lg shadow">{{ $NPM }}</div>
            <div class="bg-white/30 rounded-lg py-3 font-bold text-lg shadow">{{ $Kelas }}</div>
        </div>
    </div>

</body>

</html>