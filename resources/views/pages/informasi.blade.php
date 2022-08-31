@extends('layouts.index')
@section('heading', 'Informasi')
@section('page')
    <span>Profile</span>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">Tentang</span>
@endsection
@section('content')

    <div class="site-title spad">
        <div class="container" data-aos="fade_up">
            <div class="row justify-content-center text-start">
                <div class="col-lg-12">
                    <div class="card-title">
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6 mb-2 position-relative">
                                <div class="success-video set-bg" data-background="assets/images/tentang.jpg">
                                    <a class="play-btn venobox" href="https://youtu.be/W1uvqnk25DQ" data-vbtype="video">
                                        <i class="fas fa-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="about__text">
                                    <div class="section-title">
                                        <h2>Informasi Singkat</h2>
                                    </div>
                                    <p>Jurusan Teknik Informatika merupakan jurusan yang berhubungan dengan sistem informasi, ilmu komputer, ilmu informasi, teknik komputer dan aplikasi informasi dalam sistem informasi manajemen. Termasuk di dalamnya kemampuan dalam menganalisis, menilai, memahami, menerapkan dan menciptakan sebuah program perangkat lunak atau software untuk mengolahnya dengan komputer.</p>
                                   <p> Jurusan Teknik Informatika Menyediakan Program Studi Diploma (D3) Teknik Informatika dengan Akreditasi B.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection

@section('script')
    <script type="text/javascript">
        $("#profile").addClass("active");
    </script>
@endsection
