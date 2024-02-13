<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5 pt-5">
        <h1 class="text-center">Add Customer Detail Data</h1>
        <form method="post" action="includes/add_customer.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="username" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                <input type="text" class="form-control" name="phoneNum" placeholder="Phone number">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea class="form-control" name="address" rows="3"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Add</button>
        </form>
    </div>

    <div class="container mt-5 pt-5">
        <h1 class="text-center">Update Customer Data</h1>
        <form method="post" action="includes/customerUpdate.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="username" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone number</label>
                <input type="text" class="form-control" name="phoneNum" placeholder="Phone number">
            </div>
            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>


    <div class="container mt-5 pt-5">
        <h1 class="text-center">Delete Customer Data</h1>
        <form method="post" action="includes/customerDelete.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="username" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <button class="btn btn-primary" type="submit">Delete</button>
        </form>
    </div>
</body>

</html>