@extends('layouts.app', ['activePage' => 'income', 'menuParent' => 'income', 'titlePage' => __('Incomes')])
@section('content')
    <div class="content">
        <div class="alert alert-success alertMessage position-fixed fixed-top" hidden id="alertSuccess" role="alert">
            <h4 id="alert-heading-success">Success</h4>
        </div>
        <div class="alert alert-danger alertMessage position-fixed fixed-top" hidden id="alertDanger" role="alert">
            <span id="alert-heading-danger">Error</span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="card text-left">
                    <div class="card-body">
                        <figure class="highcharts-figure">
                            <div id="container"></div>
                        </figure>
                    </div>
                </div>

                <div class="card text-left">
                    <div class="card-body">
                        {{-- <a name="" id="" class="btn btn-info" href="{{route("page.income.add")}}" role="button">Add Income</a> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                            data-target="#modalIncome">
                            Add Pengajuan Dana
                        </button>
                        <div class="table-responsive mt-4">
                            <table class="table table-striped" id="datatable" width='100%'>
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nama Pemohon</th>
                                        <th>Divisi</th>
                                        <th>Nominal</th>
                                        <th>Metode</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalIncome" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form id="formIncome">
                    <div class="modal-header">
                        <h5 class="modal-title">Pengajuan Dana</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="number" hidden name="id" id="input_id">
                        <div class="container-fluid">
                            <div class="form-group mt-4">
                                <label for="">Nama Pemohon</label>
                                <input type="text" class="form-control" name="nama" id="input_nama"
                                    aria-describedby="helpId" placeholder="Nama Pemohon">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Divisi</label>
                                <input type="text" class="form-control" name="divisi" id="input_divisi"
                                    aria-describedby="helpId" placeholder="Divisi">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Nominal</label>
                                <input type="number" class="form-control" name="nominal" id="input_nominal"
                                    aria-describedby="helpId" placeholder="Masukkan Nominal">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Metode</label>
                                <input type="text" class="form-control" name="metode" id="input_metode"
                                    aria-describedby="helpId" placeholder="Masukkan Metode Pembayaran">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="submitIncome()" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        let configView = {
            url: "{{ url('') }}",
            category: null,
        };
    </script>
    <script src="{{ asset('js/pages_sf/income/graph.js') }}"></script>
    <script src="{{ asset('js/pages_sf/income/datatable.js') }}"></script>
    <script src="{{ asset('js/pages_sf/income/form.js') }}"></script>
@endpush
