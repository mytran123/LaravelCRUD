<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter new note">
    <select name="category" id="">
        <option value="">Choose category note</option>
        <option value="Work">Work</option>
        <option value="Lear">Lear</option>
        <option value="Family">Family</option>
        <option value="Friend">Friend</option>
    </select>
    <input type="text" name="description" placeholder="Enter description">
    <button type="submit">Add new note</button>
    <a href="{{ route('notes.index') }}">Back</a>
</form>
