<h1>Add member</h1>
@if (session('user'))
<h3 style="color: green">{{ session('user') }} has been added</h3>
@endif

<form action="addmember" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter User Name"><br><br>
    <input type="password" name="password" placeholder="Enter Password"><br><br>
    <input type="text" name="email" placeholder="Enter Email"><br><br>
    <button type="submit">Add Member</button>

</form>
