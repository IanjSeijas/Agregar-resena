// JavaScript source code
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll(".rating .star")
    const ratingValue = document.querySelector(".rating input")
    stars.forEach((item, idx) => {
        item.addEventListener("click", function () {
            ratingValue.value = idx + 1
            console.log(ratingValue.value)
            stars.forEach(i => {
                i.classList.replace("bi-star-fill", "bi-star")
            })
            for (let i = 0; i < stars.length; i++) {
                if (i <= idx) {
                    stars[i].classList.replace("bi-star", "bi-star-fill")
                }
            }
        })
    })

    const categoriaElegida = document.getElementById('categoria');
    if (categoriaElegida) {
        categoriaElegida.addEventListener('change', function () {
            const valorSeleccionado = categoriaElegida.value;
            console.log('Categoria seleccionada: ', valorSeleccionado);
        });
    }

    const formResena = document.getElementById('formresena');
    if (formResena) {
        formResena.addEventListener('submit', function (event) {
            alert('Registro correcto. Gracias por tu opinión');

        });
    } else {
        console.error('Formulario con id "formresena" no encontrado');
    }
});