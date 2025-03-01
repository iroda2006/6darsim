<h1>Create User</h1>

<form action="/users" method="post">
    @csrf
    <input type="text" name="name" placeholder="ism">
    <input type="email" name="email" placeholder="email">
    <input type="age"  name="age"  placeholder="yosh">
    <input type="surname" name="surname" placeholder="familiya">
    <input type="address" name="address" placeholder="adress">
    <input type="submit">
</form>
