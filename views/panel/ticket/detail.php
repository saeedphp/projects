<?php
$active = 'ticket';
require('views/panel/index.php');
$ticketInfo=$data['ticketInfo'];
?>

<div class="box-header">
    <span class="box-title">
        تیکت
        (
        <?= $ticketInfo['title']; ?>
        )
    </span>
</div>

<div class="row">
    <div class="col-md-12">
        <p>
            عنوان تیکت:
            <?= $ticketInfo['title']; ?>
        </p>
        <p>
            اولویت:
            <?= $ticketInfo['priority']; ?>
        </p>
        <p>
            تاریخ:
            <?= $ticketInfo['date']; ?>
        </p>
        <p>
            ساعت:
            <?= $ticketInfo['time']; ?>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <label>
            موضوع تیکت:
        </label>
        <div class="ticket-sub">
            <?= $ticketInfo['subject']; ?>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

</div>
</section>

</div>


<script>
    /*remove white space in textarea tag*/

    $('document').ready(function()
    {
        $('textarea').each(function(){
                $(this).val($(this).val().trim());
            }
        );
    });

    /*remove white space in textarea tag*/
</script>