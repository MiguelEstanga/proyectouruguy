import './bootstrap';

import Alpine from 'alpinejs';
import {
  Dropdown,
  Ripple,
  initTE,
} from "tw-elements";
import forms from "./forms";

window.Alpine = Alpine;

Alpine.start();

initTE({ Dropdown, Ripple });

forms.init();