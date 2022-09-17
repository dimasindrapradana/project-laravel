@extends('layout.main')

@section('container')
<h1>Panduan</h1>
<p>Berikut ini adalah panduan penggunaan aplikasi info Wisata (tahun 2022)</p>

<div class="container p-4">
    <!-- Section: Iframe -->
    <section class="justify-content-center">
        <div class="col-lg-10">
          <div class="ratio ratio-16x9">
            <iframe
              class="shadow-1-strong rounded"
              src="modul 2.pdf"
              title="pdf"
              allowfullscreen
            ></iframe>
          </div>
        </div>
        </div>
@endsection
        