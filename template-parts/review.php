 <div class="review-slider__box">
   <div class="review-slider__wrapper">
     <h2 class="review-slider__title"><?= get_field('single_3_title') ?></h2>

     <div class="review-slider__slider">
       <div class="review-swiper swiper">
         <div class="swiper-wrapper">
           <?php foreach (get_field('single_3_feedbacks') as $kay => $feedback): ?>

             <div class="swiper-slide">
               <div class="review-slide">
                 <div class="review-slide__top">
                   <div class="review-slide__avatar">
                     <picture>
                       <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp"><img
                         src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="avatar" />
                     </picture>
                   </div>
                   <div class="review-slide__head">
                     <div class="review-slide__col">
                       <h3 class="review-slide__title"><?= get_field('summary', $feedback) ?></h3>
                       <div class="review-slide__line">
                         <div class="review-slide__name"><?= $feedback->post_title ?></div>
                       </div>
                     </div>
                     <div class="review-slide__date"><?= get_field('date', $feedback) ?></div>
                   </div>
                 </div>
                 <div class="review-slide__body">
                   <div class="review-slide__text">

                     <p>
                       <?= mb_substr($feedback->post_content, 0, 200, 'UTF-8') . (mb_strlen($feedback->post_content, 'UTF-8') > 200 ? '...' : '') ?>
                     </p>

                   </div>
                 </div>


                 <!-- <div id="review-modal<?= $kay; ?>"  class="review-popup"  style="display:none;max-width:600px;">
                   <p><?= $feedback->post_content ?></p>
                 </div> -->
                         <div id="review-modal<?= $kay; ?>"  class="author-popup" style="display:none;">
                            <div class="author-popup__close" data-fancybox-close>
                              <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.75 0.75L0.75 21.75M0.75 0.75L21.75 21.75" stroke="#9F596E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                            </div>
                            <div class="author-popup__head">
                              <div class="author-popup__avatar">
                                <picture>
                                  <source srcset="<?= get_the_post_thumbnail_url($feedback) ?>" type="image/webp">
                                  <img src="<?= get_the_post_thumbnail_url($feedback) ?>" alt="<?= get_the_title($feedback) ?>" />
                                </picture>
                              </div>
                              <div class="author-popup__info">
                                <div class="author-popup__quote"><?= get_field('summary', $feedback) ?></div>
                                <div class="author-popup__name"><?= get_the_title($feedback) ?></div>
                              </div>
                            </div>
                            <div class="author-popup__body">
                              <p><?= $feedback->post_content ?></p>
                            </div>
                          </div>
                 <div class="review-slide__bottom">
                   <button class="btn-lg btn-lg--accent" data-fancybox="" data-src="#review-modal<?= $kay; ?>">
                     Читать полностью
                   </button>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>

         </div>
       </div>
       <div class="review-slider__nav">
         <button type="button" class="review-button-prev slider-button-prev"></button>
         <button type="button" class="review-button-next slider-button-next"></button>
       </div>
     </div>
     <div class="review-pagination slider-pagination" data-da=".review-slider__nav,1023.98,1"></div>



   </div>
 </div>