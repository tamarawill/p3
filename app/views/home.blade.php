@extends('_master')

@section('title')
	Developer's Best Friend
@stop

@section('content')

    <p>A collection of tools to make application development a little easier.</p>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Dummy Text Generator</h3>
                  </div>
                  <div class="panel-body">
                    <p>Generate 1-50 paragraphs of "lorem ipsum"-style text.</p>
                    <p><a href="/loremipsum" class="btn btn-primary">Generate Text</a></p>
                  </div>
                </div>

            </div> <!-- end col -->
            <div class="col-md-6">

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Test User Generator</h3>
                  </div>
                  <div class="panel-body">
                    <p>Generate 1-100 fake users.</p>
                    <p><a href="/makeusers" class="btn btn-primary">Generate Users</a></p>
                  </div>
                </div>

            </div> <!-- end col -->

        </div> <!-- end row -->
    </div> <!-- end container -->

@stop