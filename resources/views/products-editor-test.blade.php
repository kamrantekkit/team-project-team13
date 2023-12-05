<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Editor</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
</head>
<body>
<main>
    <div class="container-fluid">
        <form method="post" action="{{route("product.create")}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Example label</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Example input" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="0.0"
                       pattern="\d+(\.\d{1,2})?" min="0" title="Enter a valid number with up to two decimal places"
                       required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-select" aria-label="Category Select" name="tags[]" required>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select >
            </div>
            <div class="form-group">
                <label>Tags</label>
                <div class="row">
                    <div class="col-4">
                        @foreach($tags as $tag)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="{{$tag->name}}"
                                       name="tags[]">
                                <label class="form-check-label" for="{{$tag->name}}">
                                    {{$tag->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</main>
<footer>
</footer>
</body>
</html>