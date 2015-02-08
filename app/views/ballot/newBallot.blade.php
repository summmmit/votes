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
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default panel-white core-box">
                <div class="panel-heading border-light">
                    <h4 class="panel-title">Candidate 1</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <img src="{{ URL::asset('assets/images/new-images/arvind.jpg'); }}" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <img src="{{ URL::asset('assets/images/new-images/aap-logo.jpg'); }}" class="img-responsive img-rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row no-padding">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <div class="caption">
                                        <h3>Arvind Kejriwal</h3>
                                        <p>
                                            <a href="#" class="btn btn-red btn-block">
                                                His Details
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <div class="caption">
                                    <h3>Aam Admi Party</h3>
                                    <p>
                                        <a href="#" class="btn btn-red btn-block">
                                            Its Details
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel-footer ">
                    <a href="#" class="btn btn-green btn-block">
                        Click here to Vote Him
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default panel-white core-box">
                <div class="panel-heading">
                    <h4 class="panel-title">Candidate 2</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <img src="{{ URL::asset('assets/images/new-images/Narendra_Modi.png'); }}" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <img src="{{ URL::asset('assets/images/new-images/bjp-logo.jpg'); }}" class="img-responsive img-rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row no-padding">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <div class="caption">
                                        <h3>Narendra Modi</h3>
                                        <p>
                                            <a href="#" class="btn btn-red btn-block">
                                                His Details
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <div class="caption">
                                    <h3>Bhartiya Janta Party</h3>
                                    <p>
                                        <a href="#" class="btn btn-red btn-block">
                                            Its Details
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel-footer ">
                    <a href="#" class="btn btn-green btn-block">
                        Click here to Vote Him
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="panel panel-default panel-white core-box">
                <div class="panel-heading">
                    <h4 class="panel-title">Candidate 3</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <img src="{{ URL::asset('assets/images/new-images/Narendra_Modi.png'); }}" class="img-responsive img-circle" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <img src="{{ URL::asset('assets/images/new-images/bjp-logo.jpg'); }}" class="img-responsive img-rounded" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row no-padding">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="user-left">
                                <div class="center"?>
                                    <div class="caption">
                                        <h3>Narendra Modi</h3>
                                        <p>
                                            <a href="#" class="btn btn-red btn-block">
                                                His Details
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="center">
                                <div class="caption">
                                    <h3>Bhartiya Janta Party</h3>
                                    <p>
                                        <a href="#" class="btn btn-red btn-block">
                                            Its Details
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="panel-footer ">
                    <a href="#" class="btn btn-green btn-block">
                        Click here to Vote Him
                    </a>
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
