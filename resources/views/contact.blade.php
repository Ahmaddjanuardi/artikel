@extends('template/layout')
@section('main')
<div class="d-flex justify-content-center my-5">
    <div class="col-md-6">
        <form action="{{route('send.mail')}}" class="shipping p-5" id="formShipping" style="border: 3px solid pink" method="POST">
            @csrf
            <h1 style="text-align: center">Contact me</h1>
            <div class="row">
                <div class="mb-3 ">
                    <label for="first name">Nama</label>
                    <input class="form-control" name="name" type="text" placeholder="Enter your first name" id="firstName" value="{{old('name')}}" />
                    @error('name') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3 ">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="last name">Pekerjaan</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">PNS</option>
                        <option value="2">TNI</option>
                        <option value="3">Buruh</option>
                        <option value="4">Wirausaha</option>
                        <option value="5">Petani</option>
                    </select>
                </div>
                <div class="mb-3 ">
                    <label for="city">Tahu Alamat Web Dari</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Google
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Tautan dari web lain
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Teman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Berita
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            dsb
                        </label>
                    </div>
                </div>
                <div class="mb-3 ">
                    <label for="email">Email Pengunjung</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter email" id="email" value="{{old('email')}}" />
                    @error('email') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3 ">
                    <label for="no_hp">No HP</label>
                    <input class="form-control" name="noHp" type="number" placeholder="Enter No HP" id="no_hp" value="{{old('noHp')}}" />
                    @error('noHp') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3 ">
                    <label for="datepicker">Tanggal Kesedian untuk dihubungi</label>
                    <input class="form-control" name="date" type="date" id="datepicker" value="{{old('date')}}" />
                    @error('date') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <label for="">Subject</label>
                <div class="input-group">
                    <textarea class="form-control" name="subject" id="" placeholder="Enter subject"></textarea>
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <label for="">Maksud Dan Tujuan</label>
                <div class="input-group">
                    <textarea class="form-control" name="message" id="maksud_tujuan" placeholder="Enter maksud dan tujuan"></textarea>
                    @error('message') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="p-3 col-md-6">
                    <button type="submit" class="btn" style="background-color: pink" id="btnSubmitShipping">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection