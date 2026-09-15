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
    <section class="advantages">
        <div class="container">
            <div class="section-heading">
                <div class="section-name">
                    Преимущества
                </div>
                {!! iblock()->getById(4)?->description !!}
            </div>
            <div class="advantages-list">
                @foreach(iblock()->getById(4)?->elements as $el)
                    <div class="advantages-item">
                        <div class="advantages-item__img">
                            <img src="{{$el->image()?->getPreview()}}" alt="{{$el->title}}">
                        </div>

                       <div class="advantages-item__content">
                           <h3 class="advantages-item__title">
                               {{$el->title}}
                           </h3>
                           <div class="advantages-item__text">
                               {!! $el->description !!}
                           </div>
                       </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
