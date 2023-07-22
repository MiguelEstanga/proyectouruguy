const init = () => {
  initAddAnotherStudentButton();
  initCedulaEscolarInput();
}

const initCedulaEscolarInput = () => {
  const cedulaEscolarInput = $('#cedula_escolar_input');
  const fechaNacimientoInput = $('#fecha_nacimiento_input');
  const cedulaRepresentanteInput = $('#cedula_representante_input');

  const actualizarCedulaEscolar = () => {
    // Obtenemos los valores de los inputs
    // Concatenamos los valores
    const resultado = `${fechaNacimientoInput.val()}-${cedulaRepresentanteInput.val()}`;

    // Actualizamos el elemento con el resultado
    cedulaEscolarInput.val(resultado);
  }

  // crea un codigo javascript que construya un string concatenando dos inputs y se actualice con la entrada del usuario
  fechaNacimientoInput.change(actualizarCedulaEscolar);
  cedulaRepresentanteInput.change(actualizarCedulaEscolar);
};

const initAddAnotherStudentButton = () => {
  const $form = $('.dashboard__main__content__form__representados-list');
  const $addAnotherStudentBtn = $('.dashboard__main__content__form__add-another-student');
  $addAnotherStudentBtn.on('click', function() {
    const representados = $form.children().length;
    $form.append(`
      <div class="dashboard__main__content__form__representados-list__datos-representado">
        <h3 class="dashboard__main__content__form__representados-list__datos-representado__num">
          Representado ${representados + 1}:
        </h3>
        <label class="dashboard__main__content__form__label">
          Nombre:
          <input
            type="text"
            name="representado[${representados}][name]"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Apellido:
          <input
            name="representado[${representados}][apellido]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Fecha de nacimiento:
          <input
            name="representado[${representados}][fecha_nacimiento]"
            type="date"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Cédula escolar:
          <input
            name="representado[${representados}][cedula_escolar]"
            type="text"
            class="dashboard__main__content__form__label__input"
          />
        </label>
        <label class="dashboard__main__content__form__label">
          Grado
          <select name="representado[${representados}][id_grado]">
            <option value="1">Primero</option>
            <option value="2">Segundo</option>
            <option value="3">Tercero</option>
            <option value="4">Cuarto</option>
            <option value="5">Quinto</option>
            <option value="6">Sexto</option>
          </select>
        </label>
        <label class="dashboard__main__content__form__label">
          Sección
          <select name="representado[${representados}][id_seccion]">
            <option value="1">0</option>
            <option value="2">A</option>
            <option value="3">B</option>
            <option value="4">C</option>
            <option value="5">D</option>
            <option value="6">E</option>
            <option value="7">F</option>
          </select>
        </label>
      </div>
    `);
  });
};

export default { init };
