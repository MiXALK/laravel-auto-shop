@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Goods</h2>
                <a href="{{route('category.create')}}"><button type="button" class="btn btn-success navbar-right">Добавить раздел/подраздел</button></a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Slug</th>
                        <th>ID родительской категории</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($categories))
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->parent_id}}</td>
                                <td class="last">
                                    <a href="{{route('category.show', $category->id)}}"><button class="btn btn-default" type="button">View</button></a><br>
                                    <a href="{{route('category.edit', $category)}}"><button class="btn btn-primary" type="button">Edit</button></a><br>
                                    <form action="/admin/category/{{ $category->id }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection