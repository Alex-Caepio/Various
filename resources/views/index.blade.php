<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-gray-200 w-full h-full font-sans">
    <div class="flex h-screen">
        <div class="m-auto">
            <h1 class="text-center pb-12 text-2xl font-bold">
                Newsletter
            </h1>
            
            <form action="/subscribe" method="post">
                @csrf
                <input type="text" name="email" placeholder="Enter Email..." class="px-4 py-2 shadow-xl rounded-xl placeholder-gray-50::placeholder">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded-full">
            </form>
        </div>
    </div>            
    
</body>
</html>