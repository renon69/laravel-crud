<!DOCTYPE html>
<html>
<head>
    <title>To-Do List Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl mb-4">To-Do List</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="{{route('saveTask')}}">
        @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="task">Task:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="task" name="task" type="text" placeholder="Enter task" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Add Task
                </button>
            </div>
        </form>
    </div>
</body>
</html>
