<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css')}}>
    <title>Posts</title>
</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method='POST' action="/posts/{{ $post->id }}">

            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title:</label>
                <input
                    class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray 400 focus:ring-0"
                    id="title" name="title" value="{{$post->title}}" required>
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content:</label>
                <textarea
                    class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray 400 focus:ring-0"
                    id="content" name="content" required>{{$post->content}}</textarea>
            </div>
            
            <button
                class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow float-right">Update</button>
        </form>
        <a href="/posts"
            class="bg-gray-500 tracking-wide text-white px-6 py-2 mb-6 shadow-lg rounded hover:shadow ">Cancel</a>
    </div>
</body>

</html>