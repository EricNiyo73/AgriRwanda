<!-- resources/views/users/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    
    <h2>Edit User</h2>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT') 
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" value="{{ $user->fullname }}" required>

        <label for="telephone">Telephone:</label>
        <input type="text" id="telephone" name="telephone" value="{{ $user->telephone }}" required>

        <button type="submit">Update User</button>
    </form>
</body>
</html>
