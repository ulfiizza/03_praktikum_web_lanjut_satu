@extends('app',['title'=>'profile'])

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
            <div class="card card-primary col-md-5 mx-auto card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset ('assets/dist/img/avatar2.png') }}" alt="User profile picture">
                    </div>
                    @foreach($profile as $a)
                    <h3 class="profile-username text-center">{{ $a -> nama }}</h3>
                    <p class="text-muted text-center">{{ $a -> jurusan }}</p>
                    
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>NIM</b> <a class="float-right">{{ $a -> nim }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Kelas</b> <a class="float-right">{{ $a -> kelas }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nomor Absen</b> <a class="float-right">{{ $a -> nomorAbsen }}</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
                <!-- /.card-body -->
                <!-- /.card-footer-->
             </div>
             <!-- /.card -->
            </div>
        </section>
        <!-- /.content -->
@endsection