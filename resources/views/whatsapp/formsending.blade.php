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
                <!-- <form action="" id="form_id"> -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <!-- <input list="data_mahasiswa" class="form-control" type="text" name="kode_user" id="kode_user" placeholder="Masukan NPP Praja" onchange="return autofill();"> -->
                    <select id="kode_user" class="form-control" placeholder="Isi nama disini" onchange="myfunction()">
                        @foreach($kontakAll as $kontak )
                        <option value="{{$kontak['telepon']}}"> {{$kontak['nama']}}</option>
                        @endforeach
                    </select>
                    <!-- <input type="text" name="name" class="form-control" placeholder="Isi nama disini"> -->
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">No telp</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Isi email disini">
                </div>
                <div class="mb-3">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Pesan tulis disini" style="height: 100px"></textarea>
                </div>
                <!-- <input type="button" name="nowa" value=""> -->
                <!-- <button type="submit" name="submit" class="btn btn-primary">Kirim</button> -->
                <!-- </form> -->
                <a href="" target="_blank" id="nowa" name="nowa" onclick="function_coba()"><button class="btn btn-primary">Kirim</button></a>
            </div>
        </div>
    </div>
</div>
@endsection



@section('specificJS')
<script>
    function myfunction() {
        var x = document.getElementById("kode_user").value;
        document.getElementById('telepon').value = x;
    }

    function function_coba() {
        var x = document.getElementById("kode_user").value;
        document.getElementById('telepon').value = x;
        var text = document.getElementById("message").value;

        document.getElementById('nowa').href = 'https://api.whatsapp.com/send?phone=' + '+62' + x + '&text=' + text;

    }
</script>

@endsection