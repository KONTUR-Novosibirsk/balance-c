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
    <section class="about" id="about">
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
                   <div class="progress-bar">
                       <div class="progress-bar__items">
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                       </div>
                       <div class="progress-bar__items">
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                       </div>
                       <div class="progress-bar__items">
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                           <div></div>
                       </div>
                   </div>
                </div>
                <div class="about-content__third">
                    <img src="{{iblock()->getById(3)?->elements[2]->image()?->getPreview()}}" alt="">
                    <h4>{{iblock()->getById(3)?->elements[2]->title}}</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages" id="advantages">
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
