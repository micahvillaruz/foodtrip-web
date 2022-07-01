            <!-- Sweet Alerts js -->
            <script src="<?php echo base_url('public/assets') ?>/libs/sweetalert2/sweetalert2.min.js"></script>

            <!-- Sweet alert init js-->
            <script src="<?php echo base_url('public/assets') ?>/js/pages/sweetalerts.init.js"></script>

            <!-- validation init -->
            <script src="<?php echo base_url('public/assets') ?>/js/pages/form-validation.init.js"></script>

            <!-- custom login.js -->
            <script src="<?php echo base_url('public/assets') ?>/js/access/signin.js"></script>
            <!-- password-addon init -->
            <script src="<?php echo base_url('public/assets') ?>/js/pages/password-addon.init.js"></script>

            <!-- prismjs plugin -->
            <script src="<?php echo base_url('public/assets') ?>/libs/prismjs/prism.js"></script>

            <!--Swiper slider js-->
            <script src="<?php echo base_url('public/assets') ?>/libs/swiper/swiper-bundle.min.js"></script>

            <!-- swiper.init js -->
            <script src="<?php echo base_url('public/assets') ?>/js/pages/swiper.init.js"></script>

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