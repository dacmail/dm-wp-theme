<div class="post-share">
    <a class="share-over" href="#"><i class="icon-ico_compartir"></i></a>
    <div class="share-buttons">
        <a title="Compartir en Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="icon fb" target="_blank"><i class="icon-ico_facebook"></i></a>
        <a title="Compartir en Twitter" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php echo urlencode(get_the_title()); ?>&via=Madrid" class="icon tw" target="_blank"><i class="icon-ico_twitter"></i></a>
        <a title="Compartir en WhatsApp" href="whatsapp://send?text=<?php echo urlencode(get_the_title() . ' - '); ?><?php urlencode(the_permalink()); ?>" data-action="share/whatsapp/share" class="icon wa" target="_blank"><i class="icon-ico_whatsapp"></i></a>
        <a title="Compartir en Telegram" href="https://telegram.me/share/url?url=<?php urlencode(the_permalink()); ?>" class="icon tg" target="_blank"><i class="fa fa-paper-plane"></i></a>
    </div>
</div>
