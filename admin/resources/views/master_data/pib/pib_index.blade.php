@extends('layouts.app')

@section('head')

@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title ?? 'Data' }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('pib.create') }}" class="btn btn-primary mr-3">
                                    <i class="fa fa-plus"></i> Data
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="tableSearch" class="table table-bordered table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kantor Pabean</th>
                                        <th>No Pengajuan</th>
                                        <th>No Registrasi</th>
                                        <th>Tanggal</th>
                                        <th>Invoice</th>
                                        <th>Pelabuhan Muat</th>
                                        <th>Pelabuhan Tujuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->office_pabean }}</td>
                                            <td data-inputmask='"mask": "999999-999999-99999999-999999"' data-mask>
                                                {{ $item->no_approval }}</td>
                                            <td>{{ $item->no_register }}</td>
                                            <td>{{ $item->date_register }}</td>
                                            <td>{{ $item->invoice }}</td>
                                            <td>{{ $item->load_place }}</td>
                                            <td>{{ $item->load_destination }}</td>
                                            <td>
                                                <a href="" class=" btn btn-info">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                                <div class="btn btn-danger delete-modal" data-toggle="modal"
                                                    data-target="#modal-delete-user" data-id="{{ $item->code_pib }}"
                                                    data-name="{{ $item->no_approval }}"><i class="fa fa-trash"></i>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Delete Modal --}}
    <form action="{{ route('pib.destroy') }}" method="post">
        @csrf
        @include('components.delete_modal')
    </form>

@endsection
@section('scripts')

@endsection
