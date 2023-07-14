@php
$links_director = [
  [
    'url' => '/director/docentes',
    'title' => 'Docentes',
    'active' => false
  ],
  [
    'url' => '/director/administradores',
    'title' => 'Administradores',
    'active' => false
  ],
  [
    'url' => '/director/estudiantes',
    'title' => 'Estudiantes',
    'active' => false
  ],
  [
    'url' => '/director/administradores',
    'title' => 'Desempeño',
    'active' => false
  ],
  [
    'url' => '/director/usuarios',
    'title' => 'Usuarios',
    'active' => true
  ],
  [
    'url' => '/director/administradores',
    'title' => 'Reportes',
    'active' => false
  ]
];

$links_docente = [
  [
    'url' => '/docente',
    'title' => 'Desempeño',
    'active' => false
  ],
  [
    'url' => '/docente/evaluar',
    'title' => 'Evaluar',
    'active' => true
  ],
  [
    'url' => '/docente/mi-seccion',
    'title' => 'Mi sección',
    'active' => false
  ],
  [
    'url' => '/docente/reportes',
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
  'url' => '/informacion-lapso'
];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/sass/app.scss'])
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
      @include('layouts.navigation')

      <!-- Page Heading -->
      <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Sistema de información Escuela Uruguay
          </h2>
        </div>
      </header>

      <!-- Page Content -->
      <main>
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

              <div class="dashboard p-6 text-gray-900 dark:text-gray-100">
                <aside class="dashboard__sidebar">
                  <div class="dashboard__sidebar__user">
                    <span class="dashboard__sidebar__user__name">
                      Juan Pérez
                    </span>
                    <span class="dashboard__sidebar__user__icon">
                      <img
                        src="{{ asset('images/user-graduate.svg') }}"
                        alt="usuario"
                      >
                    </span>
                    <span class="dashboard__sidebar__user__role">
                      Docente
                    </span>
                  </div>
                  <nav class="dashboard__sidebar__nav">
                    <ul class="dashboard__sidebar__nav__list">
                      @foreach($links_docente as $link)
                      <li class="dashboard__sidebar__nav__list__item">
                        @if (isset($link['submenu']))
                          <div class="dashboard__sidebar__nav__list__item__link">
                            {{ $link['title'] }}
                            <div class="dashboard__sidebar__nav__list__item__link__submenu">
                              @foreach($link['submenu'] as $submenu)
                              <a
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
                            {{ $link['title'] }}
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
                </aside>
                <section class="dashboard__data">
                  <header class="dashboard__data__header">
                    <h3 class="dashboard__data__header__site-title">
                      Sistema de información Escuela Uruguay
                    </h3>
                    <span class="dashboard__data__header__site-logo">
                      <img
                        src="{{ asset('images/escuela_logo.jpg') }}"
                        alt="Logo Escuela Uruguay"
                      >
                    </span>
                  </header>
                  <div class="dashboard__data__content">
                    {{ $slot }}
                  </div>
                  <footer class="dashboard__data__footer">
                    <div class="dashboard__data__footer__details">
                      <span class="dashboard__data__footer__details__key">
                        Periodo escolar:
                      </span>
                      <span class="dashboard__data__footer__details__value">
                        2023/2024
                      </span>
                    </div>
                    <div class="dashboard__data__footer__details">
                      <span class="dashboard__data__footer__details__key">
                        Lapso:
                      </span>
                      <span class="dashboard__data__footer__details__value">
                        1/3
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
