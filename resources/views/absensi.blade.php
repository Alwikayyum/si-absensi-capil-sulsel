@extends('layouts/main')
    @include('partials.navbar')

@section('template')

<div class="row">
    <div class="col-md col-md-offset-2 pt-2">
        <div class="panel panel-default">
            <div class="panel-heading pt-2">
                Selamat Datang <b>{{ auth()->user()->name }}</b>, {{ $info['status'] }}
            </div>

            <div class="panel-body">
                <table class="table table-responsive">
                    <form action="/absen" method="post">
                        @csrf
                        
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="reporting" id="yourReporting" placeholder="Reporting Harian">
                            </td>
                            <td class="justify-content-end ">

                                <button type="submit" name="buttonIn" {{ $info['buttonIn'] }} class="btn btn-flat btn-primary">
                                    Absen Masuk
                                </button>
                                <button type="submit" name="buttonOut" {{ $info['buttonOut'] }} class="btn btn-flat btn-primary">
                                    Absen Pulang
                                </button>

                            </td>
                        </tr>

                    </form>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Riwayat Absensi
            </div>

            <div class="panel-body">
                <table class="table table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>laporan Harian</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ( $data_absen as $absensi)
                            
                        <tr>
                            <td>{{ $absensi->date }}</td>
                            <td>{{ $absensi->time_in }}</td>
                            <td>{{ $absensi->time_out }}</td>
                            <td>{{ $absensi->reporting }}</td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <b><i>TIDAK ADA DATA UNTUK DITAMPILKAN</i></b>
                                </td>
                            </tr>
                        
                        @endforelse
                    </tbody>
                </table>
                {!! $data_absen->links() !!} 
            </div>
        </div>
    </div>
</div>


    @endsection 