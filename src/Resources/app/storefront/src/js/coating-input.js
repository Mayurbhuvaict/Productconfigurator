import Plugin from 'src/plugin-system/plugin.class';

export default class coatingInput extends Plugin {
    init() {

        this._registerEvents()
    }

    _registerEvents() {

        var coatingInputs = document.getElementsByClassName('coatingType');

        // Loop through each element and add event listener
        for (var i = 0; i < coatingInputs.length; i++) {
            coatingInputs[i].addEventListener('change', function () {
                // Your action on change goes here
                console.log('Input value changed:', this.value);
                var withoutCoatingOption = document.getElementById('withoutCoatingOption');
                var powderCoatingOption = document.getElementById('powderCoatingOption');
                var wetPaintingOption = document.getElementById('wetPaintingOption');

                if (this.value === "1") {
                    withoutCoatingOption.classList.replace('d-none', 'd-flex')

                    powderCoatingOption.classList.replace('d-flex', 'd-none')
                    wetPaintingOption.classList.replace('d-flex', 'd-none')

                } else if (this.value === "2") {
                    powderCoatingOption.classList.replace('d-none', 'd-flex')

                    withoutCoatingOption.classList.add('d-none')
                    withoutCoatingOption.classList.replace('d-flex', 'd-none')
                    wetPaintingOption.classList.replace('d-flex', 'd-none')
                } else if (this.value === "3") {
                    wetPaintingOption.classList.replace('d-none', 'd-flex')

                    withoutCoatingOption.classList.add('d-none')
                    withoutCoatingOption.classList.replace('d-flex', 'd-none')
                    powderCoatingOption.classList.replace('d-flex', 'd-none')
                }
            });

        }
    }
}

