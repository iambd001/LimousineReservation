<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Limousine Reservation</title>
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

        <section class="banner-home spacing__x">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="banner-main-slider">
                            <div class="hm-slider-box">
                                <div class="text-box">
                                    <div>
                                        <h3>Transit Van</h3>
                                    </div>
                                    <div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="{{asset('assets/images/mix/h-slider/slide-1.png')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-banner-category">
                <div class="hc-slider">
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
        </section>

        <section class="search-form form-styling spacing__x">
            <div class="container-fluid">
                <form class="row align-items-end" action="" method="">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fa fas fa-calendar-alt"></i>
                                    <input type="text" id="datepicker1" class="input-style" placeholder="Pickup Date" required />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fa far fa-clock"></i>
                                    <input type="text" id="timepicker1" class="input-style" placeholder="12:00 pm" required />
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="c-form-group">
                                    <i class="fas fa-user-friends"></i>
                                    <select class="input-style" required>
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
                                    <select class="input-style" required>
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="c-form-group s2">
                                    <span class="left-align">From</span>
                                    <input type="text" class="input-style" placeholder="Enter Full Pick-Up Address & Select From Autocomplete" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="c-form-group s2">
                                    <span class="left-align">To</span>
                                    <input type="text" class="input-style" placeholder="Select Airport" />
                                    <span class="right-align">Add Stop</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="c-form-group amount">
                            <div class="calculated-amount">$0.00</div>
                            <div>(Gratuity Included)</div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="c-form-group">
                            <input type="submit" class="input-type-submit" value="Next" />
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section class="wwd spacing__x">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headingstyle1 text-center">
                            <h6>Limousine</h6>
                            <h3>What we do?</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="boxstyle-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58" viewBox="0 0 58 58" fill="none">
                                <g clip-path="url(#clip0_47_131)">
                                <path d="M24.1667 27.3889H29V30.6111H24.1667V27.3889Z" fill="black"/>
                                <path d="M42.6139 22.8295C39.7565 18.1537 35.8585 14.2005 31.2233 11.2778C29.082 9.92066 26.641 9.10834 24.1135 8.91176C21.586 8.71517 19.0487 9.1403 16.7233 10.15C14.6893 11.1094 12.9194 12.5496 11.5665 14.346C10.2135 16.1425 9.31817 18.2413 8.95778 20.4611C8.8289 21.2184 8.73223 21.9434 8.63556 22.6522C7.12715 22.8967 5.7547 23.6693 4.76315 24.832C3.77159 25.9947 3.22546 27.4719 3.22223 29V38.8761C3.22223 39.7307 3.56171 40.5503 4.166 41.1546C4.77028 41.7589 5.58986 42.0984 6.44445 42.0984V29C6.44445 28.1454 6.78393 27.3259 7.38822 26.7216C7.9925 26.1173 8.81209 25.7778 9.66667 25.7778H39.8428C42.9479 25.7821 45.9246 27.0175 48.1203 29.2131C50.3159 31.4087 51.5513 34.3855 51.5556 37.4906V38.6667H48.3333C47.6529 37.0074 46.3854 35.6568 44.7726 34.8725C43.1598 34.0882 41.3148 33.9251 39.5894 34.4144C37.8641 34.9037 36.3794 36.0111 35.4185 37.5254C34.4576 39.0396 34.0878 40.8546 34.3798 42.624C34.6717 44.3934 35.605 45.9934 37.0014 47.1187C38.3978 48.2439 40.1596 48.8157 41.9506 48.7248C43.7417 48.6339 45.4366 47.8867 46.7119 46.6259C47.9872 45.3651 48.7537 43.6788 48.865 41.8889H51.5556C52.4101 41.8889 53.2297 41.5494 53.834 40.9451C54.4383 40.3409 54.7778 39.5213 54.7778 38.6667V37.4906C54.7713 34.0137 53.5532 30.6478 51.3332 27.9719C49.1131 25.2961 46.0299 23.4776 42.6139 22.8295ZM17.7222 22.5556H11.165C11.165 22.0561 11.31 21.5406 11.4067 20.9445C11.685 19.1746 12.4114 17.5053 13.5168 16.0954C14.6223 14.6854 16.0699 13.5816 17.7222 12.8889V22.5556ZM20.9445 22.5556V12.2122C23.9523 11.8216 27.0028 12.4818 29.58 14.0811C33.0983 16.2725 36.1348 19.1556 38.5056 22.5556H20.9445ZM41.5667 45.7234C40.7701 45.7234 39.9913 45.4871 39.329 45.0446C38.6666 44.602 38.1503 43.9729 37.8455 43.2369C37.5406 42.501 37.4609 41.6911 37.6163 40.9098C37.7717 40.1285 38.1553 39.4108 38.7186 38.8475C39.2819 38.2842 39.9996 37.9006 40.7809 37.7452C41.5622 37.5898 42.3721 37.6695 43.108 37.9744C43.844 38.2792 44.4731 38.7955 44.9156 39.4579C45.3582 40.1202 45.5945 40.899 45.5945 41.6956C45.5945 42.7638 45.1701 43.7883 44.4147 44.5436C43.6594 45.299 42.6349 45.7234 41.5667 45.7234Z" fill="black"/>
                                <path d="M22.8294 38.6666C22.149 37.0074 20.8815 35.6567 19.2687 34.8724C17.6559 34.0881 15.8109 33.9251 14.0855 34.4144C12.3602 34.9037 10.8755 36.0111 9.91457 37.5253C8.95368 39.0395 8.58393 40.8545 8.87589 42.624C9.16785 44.3934 10.1011 45.9934 11.4975 47.1186C12.8939 48.2439 14.6557 48.8156 16.4468 48.7247C18.2378 48.6339 19.9327 47.8867 21.208 46.6259C22.4833 45.365 23.2498 43.6788 23.3611 41.8889H31.9V41.4861C31.8681 40.5355 31.9767 39.5855 32.2222 38.6666H22.8294ZM16.1111 45.7233C15.3145 45.7233 14.5358 45.4871 13.8734 45.0445C13.211 44.6019 12.6948 43.9729 12.3899 43.2369C12.0851 42.5009 12.0053 41.6911 12.1607 40.9098C12.3161 40.1284 12.6997 39.4108 13.263 38.8475C13.8263 38.2842 14.544 37.9006 15.3253 37.7451C16.1066 37.5897 16.9165 37.6695 17.6525 37.9743C18.3885 38.2792 19.0175 38.7955 19.4601 39.4578C19.9027 40.1202 20.1389 40.8989 20.1389 41.6955C20.1389 42.7638 19.7145 43.7882 18.9592 44.5436C18.2038 45.299 17.1793 45.7233 16.1111 45.7233Z" fill="black"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_47_131">
                                <rect width="58" height="58" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </span>
                            <h4>Title goes here</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="boxstyle-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 46 46" fill="none">
                                    <path d="M36.4167 7.66665H32.5833V5.74998C32.5833 5.24165 32.3814 4.75414 32.022 4.39469C31.6625 4.03525 31.175 3.83331 30.6667 3.83331C30.1583 3.83331 29.6708 4.03525 29.3114 4.39469C28.9519 4.75414 28.75 5.24165 28.75 5.74998V7.66665H17.25V5.74998C17.25 5.24165 17.0481 4.75414 16.6886 4.39469C16.3292 4.03525 15.8417 3.83331 15.3333 3.83331C14.825 3.83331 14.3375 4.03525 13.978 4.39469C13.6186 4.75414 13.4167 5.24165 13.4167 5.74998V7.66665H9.58333C8.05834 7.66665 6.5958 8.27245 5.51747 9.35078C4.43914 10.4291 3.83333 11.8917 3.83333 13.4166V36.4166C3.83333 37.9416 4.43914 39.4042 5.51747 40.4825C6.5958 41.5608 8.05834 42.1666 9.58333 42.1666H36.4167C37.9417 42.1666 39.4042 41.5608 40.4825 40.4825C41.5609 39.4042 42.1667 37.9416 42.1667 36.4166V13.4166C42.1667 11.8917 41.5609 10.4291 40.4825 9.35078C39.4042 8.27245 37.9417 7.66665 36.4167 7.66665ZM38.3333 36.4166C38.3333 36.925 38.1314 37.4125 37.772 37.7719C37.4125 38.1314 36.925 38.3333 36.4167 38.3333H9.58333C9.075 38.3333 8.58749 38.1314 8.22805 37.7719C7.8686 37.4125 7.66667 36.925 7.66667 36.4166V23H38.3333V36.4166ZM38.3333 19.1666H7.66667V13.4166C7.66667 12.9083 7.8686 12.4208 8.22805 12.0614C8.58749 11.7019 9.075 11.5 9.58333 11.5H13.4167V13.4166C13.4167 13.925 13.6186 14.4125 13.978 14.7719C14.3375 15.1314 14.825 15.3333 15.3333 15.3333C15.8417 15.3333 16.3292 15.1314 16.6886 14.7719C17.0481 14.4125 17.25 13.925 17.25 13.4166V11.5H28.75V13.4166C28.75 13.925 28.9519 14.4125 29.3114 14.7719C29.6708 15.1314 30.1583 15.3333 30.6667 15.3333C31.175 15.3333 31.6625 15.1314 32.022 14.7719C32.3814 14.4125 32.5833 13.925 32.5833 13.4166V11.5H36.4167C36.925 11.5 37.4125 11.7019 37.772 12.0614C38.1314 12.4208 38.3333 12.9083 38.3333 13.4166V19.1666Z" fill="black"/>
                                    </svg>
                            </span>
                            <h4>Title goes here</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="boxstyle-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                                    <path d="M24 4.5C21.5325 4.5 19.5 6.5325 19.5 9V20.016L6.891 25.641L6 26.016V33.186L7.6875 33L19.5 31.6875V34.4535L15.6555 37.029L15 37.449V43.8285L16.782 43.4535L24 42L31.2195 43.455L33 43.83V37.455L32.343 37.032L28.5 34.452V31.6875L40.3125 33L42 33.1875V26.0175L41.109 25.6425L28.5 20.016V9C28.5 6.5325 26.4675 4.5 24 4.5ZM24 7.5C24.8475 7.5 25.5 8.1525 25.5 9V21.984L26.391 22.359L39 27.984V29.814L27.1875 28.5L25.5 28.3125V36.093L26.157 36.516L30 39.093V40.173L24.2805 39.048L24 38.955L23.718 39.045L18 40.17V39.09L21.8445 36.5145L22.5 36.0915V28.3125L20.8125 28.5L9 29.8125V27.9825L21.609 22.3575L22.5 21.9825V9C22.5 8.1525 23.1525 7.5 24 7.5Z" fill="black"/>
                                    </svg>
                            </span>
                            <h4>Title goes here</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="who-we-are wwr-element  pb-0">
            <div class="container pl-0">
                <div class="row align-items-center">
                    <div class="col-lg-7 pl-0"></div>
                    <div class="col-lg-5">
                        <div class="headingstyle1">
                            <h6>Limousine</h6>
                            <h3>Who We Are</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br /><br />Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="spacing__x2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="headingstyle1 text-center">
                            <h6>Limousine</h6>
                            <h3>REVIEWS</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-slider">
                            <div class="testimonial-box">
                                <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                                <div class="company-logo"><img src="{{asset('assets/images/mix/google.png')}}" /></div>
                                <div class="review">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="review-by">
                                    <p>Emmanuel</p>
                                </div>
                                <div class="rb-letter">
                                    <span>E</span>
                                </div>
                            </div>
                            <div class="testimonial-box">
                                <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                                <div class="company-logo"><img src="{{asset('assets/images/mix/google.png')}}" /></div>
                                <div class="review">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="review-by">
                                    <p>Emmanuel</p>
                                </div>
                                <div class="rb-letter">
                                    <span>E</span>
                                </div>
                            </div>
                            <div class="testimonial-box">
                                <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                                <div class="company-logo"><img src="{{asset('assets/images/mix/google.png')}}" /></div>
                                <div class="review">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="review-by">
                                    <p>Emmanuel</p>
                                </div>
                                <div class="rb-letter">
                                    <span>E</span>
                                </div>
                            </div>
                            <div class="testimonial-box">
                                <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
                                <div class="company-logo"><img src="{{asset('assets/images/mix/google.png')}}" /></div>
                                <div class="review">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="review-by">
                                    <p>Emmanuel</p>
                                </div>
                                <div class="rb-letter">
                                    <span>E</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-detail-1" style="background-image: url({{ asset('assets/images/bg/bg-1.png') }});">
            <section class="app-elements spacing__x">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <img class="element element-1" src="{{asset('assets/images/mix/app/1.png')}}" />
                            <img class="element element-2" src="{{asset('assets/images/mix/app/2.png')}}" />
                            <div class="apps-detail bg-detail-1" style="background-image: url('{{asset('assets/images/bg/bg-2.png')}});">
                                <h3>BOOK AND <br />MANAGE TRIPS VIA <br />OUR APPS</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                <ul>
                                    <li><a href="javascript:;"><img src="{{asset('assets/images/mix/app/app-url.png')}}" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="spacing__x contact-styling">
                <div class="container">
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
                                            <input type="text" class="custom-input-style" placeholder="Name" name="name" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="custom-input-style" placeholder="Email" name="email" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="custom-textarea-style" placeholder="Message" name="message" rows="8"></textarea>
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
        </div>

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