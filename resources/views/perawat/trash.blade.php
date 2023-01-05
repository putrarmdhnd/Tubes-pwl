@extends('adminlte::page')

@section('title', 'AdminLTE')


@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">{{ __('Recycle_bin') }}</div>
        <div class="card-body">
           
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NO</th>
                        <th>NAMA LENGKAP</th>
                        <th>UMUR</th>
                        <th>JENIS KELAMIN</th>
                        <th>GOLONGAN DARAH</th>
                        <th>ALAMAT</th>
                        <th>TINGGI BADAN</th>
                        <th>BERAT BADAN</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @php $no=1; @endphp
                    @foreach($pasien as $PendataanPasien)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$PendataanPasien->nama}}</td>
                        <td>{{$PendataanPasien->umur}}</td>
                        <td>{{$PendataanPasien->jk}}</td>
                        <td>{{$PendataanPasien->goldar}}</td>
                        <td>{{$PendataanPasien->alamat}}</td>
                        <td>{{$PendataanPasien->TBadan}}</td>
                        <td>{{$PendataanPasien->BBadan}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <form method="post" action="Perawat/'{$PendataanPasien->id}'/restore" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn btn-primary">Restore</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div>
</div>

@endsection