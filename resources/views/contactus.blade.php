<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us | Limousine Reservation</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('assets/css/plugin.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    </head>
    <body>
        
        <header>
            <div class="container-fluid">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{asset('assets/images/logo.png')}}" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 pr-0">
                        <div class="site-navigation mobile-navigation">
                            <ul>
                                <li><a href="{{url('/')}}"><img src="{{asset('assets/images/icon/icon-home.svg')}}" /></a></li>
                                <li><a href="{{url('services')}}">Services</a></li>
                                <li><a href="{{url('about-us')}}">About</a></li>
                                <li><a href="{{url('contact-us')}}">Contact</a></li>
                                <li><a href="javascript:;"><i class="fas fa-phone-alt"></i> <span>Text / Call</span><strong>+123 456 7890</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="spacing__x contact-styling">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="headingstyle1 text-center mb">
                            <h3 class="fs-64 fw-400">Contact Us</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="headingstyle1">
                            <h3>GET IN TOUCH</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /> Vitae arcu lorem cras lacus amet. In cras odio enim <br />rhoncus consectetur.</p>
                        </div>
                        <div>
                            <ul class="ul-style-1">
                                <li><a href="javascript:;"><i class="fas fa-phone-alt"></i> +2348147758883</a></li>
                                <li><a href="javascript:;"><i class="fas fa-envelope"></i> janedoe@gmail.com</a></li>
                                <li><a href="javascript:;"><i class="fas fa-map-marker"></i> Flat 3, Huston Avenue, London.</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>SAY SOMETHING ?</h3>
                                </div>
                            </div>
                            <form class="row" action="" method="POST" action="{{url('contact-us')}}">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        @csrf
                                        <input name="name" type="text" class="custom-input-style" placeholder="Name"  required/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input name="email" type="email" class="custom-input-style" placeholder="Email"  required/>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="custom-textarea-style" placeholder="Message" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="custom-submit-style" value="Send" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="g-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2792.4385460442377!2d-73.63477702327057!3d45.58172812558871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91f3ddd2b886f%3A0xde87f9b92767777e!2s3%20Av.%20de%20London%2C%20Montr%C3%A9al-Nord%2C%20QC%20H1H%204H1%2C%20Canada!5e0!3m2!1sen!2s!4v1703204991028!5m2!1sen!2s" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyrights">
                            <p>© 2023 Limousine. All Rights Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="social-icons">
                            <ul class="inline-block">
                                <li><a href="javascript:;"><i class="fab fa-discord"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('assets/js/plugin.min.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        @if (isset($notification))
    <script>
        iziToast.{{ $notification['type'] }}({
            title: 'Notification',
            message: '{{ $notification['message'] }}',
            position: 'topRight',
            timeout: 5000,
        });
    </script>
@endif

    </body>
</html>