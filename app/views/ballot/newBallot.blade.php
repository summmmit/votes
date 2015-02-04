@extends('layout.admin')

@section('stylesheets')
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/lightbox2/css/lightbox.css'); }}">
@stop

@section('page_header')
<h1><i class="fa fa-pencil-square"></i> My Ballot <small>These are the details of the Persons you Need to choose From...</small></h1>
@stop

@section('page_breadcrumb')
<ol class="breadcrumb">
    <li>
        <a href="#">
            Dashboard
        </a>
    </li>
    <li class="active">
        My Ballot
    </li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-white">
            <div class="panel-heading">
                <h4 class="panel-title">Gallery</h4>
            </div>
            <div class="panel-body">
                <table>
                    <form action="{{ URL::Route('account-user-ballot-post'); }}" method="post">>
                        @foreach($options as $key)
                        <tr>
                            <td><button type="submit" value="{{ $key->id }}" name="choice" >{{ $key->options }}</button></td>
                        </tr>
                        @endforeach
                        {{ Form::token() }}
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<!-- Scripts for This page only -->
<script src="{{ URL::asset('assets/plugins/mixitup/src/jquery.mixitup.js'); }}"></script>
<script src="{{ URL::asset('assets/plugins/lightbox2/js/lightbox.min.js'); }}"></script>
<script src="{{ URL::asset('assets/js/pages-gallery.js'); }}"></script>
<script>
jQuery(document).ready(function() {
    Main.init();
    SVExamples.init();
    PagesGallery.init();
});
</script>

@stop
