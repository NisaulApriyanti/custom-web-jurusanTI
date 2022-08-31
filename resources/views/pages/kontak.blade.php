@extends('layouts.index')
@section('heading', 'Informasi Kampus poliwangi')
@section('page')
    <span class="current">Kontak Kampus</span>
@endsection
@section('content')

    {{-- Kontak begin --}}
    <section class="contact spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__content">
                            <div class="contact__address">
                                <h5>Kontak Informasi</h5>
                                <ul>
                                    <li>
                                        <h6><i class="fa fa-map-marker"></i> Kampus </h6>
                                        <p>Jalan Raya Jember KM 13, Banyuwangi (68461), Jwatimur - Indonesia</p>
                                    </li>
                                   
                                    <li>
                                        <h6><i class="fa fa-phone"></i> Phone</h6>
                                        <p><span>(0333)6367809</span></p>
                                       

                                    </li>
                                    <li>
                                        <h6><i class="fa fa-envelope"></i>Email Kampus</h6>
                                        <p>poliwangi@poliwangi.ac.id</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__form">
                                <h5>Kirim Pesan</h5>
                                <form method="post" action="#">
                                    <input type="text" name="name" placeholder="Name">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="number" name="nohandphone" placeholder="No Handphone">
                                    <textarea placeholder="Apa yang ada ingin tanyakan"></textarea>
                                    <button type="submit" class="btn btn-primary-outline">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__map">
                            <iframe
                                src="https://www.bing.com/maps/embed?osid=49246d1f-95eb-4178-a8d7-d86df0137c86&cp=-8.294857~114.298443&lvl=16&imgid=3e1d3681-a127-4b9c-bf9e-ff18ef58f208&v=2&sV=2&form=S00027"
                                height="780" style="border:0" allowfullscreen="">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- Kontak end --}}

@endsection
