@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
        <h2 class="fw-bold">Contacts Us</h2>
</div>
<form>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="inputname" placeholder="Nama">
        <label for="inputname">Nama</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="inputemail" placeholder="Email">
        <label for="inputemail" class="form-label">Email</label>
    </div>
    <div class="form-floating  mb-3">
  <label for="Tinggalkan Pesan" class="form-label">Pesan</label>
  <textarea class="form-control" id="Pesan" rows="3"></textarea>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
@endsection