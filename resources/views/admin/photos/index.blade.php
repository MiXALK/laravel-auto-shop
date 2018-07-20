@extends('admin.layouts.admin')
@section('content')

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Goods</h2>
                <a href="/admin/photos/create"><button type="button" class="btn btn-success navbar-right">Add new photo</button></a>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Alt name</th>
                        <th>Title</th>
                        <th>Path</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($photos))
                        @foreach($photos as $photo)
                            <tr>
                                <td>{{$photo->name}}</td>
                                <td>{{$photo->alt}}</td>
                                <td>{{$photo->title}}</td>
                                <td>{{$photo->path}}</td>
                                <td class="last">
                                    <a href="/admin/photos/{{$photo->id}}"><button class="btn btn-default" type="button">View</button></a><br>
                                    <a href="/admin/photos/edit/{{$photo->id}}"><button class="btn btn-primary" type="button">Edit</button></a><br>
                                    <form action="/admin/photos/{{ $photo->id }}" method="post">
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