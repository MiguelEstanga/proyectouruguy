@php
$links_director = [
  [
    'url' => '/director',
    'title' => 'Inicio',
    'active' => true
  ],
  [
    'url' => '/director/docentes/menu',
    'title' => 'Docentes',
    'active' => false
  ],
  [
    'url' => '/director/administradores/menu',
    'title' => 'Administradores',
    'active' => false
  ],
  [
    'url' => '/director/estudiantes/menu',
    'title' => 'Estudiantes',
    'active' => false
  ],
  [
    'url' => '/director/representantes/menu',
    'title' => 'Representantes',
    'active' => false
  ],
  [
    'url' => '/director/reportes',
    'title' => 'Reportes',
    'active' => false
  ]
];

$links_docente = [
  [
    'url' => '/docente',
    'title' => 'Desempeño',
    'active' => true
  ],
  [
    'url' => '/docente/evaluar',
    'title' => 'Evaluar',
    'active' => false
  ],
  [
    'url' => '/docente/mi-seccion',
    'title' => 'Mi sección',
    'active' => false
  ],
  [
    'url' => '/reportes',
    'title' => 'Reportes',
    'active' => false
  ],
  [
    'url' => '/docente/salir',
    'title' => 'Salir',
    'active' => false
  ]
];


$links_representante = [
  [
    'url' => '/representante',
    'title' => 'Representados',
    'active' => false,
    'submenu' => [
      [
        'name' => 'Felipe León',
        'active' => true,
        'url' => '/representante/1'
      ],
      [
        'name' => 'Rosa León',
        'active' => false,
        'url' => '/representante/1'
      ]
    ]
  ],
  [
    'url' => '/representante/rendimiento',
    'title' => 'Desempeño',
    'active' => false
  ],
  [
    'url' => '/representante/configuracion',
    'title' => 'Configuración',
    'active' => false
  ]
];

$link_config = [
  'title' =>  'Configuración',
  'url' => '/director/informacion-lapso'
];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/sass/index.scss'])
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

      <!-- Page Content -->
      <main>
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

              <div class="dashboard p-6 text-gray-900 dark:text-gray-100">
                <aside class="dashboard__sidebar">
                  <div class="dashboard__sidebar__user">
                    <span class="dashboard__sidebar__user__name">
                      @can('Director')
                        {{ Auth::user()->director->nombre1 }}
                      @endcan
                       @can('Profesor')
                        {{ Auth::user()->profesor[0]->nombre1 }}
                      @endcan
                       @can('Director')
                        {{ Auth::user()->director->nombre1 }}
                      @endcan
                    </span>
                    <span class="dashboard__sidebar__user__icon">
                      <img
                        src="{{ asset('images/user-tie.svg') }}"
                        alt="usuario"
                      >
                    </span>
                    <span class="dashboard__sidebar__user__role">
                      {{ Auth::user()->roles[0]->name }}
                    </span>
                  </div>
                 
                  @can('Director')
                     <nav class="dashboard__sidebar__nav">
                    <ul class="dashboard__sidebar__nav__list">
                      @foreach($links_director as $link)

                      <li class="dashboard__sidebar__nav__list__item">
                        @if (isset($link['submenu']))
                          <div class="dashboard__sidebar__nav__list__item__link">
                            {{ $link['title'] }}
                            <div class="dashboard__sidebar__nav__list__item__link__submenu">
                              @foreach($link['submenu'] as $submenu)
                              <a
                                target="_black"
                                class="
                                  dashboard__sidebar__nav__list__item__link__submenu__link 
                                  {{ $submenu['active'] ? 'dashboard__sidebar__nav__list__item__link__submenu__link--active' : '' }}"
                                href="{{ $submenu['url'] }}"

                              >
                                {{ $submenu['name'] }}
                              </a>
                              @endforeach
                            </div>
                          </div>
                        @else

                          <a
                            class="
                              dashboard__sidebar__nav__list__item__link
                              {{ $link['active'] ? 'dashboard__sidebar__nav__list__item__link--active' : '' }}"
                            href="{{ $link['url'] }}"
                          >
                            {{ $link['title']    }}
                          </a>
                        @endif
                      </li>
                      @endforeach
                    </ul>
                    <div class="dashboard__sidebar__nav__footer-links">
                      <a
                        class="dashboard__sidebar__nav__footer-links__config"
                        href="{{ $link_config['url'] }}"
                      >
                        {{ $link_config['title'] }}
                      </a>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                  this.closest('form').submit();">
                          {{ __('Cerrar sesión') }}
                        </a>
                      </form>
                    </div>
                  </nav>
                  @endcan
                </aside>
                <section class="dashboard__main">
                  <header class="dashboard__main__header">
                    <h3 class="dashboard__main__header__site-title">
                      Sistema de información Escuela Uruguay
                    </h3>
                    <span class="dashboard__main__header__site-logo">
                      <img
                        src="{{ asset('images/escuela_logo.jpg') }}"
                        alt="Logo Escuela Uruguay"
                      >
                    </span>
                  </header>
                  <div class="dashboard__main__content">
                    {{ $slot }}
                  </div>
                  <footer class="dashboard__main__footer">
                    <div class="dashboard__main__footer__details">
                      <span class="dashboard__main__footer__details__key">
                        Periodo escolar:
                      </span>
                      <span class="dashboard__main__footer__details__value">
                      
                          {{ $periodo->añoescolar ?? 'no se ha cargado' }}

                          
                          <br>
                          
                      </span>
                    </div>
                    <div class="dashboard__main__footer__details">
                      <span class="dashboard__main__footer__details__key">
                        Lapso:
                      </span>
                      <span class="dashboard__main__footer__details__value">
                        {{ $lapso }}/3
                      </span>
                    </div>
                  </footer>
                </section>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
