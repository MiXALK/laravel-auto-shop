@foreach ($categories as $category)

    <option value="{{$category->id or ""}}"

            @isset($goods->id)

            @foreach($goods->categories as $category_good)
                @if ($category->id == $category_good->id)
                selected="selected"
                @endif
            @endforeach
            @endisset >
        {!! $delimiter or "" !!}{{$category->title or ""}}
    </option>
    @if (count($category->children) > 0)
        @include('admin.goods.categories',
        [ 'categories' => $category->children,
          'delimiter' => ' - ' . $delimiter
          ])
    @endif
@endforeach