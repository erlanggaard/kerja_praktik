@extends('layout/main')

@section('container')
<br><br><br>
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4>Form Chat Whatsapp</h4>
            </div>
            <div class="card-body">
                <form action="send" method="POST" target="_blank">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Isi nama disini">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Isi email disini">
                    </div>
                    <div class="mb-3">
                        <label for="message">Pesan</label>
                        <textarea name="message" class="form-control" placeholder="Pesan tulis disini" style="height: 100px"></textarea>
                    </div>
                    <input type="hidden" name="nowa" value="62895637415616">
                    <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection