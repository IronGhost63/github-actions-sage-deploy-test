import interactiveMap from "./components/interactive-map";

import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

window.addEventListener('DOMContentLoaded', () => {
  interactiveMap();
});
