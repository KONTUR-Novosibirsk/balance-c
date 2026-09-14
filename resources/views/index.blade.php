@extends('layouts.app')
@section('app.content')
    <section class="banner" style="background: no-repeat center/cover url('{{iblock()->getById(1)?->elements[0]?->image()?->getFull()}}')">
        <div class="container">
            <div class="banner-content">
                {!! iblock()->getById(1)?->elements[0]?->description !!}

                <button class="btn">
                    Рассчитать стоимость
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="4" fill="white" fill-opacity="0.16"/>
                        <path d="M14.5 13.5V15.5H23.09L13.5 25.09L14.91 26.5L24.5 16.91V25.5H26.5V13.5H14.5Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    @module('services')
        <x-services::homepage-services/>
    @endmodule
    <section class="about">
        <div class="about__container container">
            <div class="section-heading">
                <div class="section-name">
                    О компании
                </div>
                {!! iblock()->getById(3)?->description !!}
            </div>
            <div class="about-content">
                <div class="about-content__first">
                   <h4>{{iblock()->getById(3)?->elements[0]->title}}</h4>
                    {!! iblock()->getById(3)?->elements[0]->description !!}
                </div>
                <div class="about-content__second">
                    <h4>{{iblock()->getById(3)?->elements[1]->title}}</h4>
                    <div class="about-content__second-steps">
                        <span>Звонок</span>
                        <span>Договор</span>
                        <span>Старт работы</span>
                    </div>
                    <div>
                        <svg width="380" height="40" viewBox="0 0 380 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4_463)">
                                <rect width="6.09" height="40" rx="3.045" fill="#FE7940"/>
                                <rect x="10.09" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="20.2" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="30.29" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="40.4" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="50.5" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="60.61" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="70.7" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="80.8101" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="90.9" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="101.01" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="121.2" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="111.11" width="6.09" height="40" rx="3.045" fill="#FE7940"/>
                                <rect x="131.31" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="141.42" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="151.51" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="161.62" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="171.72" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="181.82" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="191.92" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="202.03" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="232.32" width="6.11" height="40" rx="3.055" fill="#FE7940"/>
                                <rect x="222.23" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="252.43" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="242.43" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="212.12" width="6.11" height="40" rx="3.055" fill="#2F2724"/>
                                <rect x="262.64" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="272.73" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="282.82" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="292.92" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="303.01" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="313.11" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="323.2" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="333.29" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="343.39" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="353.48" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="363.57" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                                <rect x="373.67" width="6.09" height="40" rx="3.045" fill="#2F2724"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_4_463">
                                    <rect width="379.77" height="40" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="about-content__third">
                    <img src="{{iblock()->getById(3)?->elements[2]->image()?->getPreview()}}" alt="">
                    <h4>{{iblock()->getById(3)?->elements[2]->title}}</h4>
                </div>
            </div>
        </div>
    </section>
    @module('slider')
    <section class="main-slider">
        <x-slider::slider-component code="main"/>
    </section>
    @endmodule
    @module('shop')
    <x-shop::hit-products limit="10"/>
    <x-shop::categories-on-index limit="10"/>
    @endmodule
    @module('sale')
    <x-sale::active-component limit="5"/>
    @endmodule
    <div id="cookieee">
        <form method="POST" action="{{ route('cookie.accept') }}">
            @csrf
            @method('POST')
            <p>Мы используем cookie-файлы
                <a href="{{ route('page.show', settings('policy_page', default: 1)) }}">
                    подробнее
                </a>.
            </p>
            <input type="hidden" name="accepted_all" value="1">
            <button type="submit" id="cookieee__apply">Принять</button>
        </form>
    </div>


    <section class="brands">
        <div class="brands__container container">
            <h2 class="brands-heading">
                <a href="#">
                    Бренды
                </a>
            </h2>
            <div class="brands-list swiper">
                <div class="brands-list__wrapper swiper-wrapper">
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                    <div class="brands-item swiper-slide">
                        <img src="images/brand__img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="advantages__container container">
            <h2 class="advantages-heading">
                Наши преимущества
            </h2>
            <div class="advantages-list">
                <div class="advantages-item">
                    <div class="advantages-item__ico">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#D1D5DB"/>
                            <path
                                d="M13 31L19.879 24.121C20.4416 23.5586 21.2045 23.2426 22 23.2426C22.7955 23.2426 23.5584 23.5586 24.121 24.121L31 31M28 28L30.379 25.621C30.9416 25.0586 31.7045 24.7426 32.5 24.7426C33.2955 24.7426 34.0584 25.0586 34.621 25.621L37 28M28 19H28.015M16 37H34C34.7956 37 35.5587 36.6839 36.1213 36.1213C36.6839 35.5587 37 34.7956 37 34V16C37 15.2044 36.6839 14.4413 36.1213 13.8787C35.5587 13.3161 34.7956 13 34 13H16C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16V34C13 34.7956 13.3161 35.5587 13.8787 36.1213C14.4413 36.6839 15.2044 37 16 37Z"
                                stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="advantages-item__text">
                        Бонусные рубли за покупки
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#D1D5DB"/>
                            <path
                                d="M13 31L19.879 24.121C20.4416 23.5586 21.2045 23.2426 22 23.2426C22.7955 23.2426 23.5584 23.5586 24.121 24.121L31 31M28 28L30.379 25.621C30.9416 25.0586 31.7045 24.7426 32.5 24.7426C33.2955 24.7426 34.0584 25.0586 34.621 25.621L37 28M28 19H28.015M16 37H34C34.7956 37 35.5587 36.6839 36.1213 36.1213C36.6839 35.5587 37 34.7956 37 34V16C37 15.2044 36.6839 14.4413 36.1213 13.8787C35.5587 13.3161 34.7956 13 34 13H16C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16V34C13 34.7956 13.3161 35.5587 13.8787 36.1213C14.4413 36.6839 15.2044 37 16 37Z"
                                stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="advantages-item__text">
                        Бонусные рубли за покупки
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#D1D5DB"/>
                            <path
                                d="M13 31L19.879 24.121C20.4416 23.5586 21.2045 23.2426 22 23.2426C22.7955 23.2426 23.5584 23.5586 24.121 24.121L31 31M28 28L30.379 25.621C30.9416 25.0586 31.7045 24.7426 32.5 24.7426C33.2955 24.7426 34.0584 25.0586 34.621 25.621L37 28M28 19H28.015M16 37H34C34.7956 37 35.5587 36.6839 36.1213 36.1213C36.6839 35.5587 37 34.7956 37 34V16C37 15.2044 36.6839 14.4413 36.1213 13.8787C35.5587 13.3161 34.7956 13 34 13H16C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16V34C13 34.7956 13.3161 35.5587 13.8787 36.1213C14.4413 36.6839 15.2044 37 16 37Z"
                                stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="advantages-item__text">
                        Бонусные рубли за покупки
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="advantages-item__ico">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="25" cy="25" r="25" fill="#D1D5DB"/>
                            <path
                                d="M13 31L19.879 24.121C20.4416 23.5586 21.2045 23.2426 22 23.2426C22.7955 23.2426 23.5584 23.5586 24.121 24.121L31 31M28 28L30.379 25.621C30.9416 25.0586 31.7045 24.7426 32.5 24.7426C33.2955 24.7426 34.0584 25.0586 34.621 25.621L37 28M28 19H28.015M16 37H34C34.7956 37 35.5587 36.6839 36.1213 36.1213C36.6839 35.5587 37 34.7956 37 34V16C37 15.2044 36.6839 14.4413 36.1213 13.8787C35.5587 13.3161 34.7956 13 34 13H16C15.2044 13 14.4413 13.3161 13.8787 13.8787C13.3161 14.4413 13 15.2044 13 16V34C13 34.7956 13.3161 35.5587 13.8787 36.1213C14.4413 36.6839 15.2044 37 16 37Z"
                                stroke="#111827" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="advantages-item__text">
                        Бонусные рубли за покупки
                    </div>
                </div>
            </div>
        </div>
    </section>
    @module('news')
    <section class="news">
        <x-news::last-news-component limit="4"/>
    </section>
    @endmodule
@endsection
