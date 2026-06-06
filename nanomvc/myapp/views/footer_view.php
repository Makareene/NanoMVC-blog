      <?php if(isset($back_link) && isset($back_name)):?>
      <p class="back"><a href="<?=$back_link?>">Back to <?=$back_name?></a></p>
      <?php endif?>
    </main>

    <footer>
    &copy; <?=(date('Y') != 2025 ? '2025 - ' . date('Y') : date('Y'))?> Nipaa. Built with &lt;3 and <a href="http://nanomvc.nipaa.fyi/" rel="nofollow" target="_blank">NanoMVC</a>.
    </footer>
    <script>
    (function() {
      const toggle = document.getElementById('nav-toggle');
      const nav = document.querySelector('nav');

      if (!toggle || !nav) return; // exit quietly if missing

      toggle.addEventListener('click', () => {
        if (window.matchMedia('(max-width: 600px)').matches) {
          nav.classList.toggle('open');
          toggle.setAttribute('aria-expanded', nav.classList.contains('open'));
        }
      });
    })();
    </script>
  </body>
</html>
