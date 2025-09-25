$(document).ready(function () {
    $('#profilePicture').change(function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const selectedImage = $('#selectedImage');
                selectedImage.attr('src', e.target.result);
                selectedImage.removeClass('d-none');
            };
            reader.readAsDataURL(file);
        }
    });
});
