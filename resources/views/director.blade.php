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
      'url' => '/director/alumnos',
      'title' => 'Alumnos'
    ],
    [
      'url' => '/director/rendimiento',
      'title' => 'Desempeño'
    ],
    [
      'url' => '/director/usuarios',
      'title' => 'Usuarios'
    ],
    [
      'url' => '/director/reportes',
      'title' => 'Reportes'
    ]
  ]
@endphp

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      Sistema de información Escuela Uruguay
    </h2>
  </x-slot>

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
              <p class="dashboard__data__content__welcome-msg">Bienvenido al sistema</p>
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
</x-app-layout>
