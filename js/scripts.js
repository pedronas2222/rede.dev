        const fileInput = document.getElementById('fileInput');
        const imagePreview = document.getElementById('imagePreview');

        fileInput.addEventListener('change', function() {
            const file = fileInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const image = new Image();
                    image.src = e.target.result;
                    imagePreview.innerHTML = ''; // Limpa a área de visualização
                    imagePreview.appendChild(image);
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = 'Nenhuma imagem selecionada';
            }
        });