@php
    $common_params = [
        'header_status'       => 'on',
        'titulo_landing'      => 'Landing de prueba',
        'descripcion_landing' => 'Descripción de prueba',
        'og_image'            => 'og-gas.jpg',
        'cabecera'            => [
            'menu' => [
                [
                    'nombre' => 'INICIO',
                    'url'    => '#algo'
                ],
                [
                    'nombre' => 'BENEFICIOS',
                    'url'    => '#algo'
                ],
                [
                    'nombre' => 'DESCÁRGALO',
                    'url'    => '#algo'
                ],
                [
                    'nombre' => 'CONTACTO',
                    'url'    => '#algomás'
                ]
            ],
            'cta_simple' => [
                'texto'  => 'Contáctanos',
                'enlace' => '#'
            ],
            'cta_boton' => [
                'texto'  => 'Descarga el eBook',
                'enlace' => '#'
            ],
        ]
    ];
@endphp

@extends('layouts.base', $common_params)

@section('content')

    {{--@include('partials.hero_img_izq', [
        'header_status' => $common_params['header_status'],
        'titulo'        => 'The world\'s top secure payment platform',
        'descripcion'   => 'Authorized payment gateway from prestigious specialized financial service providers',
        'cta_texto'     => 'Get started',
        'cta_link'      => '#',
        'enlace'        => true,
        'pre_enlace'    => 'Questions?',
        'enlace_url'    => '#',
        'imagen_fondo'  => 'assets/images/hero/aeroland-payment-hero-bg.jpg'
    ])--}}

    @include('partials.video_fondo_texto_izquierda', [
        'header_status'    => $common_params['header_status'],
        'titulo'           => 'The world\'s top secure payment platform',
        'descripcion'      => 'Authorized payment gateway from prestigious specialized financial service providers',
        'cta_texto'        => 'Get started',
        'cta_link'         => '#',
        'enlace'           => true,
        'pre_enlace'       => 'Questions?',
        'enlace_url'       => '#',
        'imagen_fondo'     => 'assets/images/hero/aeroland-payment-hero-bg.jpg',
        'video_fondo_mp4'  => 'hero_bg/video/hero1.mp4'
    ])

    @include('partials.form1')

    @include('partials.about1', [
    'titulo_about' => 'Advantages AeroLand Brings',
    'subtitulo_about' => 'You’ll need these advantages to take the lead.',
    'section' => [
    [
    'titulo_section' => 'Connect ideas',
    'texto_section' => 'Consider this app a platform for connecting people from everywhere based on their preferences.'
    ],
    [
    'titulo_section' => 'Connect ideas',
    'texto_section' => 'Consider this app a platform for connecting people from everywhere based on their preferences.'
    ],
    [
    'titulo_section' => 'Connect ideas',
    'texto_section' => 'Consider this app a platform for connecting people from everywhere based on their preferences.'
    ],
    [
    'titulo_section' => 'Connect ideas',
    'texto_section' => 'Consider this app a platform for connecting people from everywhere based on their preferences.'
    ],
    [
    'titulo_section' => 'Quick account access',
    'texto_section' => 'Access to your account can be granted with the assistance from a fully automated fingerprint
    scanner.'
    ],
    [
    'titulo_section' => 'Connect ideas',
    'texto_section' => 'Consider this app a platform for connecting people from everywhere based on their preferences.'
    ],
    ],
    ])

    @include ('partials.payment1',
    [
    'autotext_titulo' => 'Say hello to',
    'autotext_texto1' => ' Auto Process.',
    'autotext_texto2' => ' Online Cre.',
    'autotext_texto3' => ' Cashless Economy.',
    'autotext_subtitulo' => 'Financial transactions turn from physical to digital.',

    'steps' => [
    'step_one' => [
    [
    'titulo' => 'Effortless billing with AeroLand',
    'texto' => 'Enhanced billing systems offer you a variety of ways to pay electric bills, phone bills, medical
    bills delivered online, in person or by mail.',
    ],

    'cta_boton' => [
    'texto' => 'Try for free',
    'enlace' => '#'
    ],

    'cta_simple' => [
    'pretexto' => 'Questions?',
    'texto' =>'Talk to our team',
    'enlace' => '#'
    ],
    ],

    'step_two' => [
    [
    'titulo' => 'Secure payment',
    'texto' => 'Enhanced billing systems offer you a variety of ways to pay electric bills, phone bills, medical
    bills delivered online, in person or by mail.',
    ],
    'check_list' =>[
    [
    'texto' => 'User-friendly, modern and intuitive'
    ],
    [
    'texto' => 'Updated mobile design & features'
    ],
    [
    'texto' => 'Beautiful icons, typography and images'
    ],
    [
    'texto' => 'Extendable premium customer support'
    ],
    ],
    'cta_boton' => [
    'texto' => 'Find out more',
    'enlace' => '#'
    ],
    ],
    'step_three' => [
    [
    'titulo' => 'Payment system access',
    'texto' => 'The access to payment account is conducted through 2-step authentication…'
    ],

    'estadisticas' => [
    [
    'cantidad' => '17',
    'texto' => 'Accounts created'
    ],
    [
    'cantidad' => '491',
    'texto' => 'Times dowloaded'
    ],
    ]

    ]
    ]
    ])

    @include('partials.pricing1', [
    'titulo_precio' => 'Affordable for everyone!',
    'subtitulo_precio' => 'Choose a suitable package for your site',

    'precios' => [

    'price_one' => [
    'price_tipo' => 'FREE',
    'price_cantidad' => '0',
    'cta_boton' => [
    'texto' => 'Get Started',
    'enlace' => '#'
    ],
    'caracteristicas' => [
    ['caracteristica' => '03 projects'],
    ['caracteristica' => 'Quality & Customer Experience'],
    ['caracteristica' => 'Try for free, forever!'],
    ],

    ],
    'price_two' => [
    'price_tipo' => 'PERSONAL',
    'price_cantidad' => '59',
    'cta_boton' => [
    'texto' => 'Get Started',
    'enlace' => '#'
    ],
    'caracteristicas' => [
    ['caracteristica' => 'Unlimited project'],
    ['caracteristica' => 'Power And Predictive Dialing'],
    ['caracteristica' => 'Quality & Customer Experience'],
    ['caracteristica' => '24/7 phone and email support'],
    ],

    ],
    'price_three' => [
    'price_tipo' => 'GRUPO',
    'price_cantidad' => '29',
    'cta_boton' => [
    'texto' => 'Get Started',
    'enlace' => '#'
    ],
    'caracteristicas' => [
    ['caracteristica' => '10 projects'],
    ['caracteristica' => 'Quality & Customer Experience'],
    ['caracteristica' => '24/7 phone and email support'],
    ],

    ],
    ],
    ]
    )

    @include ('partials.newsletter',[
    'newsletter' => [
    'titulo_newsletter' => 'Subscribe to receive updates',
    'inputs' => [
    ['placeholder' => "Name"],
    ['placeholder' => 'Email'],
    ],
    'cta_boton' => [
    'texto' => 'Subscribe',
    'enlace' => '#'
    ],

    'cta_simple' => [
    'title' => 'What’s next in AeroLand?',
    'texto' => 'Learn more',
    'enlace' => '#'
    ],
    ]

    ])

    <div id="menu__flotante">
        <div class="menu-principal-container">

        </div>
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function(){
            setTimeout(function(){
                $('#menu__flotante').css({
                    'display': 'none',
                    'width': '60%',
                    'clip-path': 'polygon(0 0, 0% 0, 75% 100%, 0 100%)'
                }, 300, function(){
                    $('#menu__flotante').animate({
                        'clip-path': 'polygon(0 0, 100% 0, 75% 100%, 0 100%)'
                    }, 300);
                });
            },600);
            /*setTimeout(function(){
                $('#menu__flotante').css({
                    'width': '60%',
                    'clip-path': 'polygon(0 0, 100% 0, 75% 100%, 0 100%)'
                }, 300);
            },1200);*/
        });
    </script>
@endpush
