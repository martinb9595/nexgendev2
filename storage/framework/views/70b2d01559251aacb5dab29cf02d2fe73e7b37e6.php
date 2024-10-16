<section id="banner-wrapper">

    <div class="container">

        <!-- SECTION TITLE -->
        <div class="mb-8 text-center">
            <h6><?php echo e(__($frontend_sections->clients_title)); ?> <span style="font-weight: 800; color: #0F2358"><?php echo e(__($frontend_sections->clients_title_dark)); ?></span></h6>
        </div> <!-- END SECTION TITLE -->

        <div class="row" id="partners">

            <?php if(isset($client_exists) && $client_exists): ?>                          

                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="partner" data-aos="flip-down" data-aos-delay="<?php echo e((200 * $client->id) / 2); ?>" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="<?php echo e(URL::asset($client->url)); ?>" alt="partner">
                            </div>
                        </div>	
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php else: ?>
                <p><?php echo e(__('No clients found.')); ?></p>
            <?php endif; ?>
                    
        </div>
    </div>

</section><?php /**PATH /home/viralhub/public_html/nexgen.to/resources/views/default/frontend/clients/section.blade.php ENDPATH**/ ?>