<x-app-layout>
  <form action="{{ route('proyecto.store')  }}" method="post">
    @csrf
 
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label  
       class="dashboard__main__content__form__label">
      Descripción:
    <input

        type="text"
        name="descripcion"
        class="dashboard__main__content__form__label__input"
      />
    </label>
    <label  
    class="dashboard__main__content__form__label__input"
     for="">
      Lapso:
    </label> 
    <select name="id_lapso" id="">
     
         <option value="{{ $lapso->id }}">
            {{ $lapso->nombre }}
        </option>
    
    </select>

    <button>
      crear proyecto
    </button>
    </form> 
</x-app-layout>