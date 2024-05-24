<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            {{-- NAVBAR --}}
            @include('layouts.navbar')
            {{-- /NAVBAR --}}

            {{-- SIDEBAR --}}
            @include('layouts.sidebar')
            {{-- /SIDEBAR --}}
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Penulis</h1>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        Show Data Penulis
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @csrf
                                                <div class="form-group" action="#" method="POST">
                                                    <div class="form-group">
                                                        <label>Judul Buku</label>
                                                        <input type="text" class="form-control" name="judul_buku" value="{{$buku->judul_buku}}"
                                                        disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <input type="text" class="form-control" name="deksripsi" value="{{$buku->deskripsi}}"
                                                        disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kategori</label>
                                                        <input type="text" class="form-control" name="judul_buku" value="{{$buku->kategori}}"
                                                        disabled><br>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Tanggal Terbit</label>
                                                        <input type="text" class="form-control" name="deksripsi" value="{{$buku->tanggal_terbit}}"
                                                        disabled><br>
                                                    </div>
                                                    {{--  --}}
                                                    <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/js/morris.min.js') }}"></script>
    <script src="{{ asset('admin/js/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin/js/startmin.js') }}"></script>

</body>

</html>