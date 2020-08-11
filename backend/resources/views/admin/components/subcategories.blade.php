    @foreach($category->categories as $subcategory)
    <tr>
        <td>{{$subcategory->name}}</td>
        <td>
            <a href="{{route('category', ['slug' => $category->slug])}}" target="_blank">
                {{route('category', ['slug' => $category->slug])}}
            </a>

        </td>
        <td class="text-center align-middle py-0">
            <div class="btn-group btn-group-sm">
                <a href="{{route('admin.category.edit', ['category' => $subcategory->id])}}" class="btn btn-info">
                    <i class="fa fa-edit"></i>
                </a>
                <button href="{{route('admin.category.delete', ['category' => $subcategory->id])}}"
                    class="btn btn-danger btn-delete">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </td>
    </tr>
    @if(count($subcategory->categories) > 0)
    @component('admin.components.subcategories',['category' => $subcategory])
    @endcomponent
    @endif
    @endforeach