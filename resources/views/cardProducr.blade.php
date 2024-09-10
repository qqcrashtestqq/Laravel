<div>
    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input name="title" type="text" placeholder="title">

        <label for="description">Description:</label>
        <input name="description" type="text" placeholder="description">

        <label for="image">Image:</label>
        <input type="file" name="image">

        <label for="price">Price:</label>
        <input name="price" type="number" step="0.001" min="0" placeholder="price">
        @error('price')
        <p>{{ $message }}</p>
        @enderror

        <button type="submit">Create</button>
    </form>
</div>
