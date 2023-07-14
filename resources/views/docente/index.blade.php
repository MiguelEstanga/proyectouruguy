@php

@endphp

<x-app-layout>
  <h2 class="dashboard__data__content__welcome-msg">
    Evaluar: ver o modificar proyecto
  </h2>
  <div class="dashboard__data__content__details">
    <div class="dashboard__data__content__details__content">
      <p class="dashboard__data__content__details__content__text">
        4to grado - Sección: A
      </p>
    </div>
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
      <button class="dashboard__data__content__current-project__value__button">Modificar</button>
    </div>
  </div>
  <div class="dashboard__data__content__other-projects">
    <span class="dashboard__data__content__other-projects__title">
      Ver proyecto
    </span>
    <div class="dashboard__data__content__other-projects__projects">
      <button class="dashboard__data__content__other-projects__projects__project">
        1
      </button>
      <button
        class="
          dashboard__data__content__other-projects__projects__project
          dashboard__data__content__other-projects__projects__project--disabled"
      >
        2
      </button>
      <button
        class="
          dashboard__data__content__other-projects__projects__project
          dashboard__data__content__other-projects__projects__project--disabled"
      >
        3
      </button>
    </div>
  </div>
</x-app-layout>
