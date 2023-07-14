@php

@endphp

<x-app-layout>
  <h2 class="dashboard__data__content__welcome-msg">
    Ver representado
  </h2>
  <div class="dashboard__data__content__details">
    <div class="dashboard__data__content__details__content">
      <p class="dashboard__data__content__details__content__text">
        Felipe León
      </p>
      <div class="dashboard__data__content__details__content__info">
        <p class="dashboard__data__content__details__content__info__text">4to grado - Seccion A</p>
        <p class="dashboard__data__content__details__content__info__text">Maestro: Jose Jimenez</p>
      </div>
    </div>
  </div>
  <div class="dashboard__data__content__links">
    <a href="#" class="dashboard__data__content__links__link">
      Ver informe descriptivo
      <img
        class="dashboard__data__content__links__link__icon"
        src="{{ asset('images/file.svg') }}"
        alt="usuario"
      >
    </a>
    <a href="#" class="dashboard__data__content__links__link">
      Ver boletín
      <img
        class="dashboard__data__content__links__link__icon"
        src="{{ asset('images/book.svg') }}"
        alt="usuario"
      >
    </a>
    <a href="#" class="dashboard__data__content__links__link">
      Ver constancia
      <img
        class="dashboard__data__content__links__link__icon"
        src="{{ asset('images/clipboard.svg') }}"
        alt="usuario"
      >
    </a>
  </div>
  <div class="dashboard__data__content__current-project">
    <div class="dashboard__data__content__current-project__details">
      <span class="dashboard__data__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__data__content__current-project__details__value">
        1er Lapso
      </span>
    </div>
    <div class="dashboard__data__content__current-project__value">
      <span class="dashboard__data__content__current-project__value__text">
        Reforzando valores de integridad y disciplina como mejora
      </span>
    </div>
  </div>
</x-app-layout>
