<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Create Products</title>
</head>
<body class="container">
    <h1>Create Products</h1>
    <form action="{{ route('products.store') }} " method="post">@csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name"  id="name" >
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="number" name="price"  id="price" >
        </div>

        <div class="mb-3">
            <label for=description" class="form-label">description</label>
            <input type="text" name="description"  id="description" >
        </div>
        <div class="mb-3">
            <label for=description" class="form-label">image</label>
            <input type="file" name="image"  id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
