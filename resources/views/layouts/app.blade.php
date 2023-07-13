@php
$links = [
  [
    'url' => '/director/docentes',
    'title' => 'Docentes'
  ],
  [
    'url' => '/director/administradores',
    'title' => 'Administradores'
  ],
  [
    'url' => '/director/representantes',
    'title' => 'Representantes'
  ],
  [
    'url' => '/director/estudiantes',
    'title' => 'Estudiantes'
  ],
  [
    'url' => '/director/usuarios',
    'title' => 'Usuarios'
  ]
];

$link_config = [
  'title' =>  'información del lapso',
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
                      {{ Auth::user()->name }}
                    </span>
                    <span class="dashboard__sidebar__user__icon">
                    </span>
                    <span class="dashboard__sidebar__user__role">
                      Director
                    </span>
                  </div>
                  <nav class="dashboard__sidebar__nav">
                    <ul class="dashboard__sidebar__nav__list">
                      @foreach($links as $link)
                      <li class="dashboard__sidebar__nav__list__item">
                        <a
                          class="dashboard__sidebar__nav__list__item__link"
                          href="{{ $link['url'] }}"
                        >
                          {{ $link['title'] }}
                        </a>
                      </li>
                      @endforeach
                    </ul>
                    <a
                      class="dashboard__sidebar__nav__link-config"
                      href="{{ $link_config['url'] }}"
                    >
                      {{ $link_config['title'] }}
                    </a>
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
