<div id="box-category-{{$category->id}}" class="sub-categories">
    @foreach($category->categories as $category)

    <div class="form-group">
        <div class="checkbox">
            <label class="sub-category">
                <input type="checkbox" name="category" class="checkbox-category" value="{{$category->id}}"
                    @if(in_array($category->id,$categoriesId)) checked @endif>
                {{$category->name}}
            </label>
        </div>
    </div>
    @if(count($category->categories) > 0)
    @component('admin.components.categories',['category' => $category, 'categoriesId' => $categoriesId])
    @endcomponent
    @endif
    @endforeach

</div>