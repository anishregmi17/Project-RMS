@if(isset($categories) && $categories->count() > 0)
    <p>Categories are loaded</p>
    @foreach($categories as $category)
        <a class="nav-item nav-link" data-id="{{ $category->id }}" data-toggle="tab">
            {{ $category->name }}
        </a>
    @endforeach
@else
    <p>No categories found</p>
@endif
