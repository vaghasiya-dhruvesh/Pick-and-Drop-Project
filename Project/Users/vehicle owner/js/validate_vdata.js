function validateForm() {
    let name = document.forms["registration"]["vname"].value;
    let num = document.forms["registration"]["vno"].value;
    let brand = document.forms["registration"]["brand"].value;
    let color = document.forms["registration"]["color"].value;
    let price = document.forms["registration"]["price"].value;
    // let vdate = document.forms["registration"]["vdate"].value;
    let img1 = document.forms['registration']['photo'];
    let img2 = document.forms['registration']['puc'];
    let img3 = document.forms['registration']['rcbook'];
    let img4 = document.forms['registration']['insurance'];
    let validExt = ["pdf"];
    let jpgext = ["jpg"];

    if (name.length < 2) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Enter correct name',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter Your Full Name");
        return false;
    }
    if(name.length > 30){
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Vehicle name is too long',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter Your Full Name");
        return false;
    }
    // Remove any spaces or dashes from the vehicle number
    num = num.replace(/\s|-/g, '');

    // Check if the vehicle number is of the correct length
    if (num.length !== 10) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Enter corrent length number',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter corrent length number");
        return false;
    }

    // Check that the first two characters are letters
    if (!/^[A-Z]{2}$/.test(num.slice(0, 2))) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Enter first two character a letters',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter first four character a letters");
        return false;
    }

    // Check that the next two characters are digits
    if (!/^\d{2}$/.test(num.slice(2, 4))) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Enter digit',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter digit");
        return false;
    }

    // Check that the next two characters are digits OR letters
    if (!/^[A-Z\d]{2}$/.test(num.slice(4, 6))) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Invalid vehicle number',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter digit");
        return false;
    }

    // Check that the last four characters are digit
    if (!/^\d{4}$/.test(num.slice(6))) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:-  Enter last four character digit',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:-  Enter last four character alphanumeric");
        return false;
    }

    if (brand.length < 3) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid brand name',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Invalid city name");
        return false;
    }
    if (brand.length > 20) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid brand name',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Invalid city name");
        return false;
    }
    
    if (color.length < 3) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid color name',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Address is too long");
        return false;
    }
    if (color.length > 20) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid color name',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Address is too long");
        return false;
    }    
    if (price < 10) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid Price ',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Role Model name is too long");
        return false;
    }
    if (price > 100000) {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- Invalid Price ',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- Role Model name is too long");
        return false;
    }

    if (img1.value != '') {
        let img_ext1 = img1.value.substring(img1.value.lastIndexOf('.') + 1);
        let result1 = jpgext.includes(img_ext1);

        if (result1 == false) {
            Swal.fire({
                title: 'Error!',
                text: '*Error:- Selected photo is not valid',
                icon: 'error',
                confirmButtonText: '😢'
            })
            // alert("*Error:- Selected files is not valid");
            return false;
        }
        else {
            if (parseFloat(img1.files[0].size / (1024 * 1024)) >= 3) {
                Swal.fire({
                    title: 'Error!',
                    text: '*Error:- File size must be smaller than 3 MB',
                    icon: 'error',
                    confirmButtonText: '😢'
                })
                // alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img1.files[0].size/(1024*1024)) );
                return false;
            }
        }
    } else {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- No image is selected',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- No image is selected");
        return false;
    }

    if (img2.value != '') {
        let img_ext2 = img2.value.substring(img2.value.lastIndexOf('.') + 1);
        let result2 = validExt.includes(img_ext2);

        if (result2 == false) {
            Swal.fire({
                title: 'Error!',
                text: '*Error:- Selected puc files is not valid',
                icon: 'error',
                confirmButtonText: '😢'
            })
            // alert("*Error:- Selected files is not valid");
            return false;
        }
        else {
            if (parseFloat(img2.files[0].size / (1024 * 1024)) >= 3) {
                Swal.fire({
                    title: 'Error!',
                    text: '*Error:- File size must be smaller than 3 MB',
                    icon: 'error',
                    confirmButtonText: '😢'
                })
                // alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img2.files[0].size/(1024*1024)) );
                return false;
            }
        }
    } else {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- No image is selected',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- No image is selected");
        return false;
    }

    if (img3.value != '') {
        let img_ext2 = img2.value.substring(img2.value.lastIndexOf('.') + 1);
        let result2 = validExt.includes(img_ext2);

        if (result2 == false) {
            Swal.fire({
                title: 'Error!',
                text: '*Error:- Selected rcbook files is not valid',
                icon: 'error',
                confirmButtonText: '😢'
            })
            // alert("*Error:- Selected files is not valid");
            return false;
        }
        else {
            if (parseFloat(img2.files[0].size / (1024 * 1024)) >= 3) {
                Swal.fire({
                    title: 'Error!',
                    text: '*Error:- File size must be smaller than 3 MB',
                    icon: 'error',
                    confirmButtonText: '😢'
                })
                // alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img2.files[0].size/(1024*1024)) );
                return false;
            }
        }
    } else {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- No image is selected',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- No image is selected");
        return false;
    }

    if (img4.value != '') {
        let img_ext2 = img2.value.substring(img2.value.lastIndexOf('.') + 1);
        let result2 = validExt.includes(img_ext2);

        if (result2 == false) {
            Swal.fire({
                title: 'Error!',
                text: '*Error:- Selected insurance files is not valid',
                icon: 'error',
                confirmButtonText: '😢'
            })
            // alert("*Error:- Selected files is not valid");
            return false;
        }
        else {
            if (parseFloat(img2.files[0].size / (1024 * 1024)) >= 3) {
                Swal.fire({
                    title: 'Error!',
                    text: '*Error:- File size must be smaller than 3 MB',
                    icon: 'error',
                    confirmButtonText: '😢'
                })
                // alert("*Error:- File size must be smaller than 3 MB. Your current file size is "+ parseFloat(img2.files[0].size/(1024*1024)) );
                return false;
            }
        }
    } else {
        Swal.fire({
            title: 'Error!',
            text: '*Error:- No image is selected',
            icon: 'error',
            confirmButtonText: '😢'
        })
        // alert("*Error:- No image is selected");
        return false;
    }
}