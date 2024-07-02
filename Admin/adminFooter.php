
    </div>
  </div>
  <script src="../js/custom.js"></script>
  <!-- Footer -->
    <p  class="bg-dark text-light text-center py-3 mt-5">&copy; 2024 BBC News. All rights reserved.</p>
   
    <script>
        $(document).ready(function() {
            $(".animsition").animsition({
                inClass: 'flip-in-y',
                outClass: 'fade-out-right',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                loading: true,
                loadingParentElement: 'body', // animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [ 'animation-duration', '-webkit-animation-duration'],
                overlay : false,
                overlayClass : 'animsition-overlay-slide',
                overlayParentElement : 'body',
                transition: function(url){ window.location.href = url; }
            });
        });
    </script>
    </body>
    </html>
    