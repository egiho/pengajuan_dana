@extends('layouts.app', ['activePage' => 'income', 'menuParent' => 'income', 'titlePage' => __('Add Incomes')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card text-left">
                    <div class="card-body">
                        <form action="{{route('page.income.edit.post')}}" method="post">
                            @csrf
                            <input type="number" name="id" hidden value="{{$data->id}}">
                            <div class="form-group mt-4">
                                <label for="">Nama Pemohon</label>
                                <input type="text"  class="form-control" name="nama"  value="{{$data->category}}" aria-describedby="helpId" placeholder="Nama Pemohon">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Divisi</label>
                                <input type="text"  class="form-control" name="total"  value="{{$data->divisi}}"  aria-describedby="helpId" placeholder="Masukkan Divisi">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">nominal</label>
                                <input type="text"  class="form-control" name="nominal"  value="{{$data->nominal}}"  aria-describedby="helpId" placeholder="Masukkan Nominal">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <div class="form-group mt-4">
                                <label for="">Metode</label>
                                <input type="text"  class="form-control" name="metode"  value="{{$data->metode}}"  aria-describedby="helpId" placeholder="Masukkan Metode">
                                <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("js")
@endpush
