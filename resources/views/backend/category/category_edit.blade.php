<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<form action="{{ route('category.update') }}" method="POST">
    @csrf
    <div class="mb-3">
        <input type="hidden" name="category_id" value="{{ $category->id }}">
        <label class="form-label">Category</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Category Name" name="category_name" value="{{ $category->category_name }}">
        @error('email')
        <small id="emailHelp" class="form-text text-muted">{{ $message }}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select class="form-select" name="status">
            <option value="active">Active</option>
            <option value="deactive">Deactive</option>
        </select>
        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your
            email with anyone else.</small> --}}
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Category</button>
    </div>
</form>