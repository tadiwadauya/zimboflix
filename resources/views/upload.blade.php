<form method="POST" action="/videos" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    </div>

    <div>
        <label for="file">Video file</label>
        <input type="file" name="file" id="file" required accept="video/*">
    </div>

    <div>
        <label for="category">Category</label>
        <select name="category" id="category" required>
            @foreach (\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div>
        <label for="views">Views</label>
        <input type="number" name="views" id="views" value="0">
    </div>

    <div>
        <label for="downloads">Downloads</label>
        <input type="number" name="downloads" id="downloads" value="0">
    </div>

    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type">
    </div>

    <div>
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
    </div>

    <div>
        <label for="release_date">Release Date</label>
        <input type="date" name="release_date" id="release_date">
    </div>

    <div>
        <label for="director">Director</label>
        <input type="text" name="director" id="director">
    </div>

    <div>
        <label for="production_company">Production Company</label>
        <input type="text" name="production_company" id="production_company">
    </div>

    <div>
        <label for="cast">Cast</label>
        <input type="text" name="cast" id="cast">
    </div>

    <div>
        <button type="submit">Upload</button>
    </div>
</form>