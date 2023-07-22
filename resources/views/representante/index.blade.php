@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Ver representado
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
        {{ $representado['nombre'] }}
      </p>
      <div class="dashboard__main__content__details__content__info">
        <p class="dashboard__main__content__details__content__info__text">
          Grado: {{ $representado['grado']['label'] }}
        </p>
        <p class="dashboard__main__content__details__content__info__text">
          Seccion: {{ $representado['seccion']['seccion'] }}
        </p>
        <p class="dashboard__main__content__details__content__info__text">
          Maestro: {{ $representado['docente'] }}
        </p>
      </div>
    </div>
  </div>
  <div class="dashboard__main__content__links">
    <a href="#" class="dashboard__main__content__links__link">
      Ver informe descriptivo
      <img
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/file.svg') }}"
        alt="usuario"
      >
    </a>
    <a href="#" class="dashboard__main__content__links__link">
      Ver boletín
      <img
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/book.svg') }}"
        alt="usuario"
      >
    </a>
    <a href="#" class="dashboard__main__content__links__link">
      Ver constancia
      <img
        class="dashboard__main__content__links__link__icon"
        src="{{ asset('images/clipboard.svg') }}"
        alt="usuario"
      >
    </a>
  </div>
  <div class="dashboard__main__content__current-project">
    <div class="dashboard__main__content__current-project__details">
      <span class="dashboard__main__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__main__content__current-project__details__value">
        Lapso: {{ $lapso['nombre'] }}
      </span>
    </div>
    <div class="dashboard__main__content__current-project__value">
      <span class="dashboard__main__content__current-project__value__text">
        {{ $proyecto['descripcion'] }}
      </span>
    </div>
  </div>
</x-app-layout>
