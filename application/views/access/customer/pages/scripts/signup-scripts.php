    <!-- validation init -->
    <script src="<?php echo base_url('public/assets') ?>/js/pages/form-validation.init.js"></script>

    <!-- Sweet Alerts js -->
    <script src="<?php echo base_url('public/assets') ?>/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="<?php echo base_url('public/assets') ?>/js/pages/sweetalerts.init.js"></script>

    <!--jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--select2 cdn-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="<?php echo base_url('public/assets') ?>/js/pages/select2.init.js"></script>

    <!-- prismjs plugin -->
    <script src="<?php echo base_url('public/assets') ?>/libs/prismjs/prism.js"></script>

    <!--Swiper slider js-->
    <script src="<?php echo base_url('public/assets') ?>/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="<?php echo base_url('public/assets') ?>/js/pages/swiper.init.js"></script>

    <!-- register ajax -->
    <script src="<?php echo base_url('public/assets') ?>/js/ajax/home/register.ajax.js"></script>

    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script>
        function handleCredentialResponse(response) {
            console.log("Encoded JWT ID token: " + response.credential);
        }
        window.onload = function() {
            google.accounts.id.initialize({
                client_id: "555316073356-qn1nfa55lou0bm37ot41g9of0h5j46ho.apps.googleusercontent.com",
                callback: handleCredentialResponse
            });
            google.accounts.id.renderButton(
                document.getElementById("buttonDiv"), {
                    theme: "outline",
                    size: "large"
                } // customization attributes
            );
            google.accounts.id.prompt(); // also display the One Tap dialog
        }
    </script>