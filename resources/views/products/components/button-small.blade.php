
<div>
    <a href="{{ route('products.show', $model) }}" class="btn btn-info btn-sm">
        <i class="fa-solid fa-circle-info"></i>
    </a> |
    <a id='ed' href="{{ route('products.edit', $model) }}" class="btn btn-warning btn-sm">
        <i class="fa-solid fa-pen-to-square"></i>
    </a> |
    <button href="{{ route('products.destroy', $model) }}" class="btn btn-danger btn-sm" id="delete">
        <i class="fa-solid fa-delete-left"></i>
    </button>
</div>
<x-button-action />