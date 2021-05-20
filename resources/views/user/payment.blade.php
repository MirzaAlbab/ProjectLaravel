@extends('layout.home')
<link rel="stylesheet" href="{{asset('css/stylepayment.css') }}">
@section('title', 'Payment')

@section('container')
<div class="row">
    <div class="col-75">
        <div class="containerkonten mt-3">
            <form id="validate" action="/action_page.php">
                <div class="row">
                    <div class="col-50">
                        <h5>Data Pembayaran</h5>
                        <label for="fname"><i class="fa fa-user"></i> Nama Pasien</label>
                        <input type="text" id="fname" name="fullname" placeholder="Udin Firmansyah" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email Pasien</label>
                        <input type="text" id="email" name="email" placeholder="udin@example.com" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Alamat Pasien</label>
                        <input type="text" id="adr" name="address" placeholder="Jalan Bangsa Indonesia 1" required>
                        <label for="city"><i class="fa fa-institution"></i> Kota Menetap</label>
                        <input type="text" id="city" name="city" placeholder="Surabaya" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">Negara</label>
                                <input type="text" id="state" name="state" placeholder="Indonesia"required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Kode Pos</label>
                                <input type="text" id="zip" name="zip" placeholder="60232"required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h5>Metode Pembayaran</h5>
                        <label for="fname">Kartu Diterima : </label>
                        <label for="fname">Kartu Debit segala Bank</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>

                        <label for="cname">Nama di Kartu</label>
                        <input type="text" id="cname" name="cardname" placeholder="Udin Firmansyah"required>
                        <label for="ccnum">Nomor Kartu</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="0000-1111-56565-6969"required>
                        <label for="expmonth">Bulan Kadaluarsa</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="Agustus"required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Tahun Kadaluarsa</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2030"required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="421"required>
                            </div>
                        </div>
                    </div>
                </div>
                <label>
                <input type="checkbox" checked="checked" name="sameadr"> Alamat telah sesuai dengan Billing
                </label>
                <input type="submit" value="Lanjutkan ke Pembayaran" class="btnlanjut">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="containerkonten mt-3">
            <h5>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>1</b></span></h5>
            <p><a href="#">Konsultasi</a> <span class="price">Rp30000</span></p>
            <hr>
            <p>Total <span class="price" style="color:black"><b>Rp30000</b></span></p>
        </div>
    </div>
</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            email: {
                required: true,
            },
            address: {
                required: true,
            },
            city: {
                required: true,
            },
            state: {
                required: true,
            },
            zip: {
                required: true,
            },
            cardname: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input full name*",
            email:"Please input email*",
            city:"Please input city*",
            address:"Please input address*",
            state:"Please input state*",
            zip:"Please input address*",
            cardname:"Please input card name*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
@endsection