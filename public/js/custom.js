function previewImage(event, imageId){
    if(event.target.files.lenght>0){
        let src = URL.createObjectURL();
        let imgPreview = document.getElementById(imageId);
        imagePreview.src= src;
        imgPreview.style.display="block";
    }
}

const validateSize = (imageId, maxSize) => {
    let size = document.getElementById(imageId).files[0].size;
    return (size <= maxSize); 
}

const validateType = (fileId, ...fileTypes) => {
    const NOT_FOUND = -1;
    let type = document.getElementById(fileId).files[0].type;
    const upperCased = fyleTypes.map (it => tuUpperCase());
    return (upperCased.indexOf(type.toUpperCase()) !== NOT_FOUND);
}

function validateData (){
    let isValid = true;
    if (!validateSize('foto', 2048*1024)){
        alert ("El tamaño de la foto debe ser menor a 2MB");
        isValid = false;
    }
    return isValid;
}