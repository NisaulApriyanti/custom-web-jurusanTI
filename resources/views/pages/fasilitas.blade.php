@extends('layouts.index')
@section('heading', 'Fasilitas Belajar ')

@section('page')
    <span class="current">Fasilitas</span>
@endsection

@section('content')
    <!--Biaya Begin -->
    <section class="about spad">
        <div class="container">
            <div class="card-title about__text mb-5">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="line pb-4">
                            <h3 class="text-center text-capitalize">Fasilitas
                            </h3>
                            <div class="underline"></div>
                        </div>
                    </div>
                </div>

                <!-- Ruang Belajar Begin -->
                <div class="instagram" id="galery">
                    <div class="row d-flex justify-content-center demo-gallery">
                        <ul id="lightgallery" class="list-unstyled">
                            <li class="col-lg-10 col-md-4 col-sm-4 mb-3" data-src="assets/images/galery/gambar1.JPEG"
                                data-sub-html="<h4>Ruang Belajar</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="assets/images/galery/gambar1.JPEG" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/gambar2.JPEG"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/gambar2.JPEG" alt="Thumb-1" />
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-4 col-sm-4 mb-3" data-src="/assets/images/galery/gambar3.jpeg"
                                data-sub-html="<h4>Fasilitas poliwangicom</h4>" data-pinterest-text="Pin it1"
                                data-tweet-text="share on twitter 1">
                                <a href="">
                                    <img class="img-responsive" src="/assets/images/galery/gambar3.jpeg" alt="Thumb-1" />
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <!-- Ruang Belajar End -->
               
            </div>
        </div>
    </section>
    <!--Biaya  End -->

@endsection

@section('script')
    <script type="text/javascript">
        lightGallery(document.getElementById('lightgallery'));
        lightGallery(document.getElementById('lightgallery1'));


        $("#fasilitas").addClass("active");
    </script>

@endsection
