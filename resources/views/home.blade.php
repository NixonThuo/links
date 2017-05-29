@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="content">
                @foreach ($links as $link)
                <table class="table-bordered" >
                    <tr><ul>{{ $link->title }}</ul></tr>
                    <tr><ul>{{ $link->description }}</ul></tr>
                </table>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
