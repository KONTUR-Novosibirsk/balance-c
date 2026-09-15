<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/' . settings('favicon', default: 'default-favicon.ico')) }}">
    @if(seo()->metaData()->getDescription())
        <meta name="description" content="{{ seo()->metaData()->getDescription() }}">
    @endif
    @if(seo()->metaData()->getKeywords())
        <meta name="keywords" content="{{ seo()->metaData()->getKeywords() }}">
    @endif
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>{{ seo()->metaData()->getTitle() ?? config('app.name') }}</title>
    {!! settings('counters') !!}
</head>
<body>
@if(current_account() == null)
    <div id="auth-modal" class="vue_app hidden rounded-[12px]">
        <auth-component privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"/>
{{--        <auth-mobile-component privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"/>--}}
    </div>
@endif
<div class="wrapper{{ !Route::is('index') ? ' page-content':'' }}" id="wrapper">
    <header class="header">
        <div class="container header__container">
            <div class="header-content">
                <a href="{{ route('index') }}" class="header-logo">
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="white-logo">
                    <img src="{{ asset('/images/logo-dark.svg') }}" alt="logo" class="dark-logo">
                </a>
                <nav class="header-menu">
                    <x-menu::base-menu-component code="main" parent-css="menu"/>
                </nav>
                <div class="header-contacts">
                    <div class="header-contacts__icon">
                        <svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.76608 0H12.1407C12.2194 0.0302466 12.3262 0.0425925 12.4111 0.0583206C12.5403 0.0811973 12.6677 0.112745 12.7924 0.152736C13.5916 0.409693 14.2482 0.970758 14.6106 1.70651C14.7811 2.05307 14.8809 2.42823 14.9045 2.81139C14.9283 3.15082 14.917 3.55864 14.917 3.905L14.9169 5.69248L14.9165 11.3059L14.9167 17.7826L14.9169 19.9017C14.9171 20.616 14.9766 21.3475 14.7247 22.0295C14.4416 22.7766 13.8648 23.3851 13.1202 23.7225C12.9394 23.8048 12.7867 23.8567 12.5944 23.9038C12.5054 23.9256 12.2206 23.9696 12.1545 24H2.77737C2.70158 23.9689 2.46359 23.931 2.36946 23.9109C2.17581 23.8683 1.98762 23.8051 1.80834 23.7224C1.05659 23.3837 0.474371 22.7702 0.189437 22.0167C0.0890141 21.7466 0.0295209 21.4638 0.0128221 21.1773C-0.00830881 20.7914 0.00301341 20.344 0.00315872 19.9539L0.00340077 17.8996L0.00336456 11.5529L0.00341297 5.78254L0.00309811 3.93821C0.00301335 3.56544 -0.00753386 3.14805 0.0166243 2.78096C0.0418482 2.40859 0.140455 2.04432 0.307116 1.70781C0.659123 0.982716 1.29927 0.426265 2.08188 0.165088C2.20917 0.123548 2.33918 0.0902391 2.47104 0.0653802C2.56226 0.0475529 2.68098 0.031895 2.76608 0ZM1.41109 17.8846L10.2567 17.888L12.5941 17.8879L13.1885 17.8889C13.2485 17.889 13.453 17.8915 13.5037 17.8818L13.5066 14.8103L13.5065 9.1962L13.5069 5.7698V4.63609C13.5069 4.4437 13.5126 4.21216 13.5045 4.02225C12.5554 4.03303 11.5734 4.0204 10.6219 4.02034L4.54338 4.02026L2.21658 4.02014C2.02485 4.02004 1.58617 4.04769 1.4167 4.01224C1.39944 4.50185 1.41234 5.05761 1.41233 5.55082L1.41234 8.39176L1.41109 17.8846ZM7.53829 22.0593C8.3122 22.0241 8.91077 21.3895 8.87674 20.6406C8.84271 19.8915 8.18893 19.3103 7.41477 19.341C6.63739 19.3717 6.03363 20.0078 6.06779 20.76C6.10196 21.5123 6.76105 22.0946 7.53829 22.0593Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="header-contacts__content">
                        <div>
                            <div>
                                <a href="tel:{{settings('phone')}}" class="phone">{{settings('phone')}}</a>
                            </div>
                            <span class="phone-more">
                                 <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8452 6.19388L10.9702 12.897L4.09519 6.19388C3.9664 6.06509 3.81606 6.00069 3.64419 6.00069C3.47231 6.00069 3.32198 6.06509 3.19319 6.19388C3.0644 6.32267 3 6.473 3 6.64488C3 6.81675 3.05729 6.95998 3.17188 7.07457L10.4979 14.2074C10.6267 14.3362 10.7843 14.4006 10.9709 14.4006C11.1574 14.4006 11.3151 14.3362 11.4439 14.2074L18.7699 7.09588C18.8845 6.96709 18.9417 6.81309 18.9417 6.63388C18.9417 6.45467 18.8774 6.30434 18.7486 6.18288C18.6198 6.06142 18.4694 6.00046 18.2976 6C18.1257 5.99954 17.9754 6.06394 17.8466 6.19319L17.8452 6.19388Z" fill="white" stroke="white"/>
                            </svg>
                            </span>
                           <div class="phone__additional">
                               <a href="tel:{{settings('phone2')}}" class="phone">{{settings('phone2')}}</a>
                           </div>
                        </div>
                        <a href="mailto:{{settings('emailPublic')}}" class="mail">{{settings('emailPublic')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="burger-menu">
        <div class="burger-menu__top">
            <a href="" class="burger-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="burger-menu__logo">
            </a>
            <div class="burger-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
        </div>
        <div class="burger-menu__content">
            <div class="burger-menu__heading">Меню</div>
            <nav class="burger-menu__list">
                <x-menu::base-menu-component code="catalog" parent-css="menu"/>
            </nav>
        </div>
        <div class="burger-menu__shadow"></div>
    </div>
    <div class="catalog-menu">
        <div class="catalog-menu__top">
            <a href="{{ route('index') }}" class="catalog-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="catalog-menu__logo">
            </a>
            <div class="catalog-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
            <div class="catalog-menu__search">
                <form action="{{ route('shop.search') }}">
                    <input type="text" name="search" placeholder="Поиск по каталогу">
                    <button type="submit">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="&#208;&#152;&#208;&#186;&#208;&#190;&#208;&#189;&#208;&#186;&#208;&#184;">
                                <path id="Vector"
                                      d="M26.25 26.25L18.75 18.75M21.25 12.5C21.25 13.6491 21.0237 14.7869 20.5839 15.8485C20.1442 16.9101 19.4997 17.8747 18.6872 18.6872C17.8747 19.4997 16.9101 20.1442 15.8485 20.5839C14.7869 21.0237 13.6491 21.25 12.5 21.25C11.3509 21.25 10.2131 21.0237 9.15152 20.5839C8.08992 20.1442 7.12533 19.4997 6.31282 18.6872C5.5003 17.8747 4.85578 16.9101 4.41605 15.8485C3.97633 14.7869 3.75 13.6491 3.75 12.5C3.75 10.1794 4.67187 7.95376 6.31282 6.31282C7.95376 4.67187 10.1794 3.75 12.5 3.75C14.8206 3.75 17.0462 4.67187 18.6872 6.31282C20.3281 7.95376 21.25 10.1794 21.25 12.5Z"
                                      stroke="#5065CE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <div class="catalog-menu__content">
            <div class="catalog-menu__heading">Каталог</div>
            <nav class="mobile-catalog__menu">
                <x-menu::base-menu-component code="catalog" parent-css="menu"/>
            </nav>
        </div>
    </div>
    <div class="modal-menu">
        <div class="modal-menu__top">
            <a href="" class="modal-menu__link">
                <img src="{{ asset('/images/logo.svg') }}" alt="" class="modal-menu__logo">
            </a>
            <div class="modal-menu__close">
                <img src="{{ asset('/images/catalog-menu__close.svg') }}" alt="">
            </div>
        </div>
        <div class="modal-menu__content">
            <div class="modal-menu__heading">Меню</div>
            <nav class="mobile-modal__menu">
                <x-menu::base-menu-component code="main" parent-css="menu"/>
            </nav>
        </div>
    </div>

    <div class="mobile-menu">
        <div class="mobile-menu__container container">
            <a href="/" class="mobile-menu__item menu-home current">
                <div class="main-img">
                    <img src="{{ asset('/images/mobile-menu__home.svg') }}" alt="">
                </div>
                <p>Главная</p>
            </a>
            <div class="mobile-menu__item menu-catalog">
                <div class="catalog-img">
                    <img src="{{ asset('/images/mobile-menu__catalog.svg') }}" alt="">
                </div>
                <p>Каталог</p>
            </div>
            <div class="menu-cart mobile-menu__item">
                <a href="{{ route('cart.index') }}" class="cart-link">
                    <x-shop::cart-count/>
                    <img src="{{ asset('/images/mobile-menu__basket.svg') }}" alt="">
                    <p>Корзина</p>
                </a>
            </div>
            <div class="mobile-menu__item menu-list">
                <div class="list-img">
                    <img src="{{ asset('/images/mobile-menu__menu.svg') }}" alt="">
                </div>
                <p>Меню</p>
            </div>
        </div>
    </div>
    <main class="content">
        @yield('app.content')
    </main>
    <footer class="footer" id="footer">
        <div class="footer-feedback">
            <div class="footer-feedback__heading">
                {!! settings('feedback') !!}
            </div>
            <div id="footer-feedback" class="vue_app">
                <feedback-form-component
                    privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"
                    agreement-link="{{ route('page.show', settings('agreement_page', default: 1)) }}"
                    personal-data-link="{{ route('page.show', settings('personal_page', default: 1)) }}"></feedback-form-component>
            </div>
        </div>
        <div class="footer-content">
            <div class="container footer-container">
                <a href="/" class="footer-logo">
                    <img src="{{ asset('/images/logo.svg') }}" alt="">
                </a>
                <div class="footer-info">
                    <nav class="footer-menu">
                        <x-menu::base-menu-component code="main" parent-css="menu"/>
                    </nav>
                    <div class="footer-contacts">
                        <a href="tel:{{ settings('phone') }}" class="phone">
                            {{ settings('phone') }}
                        </a>
                        <a href="tel:{{ settings('phone2') }}" class="phone">
                            {{ settings('phone2') }}
                        </a>
                        <a href="mailto:{{ settings('emailPublic') }}" class="mail">
                            {{ settings('emailPublic') }}
                        </a>
                    </div>
                    <div>
                            <div class="footer-privacy">
                                @if(settings('policy_page'))
                                    <a href="{{ route('page.show', settings('policy_page', default: 1)) }}">
                                        Политика конфиденциальности
                                    </a>
                                @endif
                                @if(settings('offer_page'))
                                    <a href="{{ route('page.show', settings('offer_page', default: 1)) }}">
                                        Публичная оферта
                                    </a>
                                @endif
                            </div>
                            <div class="footer-copyright">
                                © {{ settings('copyright', default: 'site.com') }}
                            </div>
                            <div class="footer-contur">
                                <div class="footer-contur__left">
                                    <a href="https://kontur-lite.ru/uslugi/landing-page-prodaiushchaia-stranitca/" class="contur-link" target="_blank" title="Разработка Landing Page в Новосибирске">
                                        Создание сайтов
                                    </a>
                                    <a href="http://kontur-promo.ru/prodvizhenie-sajjtov" class="contur-link" target="_blank" title="Продвижение сайтов">
                                        Продвижение сайтов
                                    </a>
                                </div>
                                <div class="footer-contur__right">
                                    <svg width="57" height="38" viewBox="0 0 57 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_71_555)">
                                            <path d="M51.6184 16.7631V18.5173H52.2493C52.9149 18.5173 53.4365 18.2673 53.4365 17.6005C53.4365 17.1591 53.2213 16.7612 52.3824 16.7612C52.1198 16.7612 51.9776 16.7518 51.6184 16.7631ZM49.875 22.9597V15.043C50.2999 15.043 52.2493 15.043 52.4681 15.043C54.5489 15.043 55.2892 16.1171 55.2892 17.5777C55.2892 19.0478 54.4176 19.6483 54.0036 19.8643L56.2083 22.9597H54.0948L52.2603 20.2147H51.6184V22.9597H49.875Z" fill="#898292"/>
                                            <path d="M47.5014 19.5536C47.5014 21.9746 46.0445 22.9597 44.437 22.9597C42.5083 22.9597 41.168 21.7946 41.168 19.474V15.043H42.8833V19.0895C42.8833 20.3227 43.2367 21.2623 44.437 21.2623C45.4758 21.2623 45.7862 20.4591 45.7862 19.1917V15.043H47.5014V19.5536Z" fill="#898292"/>
                                            <path d="M37.2083 38H0V0H37.2083V13.0015H35.4834V1.7616H1.72309V36.2384H35.4834V24.9136H37.2083V38Z" fill="#898292"/>
                                            <path d="M29.5472 22.9597L26.1016 18.2089V22.9597H24.543V15.043H25.8723L29.3196 19.8146L29.3161 15.043H30.8729L30.8764 22.9597H29.5472Z" fill="#898292"/>
                                            <path d="M33.25 15.043H38.7917V16.7392H36.7845V22.9597H35.2556V16.7392H33.25V15.043Z" fill="#898292"/>
                                            <path d="M7.91797 15.043H9.60169V18.4921L12.011 15.043H14.0311L11.2643 18.6966L14.2513 22.9597H12.1167L9.60169 19.1926V22.9597H7.91797V15.043Z" fill="#898292"/>
                                            <path d="M18.6047 21.3201C19.8784 21.3201 20.5392 20.2919 20.5392 19.0014C20.5392 17.6014 19.6868 16.6826 18.6047 16.6826C17.4946 16.6826 16.6719 17.6014 16.6719 19.0014C16.6719 20.3126 17.5326 21.3201 18.6047 21.3201ZM18.6047 15.043C20.6449 15.043 22.168 16.5618 22.168 19.0014C22.168 21.3201 20.6449 22.9597 18.6047 22.9597C16.5662 22.9597 15.043 21.439 15.043 19.0014C15.043 16.7807 16.4704 15.043 18.6047 15.043Z" fill="#898292"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_71_555">
                                                <rect width="57" height="38" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="footer-icon">
                <svg width="816" height="122" viewBox="0 0 816 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.04">
                        <path d="M43.6967 119.377H0V70.7871H10.8368V109.589H43.6967C57.3301 109.589 65.1954 100.325 65.1954 87.3915C65.1954 67.1166 47.0176 62.048 30.7625 62.048H0V2.62174H63.4476V12.4096H10.8368V52.2601H30.7625C52.0864 52.2601 76.0322 59.2514 76.0322 87.3915C76.0322 105.918 64.1467 119.377 43.6967 119.377Z" fill="white"/>
                        <path d="M97.0749 70.4375L123.817 0H133.605L160.173 70.4375H148.987L128.886 15.9053H128.537L108.261 70.4375H97.0749ZM90.2582 119.377H78.7223L93.9287 79.1767H163.669L178.875 119.377H167.339L155.978 88.9645H101.445L90.2582 119.377Z" fill="white"/>
                        <path d="M227.089 0H238.275L282.496 119.377H271.31L227.089 0ZM193.006 119.377H181.644L222.37 12.4096L227.963 27.4409L193.006 119.377Z" fill="white"/>
                        <path d="M303.951 70.4375L330.694 0H340.482L367.049 70.4375H355.863L335.763 15.9053H335.413L315.138 70.4375H303.951ZM297.135 119.377H285.599L300.805 79.1767H370.545L385.752 119.377H374.216L362.854 88.9645H308.321L297.135 119.377Z" fill="white"/>
                        <path d="M401.805 119.377V54.7071H483.605V119.377H472.768V64.4949H412.641V119.377H401.805ZM401.805 44.2201H412.641V2.62174H401.805V44.2201ZM472.768 44.2201H483.605V2.62174H472.768V44.2201Z" fill="white"/>
                        <path d="M607.484 84.7697H619.194C609.931 106.967 588.257 122.173 563.962 121.999C530.577 121.824 504.534 94.3828 504.359 61.174C504.185 28.3148 531.451 0 564.311 0C587.558 0 608.532 14.3322 618.32 35.1314H606.26C597.346 19.9253 581.615 9.78784 564.311 9.78784C537.394 9.78784 515.021 33.5583 515.196 61.174C515.371 89.1393 536.695 112.036 563.962 112.211C582.314 112.385 599.094 101.199 607.484 84.7697Z" fill="white"/>
                        <path d="M684.013 65.1393H634.199V55.3515H684.013V65.1393Z" fill="white"/>
                        <path d="M804.289 84.7697H816C806.736 106.967 785.063 122.173 760.767 121.999C727.383 121.824 701.34 94.3828 701.165 61.174C700.99 28.3148 728.257 0 761.117 0C784.364 0 805.338 14.3322 815.126 35.1314H803.066C794.152 19.9253 778.421 9.78784 761.117 9.78784C734.2 9.78784 711.827 33.5583 712.002 61.174C712.177 89.1393 733.501 112.036 760.767 112.211C779.12 112.385 795.9 101.199 804.289 84.7697Z" fill="white"/>
                    </g>
                </svg>
            </div>
        </div>
    </footer>
    <div id="cookieee">
        <form method="POST" action="{{ route('cookie.accept') }}">
            @csrf
            @method('POST')
            <p> Мы используем cookie-файлы для наилучшего представления нашего сайта. Продолжая использовать этот сайт, вы соглашаетесь c
                <a href="{{ route('page.show', settings('policy_page', default: 1)) }}">политикой конфиденциальности.</a></p>
            <input type="hidden" name="accepted_all" value="1">
            <button type="submit" id="cookieee__apply" class="btn">Принять</button>
        </form>
    </div>
    <div id="feedback-popup" style="display: none;" class="vue_app">
        <feedback-form-component
                privacy-policy-link="{{ route('page.show', settings('policy_page', default: 1)) }}"></feedback-form-component>
    </div>
</div>
</body>
</html>
