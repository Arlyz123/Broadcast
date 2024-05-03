document.addEventListener('DOMContentLoaded', function() {
    const selectPais = document.getElementById('selectPais');
    const selectGenero = document.getElementById('selectGenero');
    const imagePais = document.getElementById('selectedImage');
    const imageGenero = document.getElementById('selectedImage2');

    selectPais.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const imageUrl = selectedOption.getAttribute('data-image');
        imagePais.src = imageUrl; // Asigna la URL de la imagen al primer elemento img
    });

    selectGenero.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const imageUrl = selectedOption.getAttribute('data-image');
        imageGenero.src = imageUrl; // Asigna la URL de la imagen al segundo elemento img
    });
});
