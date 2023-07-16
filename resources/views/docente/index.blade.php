@php
  $students = [
    [
      'firstname' => 'Alejandro',
      'lastname' => 'Gomez',
      'birthdate' => '19/07/2013'
    ],
    [
      'firstname' => 'Ana',
      'lastname' => 'Bello',
      'birthdate' => '20/03/2012'
    ]
  ];
@endphp

<x-app-layout>
  <h2 class="dashboard__data__content__welcome-msg">
    Ver desempeño estudiantil
  </h2>
  <div class="dashboard__data__content__details">
    <div class="dashboard__data__content__details__content">
      <p class="dashboard__data__content__details__content__text">
        4to grado - Sección: A
      </p>
    </div>
  </div>
  <table class="users-table">
    <tr class="users-table__headers">
      <th class="users-table__headers__header">Nombre</th>
      <th class="users-table__headers__header">Apellido</th>
      <th class="users-table__headers__header">Fecha de nacimiento</th>
      <th class="users-table__headers__header">Acción</th>
    </tr>
    @foreach($students as $user)
    <tr class="users-table__row">
      <td class="users-table__row__data">{{ $user['firstname'] }}</td>
      <td class="users-table__row__data">{{ $user['lastname'] }}</td>
      <td class="users-table__row__data">{{ $user['birthdate'] }}</td>
      <td class="users-table__row__data">
        <div class="relative" data-te-dropdown-ref>
          <button
            class="flex items-center whitespace-nowrap rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
            type="button"
            id="dropdownMenuButton1"
            data-te-dropdown-toggle-ref
            aria-expanded="false"
            data-te-ripple-init
            data-te-ripple-color="light">
            Seleccionar
            <span class="ml-2 w-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
                fill="currentColor"
                class="h-5 w-5">
                <path
                  fill-rule="evenodd"
                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                  clip-rule="evenodd" />
              </svg>
            </span>
          </button>
          <ul
            class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block w-5"
            aria-labelledby="dropdownMenuButton1"
            data-te-dropdown-menu-ref>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                href="#"
                data-te-dropdown-item-ref
                >Informes</a
              >
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                href="#"
                data-te-dropdown-item-ref
                >Rasgos</a
              >
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                href="#"
                data-te-dropdown-item-ref
                >Boletin</a
              >
            </li>
            <li>
              <a
                class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                href="#"
                data-te-dropdown-item-ref
                >Constancia</a
              >
            </li>
          </ul>
        </div>
      </td>
    </tr>
    @endforeach
  </table>
</x-app-layout>
