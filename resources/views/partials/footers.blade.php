<div class="footer mt-5 bg-dark text-white pb-lg-4">
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-3 mb-2">
                <img width="120" height="90" src="/img/logonew1.png" alt="">
                <div class="footer_social justify-content-center">
                    <div class="footer-title mt-2">Connect With Us :
                    </div>
                    <ul class="nav">
                        <li class="nav-item mb-3">
                            <a href="https://www.facebook.com" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="https://www.instagram.com" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-google-plus-g"></i></a>
                        </li>
                    </ul>   
                </div>
                {{-- <strong>Phone</strong> : <span>+62 856 0463 1300</span>
                <br/>
                <strong>Email</strong> : <span>cmskontraktor@gmail.com</span> --}}
            </div>
            <div class="col-md-3 mb-3">
                <h3 class="fw-bold">Useful Links</h3>
                <ul class="list-group list-unstyled">
                    <li class="list-item mb-2">
                        <a href="/" class="list-link  {{ ($active === "home") ? 'active' : " " }} text-decoration-none">
                            <i class="fa fa-chevron-right"></i>
                            Home
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a href="/about" class="list-link  {{ ($active === "about") ? 'active' : " " }} text-decoration-none">
                            <i class="fa fa-chevron-right"></i>
                            About Us
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a href="/project" class="list-link  {{ ($active === "project") ? 'active' : " " }} text-decoration-none">
                            <i class="fa fa-chevron-right"></i>
                            Project
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a href="/client" class="list-link  {{ ($active === "client") ? 'active' : " " }} text-decoration-none">
                            <i class="fa fa-chevron-right"></i>
                            Client
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a href="/posts" class="list-link  {{ ($active === "posts") ? 'active' : " " }} text-decoration-none">
                            <i class="fa fa-chevron-right"></i>
                            Article
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="col-md-5">
                <h3 class="fw-bold pb-2">Head Office Surabaya</h3>
                
                <ul class="list-group list-unstyled mt-2">
                    <li class="list-item mb-2">
                        <a class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-location-dot px-2"></i>
                            {{$contact->alamat}}
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-phone px-2"></i>
                            {{-- {{ $contact->telepon }} --}}0800698699
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a  class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-mobile-screen-button px-2"></i>
                            {{-- {{ $contact->nomorhp }} --}}9698599707
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a  class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-envelope px-2"></i>
                            {{-- {{  $contact->email  }} --}}kvikkch,vc
                        </a>
                    </li>
                </ul>
      
            </div>
        </div>
        
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <p class="copy__desc">© 2022 CV. CMS</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <section class="footer">
    <div class="container">

        <footer class="row flex-row pt-4 pb-4">

            <div class="col-3 text-center">
                <a href="/"class="justify-content-center mb-4 link-dark ">
                    <a class="bi me-2 pb-2" width="40" height="32">
                        <img src="img/logonew.png" alt="skynews" width="150">
                    </a>
                </a>

                <div class="footer_social justify-content-center">
                    <div class="footer-title footer-title__connect pb-2">Connect With Us</div>

                    <ul class="nav justify-content-center">
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-1"><img src="img/fb.png" alt="Facebook" width="40"></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-1 text-muted"><img src="img/ig.png" alt="Instagram" width="40"></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-1 text-muted"><img src="img/in.png" alt="LinkedIn" width="40"></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-title footer-title__copyright text-center">Copyright @ 2021 skynews.com. <br>All right reserved</div>
            </div>
            <div class="col"></div>

            <div class="col">
                <h5>Kategori</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Features</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Pricing</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >About</a
                        >
                    </li>
                </ul>
            </div>

            <div class="col">
                <h5>Layanan</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Features</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Pricing</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >About</a
                        >
                    </li>
                </ul>
            </div>

            <div class="col">
                <h5>Hot News</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Features</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >Pricing</a
                        >
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted">FAQs</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="#" class="nav-link p-0 text-muted"
                            >About</a
                        >
                    </li>
                </ul>
            </div>

        </footer>
    </div>

</section> --}}

