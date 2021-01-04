@extends('layouts.app')

@section('title', 'Buat Kegiatan Komunitas')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Buat Kegiatan Komunitas</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Buat Kegiatan Komunitas</h4>
                        </div>
                        <div class="card-body">
                            @include('partials.alerts')
                            <form action="{{ route('seller.events.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Nama Kegiatan</label>
                                    <input type="text" autocomplete="name" name="name" id="name" placeholder="Nama Kegiatan" class="form-control" value="{{ old('name') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="location">Lokasi</label>
                                    <input type="text" class="form-control" placeholder="Location" id="location" name="location" value="{{old('location')}}">
                                    <small class="text-muted">
                                        Lokasi kegiatan, berupa alamat lengkap.
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="image">Banner / Flyer</label>
                                    <input type="file" name="image" id="image" class="form-control" required>
                                    <small class="text-muted">Banner Kegiatan</small>
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi Kegiatan</label>
                                    <textarea name="description" id="description" class="form-control summernote">{{old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="max_attendees">Maksimal Peserta</label>
                                    <input type="number" name="max_attendees" id="max_attendees" value="{{old('max_attendees', 10000)}}" class="form-control">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="started_at">Started At</label>
                                        <input type="datetime-local" name="started_at" id="started_at" value="{{old('started_at')}}" class="form-control" required>
                                        <small class="text-muted">Acara Dimulai</small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="ended_at">Ended At</label>
                                        <input type="datetime-local" name="ended_at" id="ended_at" value="{{old('ended_at')}}" class="form-control">
                                        <small class="text-muted">Acara Selesai</small>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-md btn-icon btn-primary"><i class="fa fa-save"></i> Buat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
