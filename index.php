
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

    <title>نعم الجود</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Material Design Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <!-- Animations -->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <!-- Other Plugins -->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">


    <style>

    /* ==========================================
       General
    ========================================== */

    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        min-height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        overflow-x: hidden;
    }


    /* ==========================================
       Main container
    ========================================== */

    .container-login100 {
        width: 100%;
        min-height: 100vh;
        padding: 30px 15px;
    }


    .wrap-login100 {
        width: 100%;
        max-width: 500px;
        margin: 0 auto;
        padding: 35px 30px;
    }


    /* ==========================================
       Logo
    ========================================== */

    .login100-form-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    .login100-form-logo img {
        width: 200px;
        max-width: 80%;
        height: auto;
        object-fit: contain;
    }


    /* ==========================================
       Form
    ========================================== */

    #formContainer {
        width: 100%;
    }

    #imageForm {
        width: 100%;
    }


    /* ==========================================
       Title
    ========================================== */

    .login100-form-title {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 26px;
        line-height: 1.4;
    }


    /* ==========================================
       Input
    ========================================== */

    .wrap-input100 {
        width: 100%;
    }

    .input100 {
        width: 100%;
        font-size: 16px;
    }


    /* ==========================================
       File input
    ========================================== */

    .container-login100-form-btn2 {
        width: 100%;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .container-login100-form-btn2 input[type="file"] {
        width: 100%;
        max-width: 100%;
        font-size: 14px;
    }


    /* ==========================================
       Submit button
    ========================================== */

    .container-login100-form-btn {
        width: 100%;
    }

    .login100-form-btn {
        width: 100%;
        min-height: 48px;
        font-size: 16px;
    }


    /* ==========================================
       Result
    ========================================== */

    #resultContainer {
        display: none;
        width: 100%;
        text-align: center;
        margin-top: 25px;
    }


    #resultImage {
        display: block;
        width: 100%;
        max-width: 850px;
        height: auto;
        margin: 0 auto;
        border-radius: 8px;
    }


    /* ==========================================
       Result buttons
    ========================================== */

    .result-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
        flex-wrap: wrap;
        width: 100%;
    }


    .result-button {
        border: none;
        cursor: pointer;
        padding: 0 20px;
        min-width: 150px;
        min-height: 48px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 15px;
    }


    /* ==========================================
       Loading
    ========================================== */

    #loading {
        display: none;
        width: 100%;
        text-align: center;
        margin-top: 20px;
        font-size: 16px;
    }


    /* ==========================================
       Error
    ========================================== */

    #errorMessage {
        display: none;
        width: 100%;
        text-align: center;
        color: #fcf8f8;
        margin-top: 15px;
        font-size: 14px;
        line-height: 1.6;
    }


    /* ==========================================
       Mobile
    ========================================== */

    @media (max-width: 576px) {

        .container-login100 {
            min-height: 100vh;
            padding: 15px 10px;
            align-items: flex-start;
        }


        .wrap-login100 {
            width: 100%;
            max-width: 100%;
            margin-top: 10px;
            padding: 25px 18px;
        }


        .login100-form-logo img {
            width: 160px;
            max-width: 75%;
            height: auto;
        }


        .login100-form-title {
            font-size: 22px;
            padding-top: 20px !important;
            padding-bottom: 25px !important;
        }


        .wrap-input100 {
            height: 50px;
            margin-bottom: 15px;
        }


        .input100 {
            font-size: 16px;
        }


        .container-login100-form-btn2 {
            margin-top: 10px;
            margin-bottom: 15px;
        }


        .container-login100-form-btn2 input[type="file"] {
            font-size: 13px;
        }


        .login100-form-btn {
            width: 100%;
            min-height: 50px;
            font-size: 16px;
        }


        #resultImage {
            width: 100%;
            max-width: 100%;
            border-radius: 6px;
        }


        .result-buttons {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }


        .result-button {
            width: 100%;
            min-width: 0;
            min-height: 50px;
        }


        #loading {
            font-size: 15px;
        }

    }


    /* ==========================================
       Very small phones
    ========================================== */

    @media (max-width: 360px) {

        .container-login100 {
            padding: 10px 5px;
        }


        .wrap-login100 {
            padding: 20px 12px;
        }


        .login100-form-logo img {
            width: 140px;
        }


        .login100-form-title {
            font-size: 20px;
        }

    }


    /* ==========================================
   Gender Selection
========================================== */

.gender-container {
    width: 100%;
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.gender-option {
    flex: 1;
    position: relative;
    cursor: pointer;
    margin: 0;
}

.gender-option input {
    position: absolute;
    opacity: 0;
}

.gender-option span {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 100%;
    height: 50px;

    border: 2px solid rgba(255,255,255,0.3);
    border-radius: 5px;

    color: white;
    font-size: 16px;

    transition: all 0.2s ease;
}


/* Selected option */

.gender-option input:checked + span {
    border-color: white;
    background: rgba(255,255,255,0.15);
}


/* Mobile */

@media (max-width: 576px) {

    .gender-container {
        gap: 10px;
        margin-bottom: 15px;
    }

    .gender-option span {
        height: 50px;
        font-size: 16px;
    }

}

</style>

</head>


<body>


<div class="limiter">

    <div
        class="container-login100"
        style="background-image: url('images/logo.PNG');"
    >

        <div class="wrap-login100">


            <!-- ================================================= -->
            <!-- FORM -->
            <!-- ================================================= -->

            <div id="formContainer">

                <form
                    id="imageForm"
                    class="login100-form validate-form"
                    enctype="multipart/form-data"
                >

                    <!-- Logo -->

                    <div style="width: 100%;">

                        <span class="login100-form-logo">

                            <img
                                src="images/logo.PNG"
                                width="200"
                                height="80"
                                alt="نعم الجود"
                            >

                        </span>

                    </div>


                    <!-- Title -->

                    <span class="login100-form-title p-b-34 p-t-27">

                        أنتم نعم الجود

                    </span>


                    <label class="gender-option">
                         <input
            type="radio"
            name="gender"
            value="male"
            id="male"
            
        >
        <span>ذكر</span>
    </label>

    <label class="gender-option">
        <input
            type="radio"
            name="gender"
            value="female"
            id="female"
        >
        <span>أنثى</span>
    </label>

</div>


                    <!-- Name -->

                    <div
                        class="wrap-input100 validate-input"
                        data-validate="Enter username"
                    >

                        <input
                            class="input100"
                            type="text"
                            name="esFNameAr"
                            id="esFNameAr"
                            placeholder="أدخل اسمك الثلاثي"
                            autocomplete="name"
                            required
                        >

                        <span
                            class="focus-input100"
                            data-placeholder="&#xf207;"
                        ></span>

                    </div>


                    <!-- Image -->

<div
    class="container-login100-form-btn2"
    id="imageUploadContainer"
    style="display: none;"
>

    <input
        type="file"
        id="imag"
        name="imag"
        accept="image/jpeg,image/png,image/gif"
    >

</div>


                    <!-- Submit -->

                    <div class="container-login100-form-btn">

                        <button
                            type="submit"
                            id="submitBtn"
                            class="login100-form-btn"
                        >

                            متابعة

                        </button>

                    </div>

                </form>

            </div>


            <!-- ================================================= -->
            <!-- LOADING -->
            <!-- ================================================= -->

            <div id="loading">

                جاري تجهيز الصورة...

            </div>


            <!-- ================================================= -->
            <!-- ERROR -->
            <!-- ================================================= -->

            <div id="errorMessage"></div>


            <!-- ================================================= -->
            <!-- RESULT -->
            <!-- ================================================= -->

            <div id="resultContainer">


                <!-- Generated Image -->

                <img
                    id="resultImage"
                    src=""
                    alt="الصورة الناتجة"
                >


                <!-- Buttons -->

                <div class="result-buttons">


                    <!-- Download -->

                    <a
                        id="downloadBtn"
                        class="login100-form-btn result-button"
                        href="#"
                        download="naem-aljoud.jpg"
                    >

                        تحميل الصورة

                    </a>


                    <!-- Share -->

                    <button
                        type="button"
                        id="shareBtn"
                        class="login100-form-btn result-button"
                    >

                        مشاركة الصورة

                    </button>


                </div>


                <!-- Back -->

                <div
                    class="result-buttons"
                    style="margin-top: 10px;"
                >

                    <button
                        type="button"
                        id="backBtn"
                        class="login100-form-btn result-button"
                    >

                        إنشاء صورة أخرى

                    </button>

                </div>


            </div>


        </div>

    </div>

</div>



<!-- ========================================================= -->
<!-- Scripts -->
<!-- ========================================================= -->

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="vendor/animsition/js/animsition.min.js"></script>

<script src="vendor/bootstrap/js/popper.js"></script>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="vendor/select2/select2.min.js"></script>

<script src="vendor/daterangepicker/moment.min.js"></script>

<script src="vendor/daterangepicker/daterangepicker.js"></script>

<script src="vendor/countdowntime/countdowntime.js"></script>

<script src="js/main.js"></script>



<script>


// =========================================================
// Gender Selection
// =========================================================

const maleRadio = document.getElementById('male');
const femaleRadio = document.getElementById('female');

const imageUploadContainer =
    document.getElementById('imageUploadContainer');

const imageInput =
    document.getElementById('imag');


// Male selected
maleRadio.addEventListener('change', function () {

    if (this.checked) {

        imageUploadContainer.style.display = 'block';

        imageInput.required = true;

    }

});


// Female selected
femaleRadio.addEventListener('change', function () {

    if (this.checked) {

        imageUploadContainer.style.display = 'none';

        imageInput.required = false;

        // Remove previously selected image
        imageInput.value = '';

    }

});

document
    .getElementById('imageForm')
    .addEventListener('submit', async function (event) {

        event.preventDefault();


        const form = this;
        
        const submitBtn =
            document.getElementById('submitBtn');

        const loading =
            document.getElementById('loading');

        const resultContainer =
            document.getElementById('resultContainer');

        const resultImage =
            document.getElementById('resultImage');

        const downloadBtn =
            document.getElementById('downloadBtn');

        const shareBtn =
            document.getElementById('shareBtn');

        const errorMessage =
            document.getElementById('errorMessage');

        const nameInput =
            document.getElementById('esFNameAr');

        const imageInput =
            document.getElementById('imag');


        // ==========================================
        // Validate name
        // ==========================================

        if (nameInput.value.trim() === '') {

            errorMessage.textContent =
                'الرجاء إدخال اسمك الثلاثي.';

            errorMessage.style.display = 'block';

            return;
        }


        // ==========================================
        // Validate image
        // ==========================================

        const selectedGender =
    document.querySelector('input[name="gender"]:checked');


// Validate gender
if (!selectedGender) {

    errorMessage.textContent =
        'الرجاء اختيار ذكر أو أنثى.';

    errorMessage.style.display = 'block';

    return;
}


// Validate image only for male
if (
    selectedGender.value === 'male' &&
    imageInput.files.length === 0
) {

    errorMessage.textContent =
        'الرجاء اختيار صورة.';

    errorMessage.style.display = 'block';

    return;
}

        // ==========================================
        // Reset messages
        // ==========================================

        errorMessage.style.display = 'none';

        resultContainer.style.display = 'none';


        // ==========================================
        // Create FormData
        // ==========================================

        const formData = new FormData(form);


        // ==========================================
        // Loading
        // ==========================================

        submitBtn.disabled = true;

        submitBtn.textContent =
            'جاري التجهيز...';

        loading.style.display = 'block';


        try {


            // ======================================
            // Send request
            // ======================================

            const response = await fetch(
                'img.php',
                {
                    method: 'POST',
                    body: formData
                }
            );


            if (!response.ok) {

                throw new Error(
                    'Server error'
                );

            }


            // ======================================
            // Get image
            // ======================================

            const blob =
                await response.blob();


            // ======================================
            // Check response
            // ======================================

            if (!blob.type.startsWith('image/')) {

                throw new Error(
                    'Invalid image response'
                );

            }


            // ======================================
            // Create image URL
            // ======================================

            const imageUrl =
                URL.createObjectURL(blob);


            // ======================================
            // Display image
            // ======================================

            resultImage.src = imageUrl;

            downloadBtn.href = imageUrl;


            // ======================================
            // Show result
            // ======================================

            resultContainer.style.display =
                'block';


            // ======================================
            // Scroll to result
            // ======================================

            resultContainer.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });


            // ======================================
            // Share
            // ======================================

            shareBtn.onclick = async function () {

                try {

                    const file = new File(
                        [blob],
                        'naem-aljoud.jpg',
                        {
                            type: 'image/jpeg'
                        }
                    );


                    if (
                        navigator.share &&
                        navigator.canShare &&
                        navigator.canShare({
                            files: [file]
                        })
                    ) {

                        await navigator.share({

                            files: [file],

                            title: 'نعم الجود'

                        });

                    } else {

                        alert(
                            'المشاركة المباشرة غير مدعومة في هذا المتصفح. يمكنك تحميل الصورة ومشاركتها.'
                        );

                    }

                } catch (error) {

                    if (error.name !== 'AbortError') {

                        console.error(error);

                    }

                }

            };


        } catch (error) {

            console.error(error);

            errorMessage.textContent =
                'حدث خطأ أثناء تجهيز الصورة. حاول مرة أخرى.';

            errorMessage.style.display =
                'block';


        } finally {

            submitBtn.disabled = false;

            submitBtn.textContent =
                'متابعة';

            loading.style.display =
                'none';

        }

    });



// =========================================================
// Create another image
// =========================================================

document
    .getElementById('backBtn')
    .addEventListener('click', function () {

        document
            .getElementById('resultContainer')
            .style.display = 'none';


        document
            .getElementById('errorMessage')
            .style.display = 'none';


        document
            .getElementById('imageForm')
            .reset();


        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    });

</script>


</body>

</html>
