
<x-app-layout>
  <p class="dashboard__main__content__section-title">
    Editar Administrador
  </p>
  <form  action="{{ route('director_administrador.update' , $administrador->id) }}"  method="post" class="dashboard__main__content__form">
    @csrf
    @method('put')
    <label class="dashboard__main__content__form__label">
      Nombre:
      <input 
        type="text"
        name="nombre"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador->administradores[0]->nombre1 }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Apellido:
      <input
        name="apellido"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador->administradores[0]->apellido  }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Email:
      <input
        name="email"
        type="email"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador->email  }}"
      />
    </label>
    <label class="dashboard__main__content__form__label">
      Fecha de nacimiento:
      <input
        name="fecha_nacimiento"
        id="fecha_nacimiento_input"
        type="date"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador->fecha_nacimiento  }}"
      />
    </label>
 
    <label class="dashboard__main__content__form__label">
      Cédula:
      <input
        name="cedula"
        type="text"
        class="dashboard__main__content__form__label__input"
        value="{{ $administrador->cedula  }}"
      />
    </label>
     <label class="dashboard__main__content__form__label">
        Habilitar
        <select name="habilitar">
                <option  

                {{ $administrador->roles[0] == 'Desabilitado' ? 'selected' : ''  }}
                 value="Desabilitado">
                   Deshabilitar
                </option>
                <option  
                  {{ $administrador->roles[0]->name == "Administrador" ? 'selected' : '' }}
                   value="Administrador">
                  Habilitar
                </option>
        
      </select>
    </label>


   

  
    <button class="dashboard__main__content__form__btn">
      Actualizar administrador
    </button>
  </form>

  
</x-app-layout>
