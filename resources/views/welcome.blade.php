<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <main class="container mx-auto mt-10">
        <form action="{{ url('video') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input class="w-full mb-2 p-2 border border-gray-300" type="text" name="title"
                placeholder="Enter Video Title" />

            <textarea class="w-full mb-2 p-2 border border-gray-300" name="description" cols="30" rows="10"
                placeholder="Video description"></textarea>

            <input class="w-full mb-2 p-2 border border-gray-300" type="file" name="video" />

            <button class="bg-blue-500 text-white p-2 rounded w-32" type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>

</html>
