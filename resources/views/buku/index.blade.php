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
                    @
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Selamat Datang di Buku</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Data Buku
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <div>
                                            <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambahkan Buku</a>
                                        </div>
                                        <br>
                                        @if(session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <table class="table table-striped table-bordered table-hover mt-4" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Judul Buku</th>
                                                    <th>Deskripsi</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal Terbit</th>
                                                    <th>Nama Penulis</th>
                                                    <th>Aksi</th>
                                                    <th>Cover</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no=1;
                                                @endphp
                                                @foreach ( $buku as $data )
                                                <tr class="odd gradeX">
                                                    <form action="{{route('buku.destroy', $data->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <td>{{$no++}}</td>
                                                        <td>{{$data->judul_buku}}</td>
                                                        <td>{{$data->deskripsi}}</td>
                                                        <td>{{$data->kategori}}</td>
                                                        <td>{{$data->tanggal_terbit}}</td>
                                                        <td>{{$data->penulis->nama_penulis}}</td>
                                                        <td class="center">
                                                            <a href="{{route('buku.edit',$data->id)}}" class="btn btn-success">Ubah</a>
                                                            <a href="{{route('buku.show',$data->id)}}" class="btn btn-warning">Detail</a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Hapus</button>
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('/image/penulis/' . $data->cover) }}" width="100">
                                                        </td>
                                                    </form>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div class="well">
                                        <h4>DataTables Usage Information</h4>
                                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
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
