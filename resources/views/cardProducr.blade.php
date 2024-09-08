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
        <input name="price" type="text" placeholder="price">

        <button type="submit">Create</button>
    </form>
</div>
