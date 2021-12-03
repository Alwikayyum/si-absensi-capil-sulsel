@extends('layouts/main')
    @include('partials.navbar')

@section('template')

<div class="row">
    <div class="col-md col-md-offset-2 pt-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                Informasi
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
                                <button type="submit" name="buttonIn" class="btn btn-flat btn-primary">
                                    Absen Masuk
                                </button>
                                <button type="submit" name="buttonOut" class="btn btn-flat btn-primary">
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
                            <th>Tanggaal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Pelaporan Harian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>testing</td>
                            <td>testing</td>
                            <td>testing</td>
                            <td>testing</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


    @endsection 