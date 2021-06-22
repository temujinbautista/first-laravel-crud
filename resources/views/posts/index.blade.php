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

        <a href="/posts/create"
            class="sticky top-4 bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mt-2 shadow-lg rounded hover:shadow float-right">Add
            New Post</a>

        <h1 class="text-4xl font-bold mb-4">My Blog</h1>

        @foreach ( $posts as $post )

        <div class="mb-2">
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')

                <button
                    class="bg-red-500 tracking-wide text-white px-1 inline-block mt-3 mr-3 shadow-lg rounded hover:shadow float-left">X</button>
                    
            </form>

                <a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-500">{{$post->title}}</a>
                <p class="text-md text-gray-600">{{$post->content}}</p>

        </div>

        <hr class="mt-4">
        @endforeach

    </div>
</body>

</html>