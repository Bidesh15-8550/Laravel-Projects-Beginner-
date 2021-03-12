<h1>User Login</h1>
<form action="users" method="POST">
    {{ method_field('DELETE') }}
    @csrf
    <input type="text" name="user" placeholder="Enter Name"><br><br>
    <input type="password" name="user" placeholder="Enter Password"><br><br>
    <button type="submit">Login</button>

</form>
