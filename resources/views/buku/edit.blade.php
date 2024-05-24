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
        <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="{{asset('admin/css/metisMenu.min.css')}}" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="{{asset('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{asset('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Navbar -->
                @include('layouts.navbar')
                <!-- /Navbar -->
                
                <!-- Sidebar -->
                @include('layouts.sidebar')
                <!-- /Sidebar -->

                
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Buku</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Basic Form Elements
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="{{ route('buku.update',$buku->id) }}" method="POST" role="from" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label>Judul Buku</label>
                                                    <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku">
                                                </div>
                                                <div>
                                                    <label>Deskripsi</label>
                                                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
                                                </div>
                                                <div>
                                                    <label>Kategori</label>
                                                    <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                                                </div>
                                                <div>
                                                    <label>Tanggal Terbit</label>
                                                    <input type="text" class="form-control" name="tanggal_terbit" placeholder="Tanggal Terbit">
                                                </div>
                                                {{-- <select class="form-control" name="id_brand">
                                                    @foreach($penulis as $data)
                                                        <option value="{{$data->id}}" {{$data->id == $penulis->id_brand ? 'selected' : '' }}>{{$data->nama_penulis}}</option> 
                                                    @endforeach
                                                </select> --}}
                                                <div>
                                                    <label class="form-label">Cover</label>
                                                    <input type="file" class="form-control" name="cover">
                                                </div>
                                                <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                                                <button type="submit" class="btn btn-primary">Ubah</button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                        
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
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
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset('admin//js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset('admin//js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{asset('admin//js/metisMenu.min.js')}}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{asset('admin//js/raphael.min.js')}}"></script>
        <script src="{{asset('admin//js/morris.min.js')}}"></script>
        <script src="{{asset('admin//js/morris-data.js')}}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{asset('admin//js/startmin.js')}}"></script>

    </body>
</html>
