<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Car Booking | Limousine Reservation</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{asset('assets/css/plugin.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
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
                                <li><a href="{{url('/')}}"><img src="assets/images/icon/icon-home.svg" /></a></li>
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

        <section class="form-styling spacing__x pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fa fas fa-calendar-alt"></i>
                                    <input type="text" id="datepicker1" class="input-style hasDatepicker" placeholder="Pickup Date" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fa far fa-clock"></i>
                                    <input type="text" id="timepicker1" class="input-style" placeholder="12:00 pm" required="">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fas fa-user-friends"></i>
                                    <select class="input-style" required="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fas fa-suitcase-rolling"></i>
                                    <select class="input-style" required="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="spacing__x">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headingstyle1 text-center">
                            <h3>Select your car</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="center-mode-slider">
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/1.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/2.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/3.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/4.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/5.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="hc-slide-box">
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/home-category/2.png')}}" />
                                </div>
                                <div class="text-box">
                                    <h3>Transit Van</h3>
                                    <ul>
                                        <li><i class="fas fa-user-friends"></i> <span>Max 3</span></li>
                                        <li><i class="fas fa-suitcase-rolling"></i> <span>Max 3</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="form-styling spacing__x">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headingstyle1 text-center">
                            <h3>Routing</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="c-form-group s2">
                            <span class="left-align">From</span>
                            <input type="text" class="input-style" placeholder="Enter Full Pick-Up Address &amp; Select From Autocomplete">
                        </div>
                        <div class="c-form-group s2">
                            <span class="left-align">To</span>
                            <input type="text" class="input-style" placeholder="Select Airport">
                            <span class="right-align">Add Stop</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="spacing__x pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headingstyle1 text-center">
                            <h3>Main Passenger</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="First Name" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="Last Name" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="c-input-style" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="c-form-group mb-5 mt-5 text-center">
                            <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off">
                                <div class="switch"></div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" style="display: none;">
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="First Name" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="Last Name" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="c-input-style" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="c-form-group h-icon mb-4">
                            <i class="fas fa-user"></i>
                            <input type="text" class="c-input-style" placeholder="" required/>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="final-pricing bg-color-2">
                            <h3>$102.40 <i class="far fa-info-circle"></i></h3>
                        </div>
                        <div class="final-pricing-btn position-absolute">
                            <div class="c-form-group">
                                <input type="submit" class="input-type-submit" value="Verify reservation">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    </body>
</html>