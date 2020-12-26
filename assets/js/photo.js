function triggerClick() {

    document.querySelector('#photo').click();
}

function displayImage(e) {

    if (e.files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {
            document.querySelector('#photoDisplay').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(e.files[0]);
    }
}

function triggerClick() {

    document.querySelector('#vphoto').click();
}

function displayImage(e) {

    if (e.files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {
            document.querySelector('#photoDisplay').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(e.files[0]);
    }
}

function fileClick() {

    document.querySelector('#fileup').click();
}

function displayFile(e) {

    if (e.files[0]) {

        var reader = new FileReader();

        reader.onload = function (e) {
            document.querySelector('#fileuplaod').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(e.files[0]);
    }
}