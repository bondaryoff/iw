 <section class="find">
   <div class="container">
     <h2 class="find__title"><?= get_field('11_title') ?></h2>
     <div class="find__body">
       <div class="find__block">
         <div class="find-block">
           <h3 class="find-block__title">
             <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="icon" /> Instagram
           </h3>
           <div class="find-block__content">
             <div class="find-block__text">
               <p>
                 <?= get_field('11_insta_description') ?>
               </p>
             </div>
             <a href="<?= get_field('instagram_link', 'options') ?>"
               class="btn-lg btn-lg--accent"><?= get_field('11_insta_btn') ?></a>
           </div>
         </div>
         <?= do_shortcode('[instagram feed="77470"]'); ?>
         <!-- <div class="find-gallery">
           <?php //foreach (get_field('11_insta_gallery') as $photoData): 
            ?>
             <div class="find-gallery__item" data-fancybox="gallery" data-src="<? //= $photoData['url'] 
                                                                                ?>">
               <img src="<? //= $photoData['url'] 
                          ?>" alt="gallery" />
             </div>
           <?php //endforeach; 
            ?>
         </div> -->
       </div>
       <div class="find__grid find__grid--youtube">
         <div class="find-block find-block--text">
           <h3 class="find-block__title">
             <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/youtube.svg" alt="icon" />YouTube
           </h3>
           <div class="find-block__text">
             <?= get_field('11_youtube_description') ?>
           </div>
           <a href="<?= get_field('youtube_link', 'options') ?>" class="btn-lg btn-lg--accent"><?= get_field('11_youtube_btn_text') ?></a>
         </div>
         <!--  -->
         <?php foreach (get_field('11_yt_videos') as $video): ?>
           <div class="find-video">
             <div class="find-video__block">
               <div class="find-video__frame">
                 <img src="<?= get_the_post_thumbnail_url($video) ?>" alt="video" />
               </div>
               <div class="find-video__layout">
                 <button class="find-video__play" data-width="640" data-height="360" data-fancybox
                   data-src="<?= $video->post_content ?>" allowfullscreen="true">
                   <svg width="23" height="28" viewBox="0 0 23 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path
                       d="M22.8795 13.7329C22.8803 14.0915 22.7918 14.4443 22.6224 14.7569C22.4531 15.0695 22.2087 15.3313 21.9131 15.5167L3.59244 27.1548C3.28356 27.3512 2.92979 27.4584 2.56766 27.4654C2.20553 27.4723 1.84818 27.3788 1.53251 27.1944C1.21984 27.0129 0.959385 26.7481 0.777917 26.4274C0.59645 26.1067 0.500522 25.7416 0.5 25.3696V2.09614C0.500522 1.72416 0.59645 1.35904 0.777917 1.03833C0.959385 0.717611 1.21984 0.452875 1.53251 0.271342C1.84818 0.0869456 2.20553 -0.00660141 2.56766 0.000362248C2.92979 0.0073259 3.28356 0.114548 3.59244 0.310954L21.9131 11.949C22.2087 12.1345 22.4531 12.3963 22.6224 12.7088C22.7918 13.0214 22.8803 13.3742 22.8795 13.7329Z"
                       fill="#A96A7D" />
                   </svg>
                 </button>
               </div>
             </div>
             <div class="find-video__text"><?= get_the_title($video) ?></div>
           </div>
         <?php endforeach; ?>

       </div>
       <div class="find__grid find__grid--social">
         <div class="find-block ">
           <h3 class="find-block__title">
             <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/telegram.svg" alt="icon" />Telegram
           </h3>
           <div class="find-block__text">
             <?= get_field('11_tg_description') ?>
           </div>
           <a href="<?= get_field('telegram_link', 'options') ?>"
             class="btn-lg btn-lg--accent"><?= get_field('11_tg_btn_text') ?></a>
         </div>
         <div class="find-block">
           <h3 class="find-block__title">
             <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="icon" />Facebook
           </h3>
           <div class="find-block__text"><?= get_field('11_fb_description') ?></div>
           <a href="<?= get_field('fb_link', 'options') ?>"
             class="btn-lg btn-lg--accent"><?= get_field('11_fb_btn_text') ?></a>
         </div>
       </div>
       <div class="find__grid find__grid--letter">
         <div class="find-block">
           <h3 class="find-block__title">
             <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/email.svg" alt="email" />
             Email-рассылка
           </h3>
           <div class="find-block__text">
             <p><?= get_field('11_email_description') ?></p>
           </div>
           <?= do_shortcode('[contact-form-7 id="6b9c41e" title="--Найти --Email-рассылка"]'); ?>
           <!-- <form action="#" class="find-block__form">
             <div class="field">
               <input type="text" placeholder="Ваш E-mail" />
             </div>
             <button type="submit" class="btn-lg btn-lg--accent">
               Подписаться
             </button>
           </form> -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <div class="find__decor">
   <div class="container">
     <div class="find__decor-text">
       <?= get_field('12_before_footer') ?>
     </div>
   </div>
   <img src="<?= get_field('12_12_before_footer_img')['url'] ?>" alt="bg" />
 </div>