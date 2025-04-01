const calculatePercentage = ( min, max, value ) => {
  if (max <= min) {
    return null; // Invalid range
  }

  if (value < min) {
      return 0;
  }

  if (value > max) {
      return 100;
  }

  const range = max - min;
  const relativeValue = value - min;

  return ( relativeValue / range ) * 100;
}

export default () => {
  const mapSection = document.querySelector('.interactive-map');

  if ( !mapSection ) {
    return;
  }

  const mapBound = {
    top: 20.47038,
    left: 97.34498,
    bottom: 15.18574,
    right: 101.35523,
  }

  const mapContainer = mapSection.querySelector('.interactive-map__map-box');
  const pins = mapContainer.querySelectorAll('.interactive-map__pin');

  if ( pins.length === 0 ) {
    return;
  }

  pins.forEach( ( pin ) => {
    const id = pin.dataset.key;
    const lat = pin.dataset.lat;
    const lng = pin.dataset.lng;

    const relativeY = calculatePercentage( mapBound.bottom, mapBound.top, lat );
    const relativeX = calculatePercentage( mapBound.left, mapBound.right, lng );

    console.log({id, lat, lng, relativeX, relativeY});

    pin.style.bottom = `${relativeY}%`;
    pin.style.left = `${relativeX}%`;

    pin.addEventListener('click', (e) => {
      e.preventDefault();

      const target = mapSection.querySelector(`.interactive-map__modal[data-key="${id}"]`);

      console.log( target )

      target.classList.add('show');
    })
  });

  const modalCloseBtn = mapSection.querySelectorAll('.interactive-map__modal-close');

  modalCloseBtn.forEach( (btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();

      const targetModal = mapSection.querySelector('.interactive-map__modal.show');

      if ( !targetModal ) {
        return;
      }

      targetModal.classList.remove('show');
    })
  } );
}
