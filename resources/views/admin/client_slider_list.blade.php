@extends('admin.layouts.master')

@section('title', 'Slider')

@section('main-content')

    <table class="table table-striped table-hover table-bordered center_table" id="my_table">
        <thead>
        <tr>
            <th>SL</th>
            <th>Caption </th>
            <th>Image</th>
            <th>Created At</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <? $i=1; ?>
        @foreach($allData as $data)
            <tr>
                <td>{{$i++}}</td>
                <td><a href='{{route("clientslider.edit",$data->id)}}'> <h5>{{$data->caption}}</h5> </a></td>
                <td><a href="{{$data->link}}"> <img src='{{asset("public/files/$data->image")}}'  width="120px" height="80px"></a></td>

                <td>{{$data->created_at}}</td>
                <td>
                    {!! Form::open(array('route' => ["clientslider.destroy",$data->id],'method'=>'DELETE')) !!}
                    <button type="submit" class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection