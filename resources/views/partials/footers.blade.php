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
                            <a href="https://api.whatsapp.com/send/?phone=6281703918496&text&type=phone_number&app_absent=0" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link-social p-2 fs-3"><i class="fa-brands fa-google-plus-g"></i></a>
                        </li>
                    </ul>   
                </div>

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
                            {{ $contact->telepon }}
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a  class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-mobile-screen-button px-2"></i>
                            {{ $contact->nomorhp }}
                        </a>
                    </li>
                    <li class="list-item mb-2">
                        <a  class="list-link text-decoration-none fs-5">
                            <i class="fa-solid fa-envelope px-2"></i>
                            {{  $contact->email  }}
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



