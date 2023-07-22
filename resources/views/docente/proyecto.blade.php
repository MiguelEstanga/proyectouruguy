@php

@endphp

<x-app-layout>
  <h2 class="dashboard__main__content__welcome-msg">
    Evaluar: ver o modificar proyecto
  </h2>
  <div class="dashboard__main__content__details">
    <div class="dashboard__main__content__details__content">
      <p class="dashboard__main__content__details__content__text">
        4to grado - Sección: A
      </p>
    </div>
  </div>
  <div class="dashboard__main__content__current-project">
    <div class="dashboard__main__content__current-project__details">
      <span class="dashboard__main__content__current-project__details__title">
        Proyecto actual
      </span>
      <span class="dashboard__main__content__current-project__details__value">
        1er Lapso
      </span>
    </div>
    <form class="dashboard__main__content__current-project__value" action="/proyecto" method="post">
      <textarea class="dashboard__main__content__current-project__value__text">
        Reforzando valores de integridad y disciplina como mejora
      </textarea>
      <button class="dashboard__main__content__current-project__value__button">Modificar</button>
    </form>
  </div>
</x-app-layout>
