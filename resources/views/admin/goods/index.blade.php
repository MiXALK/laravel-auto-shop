@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Goods</h2>
                <a href="/admin/goods/create"><button type="button" class="btn btn-success navbar-right">Add new good</button></a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name item</th>
                        <th>Short Description</th>
                        <th>Description</th>
                        <th>Icon ref</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($goods))
                        @foreach($goods as $good)
                            <tr>
                                <td>{{$good->name}}</td>
                                <td>{{$good->short_description}}</td>
                                <td>{{$good->description}}</td>
                                <td>{{$good->icon}}</td>
                                <td class="last">
                                    <a href="/admin/goods/{{$good->id}}"><button class="btn btn-default" type="button">View</button></a><br>
                                    <a href="/admin/goods/edit/{{$good->id}}"><button class="btn btn-primary" type="button">Edit</button></a><br>
                                    <form action="/admin/goods/{{ $good->id }}" method="post">
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