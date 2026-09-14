@if ($services->count() > 0)
    <section class="services" id="services">
        <div class="container">
            <div class="section-heading">
                <div class="section-name">
                    Услуги
                </div>
                {!! iblock()->getById(2)?->description !!}
            </div>
            {{ $content }}
            <ul class="services__list">
                @foreach($services as $service)
                    <li class="services-item">
                        <span class="services-item__number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <div class="services-item__img">
                            <img src="{{ $service->images->first()->getFull() }}" alt="{{ $service->name }}">
                        </div>
                        <h4>{{ $service->name }}</h4>
                        <p>{{ $service->content }}</p>

                        <a href="{{ $service->getUrl() }}" class="services-item__link">
                            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 0V2H9.59L0 11.59L1.41 13L11 3.41V12H13V0H1Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endif
