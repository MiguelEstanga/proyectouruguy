import './bootstrap';

import Alpine from 'alpinejs';
import {
  Dropdown,
  Ripple,
  initTE,
} from "tw-elements";

window.Alpine = Alpine;

Alpine.start();

initTE({ Dropdown, Ripple });
