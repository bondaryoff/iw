 <section class="gift">
   <div class="container">
     <div class="gift__inner">
       <div class="gift__head">
         <h2 class="gift__title"><?= get_field('10_title') ?></h2>
         <div class="gift__text">
           <p><?= get_field('10_txt_c') ?></p>
         </div>
         <div class="gift__actions" data-da=".gift__inner,1023.98,last">
           <div class="gift__heart">
             <a href="" class="btn-lg btn-lg--accent">Больше подарков</a>
           </div>
         </div>
       </div>
       <div class="gift__body">
         <?php foreach (get_field('10_gifts') as $key => $gift): ?>
           <div class="gift-item">
             <div class="gift-item__img">
               <picture>
                 <source srcset="<?= get_the_post_thumbnail_url($gift) ?>" type="image/webp"><img src="<?= get_the_post_thumbnail_url($gift) ?>" alt="gift" />
               </picture>
             </div>
             <div class="gift-item__body">
              <?php if($key == 0){ ?>
               <a class="download-btn" href="#" data-flodesk-form="670c28df03ac5b9502344f18">
                 <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M22.1379 13.1187V22.7571H2.86123V13.1187H0.107422V22.7571C0.107422 24.2717 1.34664 25.5109 2.86123 25.5109H22.1379C23.6525 25.5109 24.8917 24.2717 24.8917 22.7571V13.1187H22.1379ZM13.8765 14.0412L17.4427 10.4888L19.3841 12.4303L12.4996 19.3148L5.61505 12.4303L7.55649 10.4888L11.1227 14.0412V0.726562H13.8765V14.0412Z" fill="#A96A7D" />
                 </svg>
               </a>
               <?php } elseif($key == 1){ ?>
                <a class="download-btn" href="#" data-flodesk-form="670c29bc6f4c18818226a7ca">
                 <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M22.1379 13.1187V22.7571H2.86123V13.1187H0.107422V22.7571C0.107422 24.2717 1.34664 25.5109 2.86123 25.5109H22.1379C23.6525 25.5109 24.8917 24.2717 24.8917 22.7571V13.1187H22.1379ZM13.8765 14.0412L17.4427 10.4888L19.3841 12.4303L12.4996 19.3148L5.61505 12.4303L7.55649 10.4888L11.1227 14.0412V0.726562H13.8765V14.0412Z" fill="#A96A7D" />
                 </svg>
               </a>
               <?php } else { ?>
                <a class="download-btn" href="#" data-flodesk-form="670c29d66f4c18818226a7cb">
                 <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M22.1379 13.1187V22.7571H2.86123V13.1187H0.107422V22.7571C0.107422 24.2717 1.34664 25.5109 2.86123 25.5109H22.1379C23.6525 25.5109 24.8917 24.2717 24.8917 22.7571V13.1187H22.1379ZM13.8765 14.0412L17.4427 10.4888L19.3841 12.4303L12.4996 19.3148L5.61505 12.4303L7.55649 10.4888L11.1227 14.0412V0.726562H13.8765V14.0412Z" fill="#A96A7D" />
                 </svg>
               </a>
               <?php } ?>


               <div class="gift-item__name"><?= get_the_title($gift) ?></div>
             </div>
           </div>
         <?php endforeach; ?>
       </div>
     </div>
   </div>
 </section>
 <!-- <div id="modal-treker"> -->
 <!-- Для трекера 👇 -->
 <!-- <script>
     (function(w, d, t, h, s, n) {
       w.FlodeskObject = n;
       var fn = function() {
         (w[n].q = w[n].q || []).push(arguments);
       };
       w[n] = w[n] || fn;
       var f = d.getElementsByTagName(t)[0];
       var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
       var sm = d.createElement(t);
       sm.async = true;
       sm.type = 'module';
       sm.src = h + s + '.mjs' + v;
       f.parentNode.insertBefore(sm, f);
       var sn = d.createElement(t);
       sn.async = true;
       sn.noModule = true;
       sn.src = h + s + '.js' + v;
       f.parentNode.insertBefore(sn, f);
     })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
   </script>
   <script>
     window.fd('form', {
       formId: '670c28df03ac5b9502344f18'
     });
   </script> -->
 <!-- </div> -->
 <!-- Подписка на рассылку: -->
 <!-- <div style="display:none"> -->
 <!-- <div id="modal-subscribe">
     <script>
       (function(w, d, t, h, s, n) {
         w.FlodeskObject = n;
         var fn = function() {
           (w[n].q = w[n].q || []).push(arguments);
         };
         w[n] = w[n] || fn;
         var f = d.getElementsByTagName(t)[0];
         var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
         var sm = d.createElement(t);
         sm.async = true;
         sm.type = 'module';
         sm.src = h + s + '.mjs' + v;
         f.parentNode.insertBefore(sm, f);
         var sn = d.createElement(t);
         sn.async = true;
         sn.noModule = true;
         sn.src = h + s + '.js' + v;
         f.parentNode.insertBefore(sn, f);
       })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
     </script>
     <div id="fd-form-66b7bd8269af9968003206c9"></div>
     <script>
       window.fd('form', {
         formId: '66b7bd8269af9968003206c9',
         containerEl: '#fd-form-66b7bd8269af9968003206c9'
       });
     </script>
   </div> -->



 <div id="modal-wallpaper">
   <!-- Для обоев 👇 -->
   <!-- <script>
     (function(w, d, t, h, s, n) {
       w.FlodeskObject = n;
       var fn = function() {
         (w[n].q = w[n].q || []).push(arguments);
       };
       w[n] = w[n] || fn;
       var f = d.getElementsByTagName(t)[0];
       var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
       var sm = d.createElement(t);
       sm.async = true;
       sm.type = 'module';
       sm.src = h + s + '.mjs' + v;
       f.parentNode.insertBefore(sm, f);
       var sn = d.createElement(t);
       sn.async = true;
       sn.noModule = true;
       sn.src = h + s + '.js' + v;
       f.parentNode.insertBefore(sn, f);
     })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
   </script>
   <script>
     window.fd('form', {
       formId: '670c29bc6f4c18818226a7ca'
     });
   </script> -->
 </div>

 <div id="modal-poster">
   <!-- Для постера👇 -->
   <!-- <script>
     (function(w, d, t, h, s, n) {
       w.FlodeskObject = n;
       var fn = function() {
         (w[n].q = w[n].q || []).push(arguments);
       };
       w[n] = w[n] || fn;
       var f = d.getElementsByTagName(t)[0];
       var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
       var sm = d.createElement(t);
       sm.async = true;
       sm.type = 'module';
       sm.src = h + s + '.mjs' + v;
       f.parentNode.insertBefore(sm, f);
       var sn = d.createElement(t);
       sn.async = true;
       sn.noModule = true;
       sn.src = h + s + '.js' + v;
       f.parentNode.insertBefore(sn, f);
     })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
   </script>
   <script>
     window.fd('form', {
       formId: '670c29d66f4c18818226a7cb'
     });
   </script> -->
 </div>

 <div id="modal-free-cource">
   <!-- Для бесплатного курса 👇 -->
   <!-- <script>
     (function(w, d, t, h, s, n) {
       w.FlodeskObject = n;
       var fn = function() {
         (w[n].q = w[n].q || []).push(arguments);
       };
       w[n] = w[n] || fn;
       var f = d.getElementsByTagName(t)[0];
       var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
       var sm = d.createElement(t);
       sm.async = true;
       sm.type = 'module';
       sm.src = h + s + '.mjs' + v;
       f.parentNode.insertBefore(sm, f);
       var sn = d.createElement(t);
       sn.async = true;
       sn.noModule = true;
       sn.src = h + s + '.js' + v;
       f.parentNode.insertBefore(sn, f);
     })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');
   </script>
   <script>
     window.fd('form', {
       formId: '670c29f022ff702e70c4421e'
     });
   </script> -->
 </div>
 <!-- </div> -->


 <!-- Прихована форма для трекера -->

 <!-- <div id="modal-treker1" style="display:none; max-width:500px;width:100%;height:500px">
   <div id="fd-form-670c28df03ac5b9502344f18"></div>
 </div> -->

 <!-- Прихована форма для обоїв -->
 <!-- <div id="modal-treker" style="display:none1; max-width:500px;width:100%;height:500px">
   <div id="fd-form-670c29bc6f4c18818226a7ca"></div>
 </div> -->

 <!-- І так далі для інших форм -->

 <!-- Ініціалізація Flodesk (один раз!) -->
 <script>
   //  (function(w, d, t, h, s, n) {
   //    w.FlodeskObject = n;
   //    var fn = function() {
   //      (w[n].q = w[n].q || []).push(arguments);
   //    };
   //    w[n] = w[n] || fn;
   //    var f = d.getElementsByTagName(t)[0];
   //    var v = '?v=' + Math.floor(new Date().getTime() / (120 * 1000)) * 60;
   //    var sm = d.createElement(t);
   //    sm.async = true;
   //    sm.type = 'module';
   //    sm.src = h + s + '.mjs' + v;
   //    f.parentNode.insertBefore(sm, f);
   //    var sn = d.createElement(t);
   //    sn.async = true;
   //    sn.noModule = true;
   //    sn.src = h + s + '.js' + v;
   //    f.parentNode.insertBefore(sn, f);
   //  })(window, document, 'script', 'https://assets.flodesk.com', '/universal', 'fd');

   // Ініціалізація форм
   //  window.fd('form', {
   //    formId: '670c28df03ac5b9502344f18',
   //    containerEl: '#fd-form-670c28df03ac5b9502344f18'
   //  }); // Ініціалізація форм

   //  window.fd('form', {
   //    formId: '670c29bc6f4c18818226a7ca',
   //    containerEl: '#fd-form-670c29bc6f4c18818226a7ca'
   //  });
 </script>