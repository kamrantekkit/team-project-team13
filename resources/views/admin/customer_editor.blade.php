<!DOCTYPE html>
<html>
<head>
    <title>Test Form</title>
</head>
<body>
<form action="{{route("admin.customers-management.update")}}" method="post">
    @csrf
    <input type="hidden" id="customer_id" name="customer_id" value="3">
    <label for="first_name">First Name:</label><br>
    <input type="text" id="first_name" name="first_name"><br>
    <label for="last_name">Last Name:</label><br>
    <input type="text" id="last_name" name="last_name"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
