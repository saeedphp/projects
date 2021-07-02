<?php
$active = 'ticket';
require('views/panel/index.php');
$ticket=$data['ticket'];
?>


<div class="box-header">
    <span class="box-title">
        تیکت های من
    </span>
</div>

<div class="table-responsive mb-4 mt-4">
    <form id="ticket-form" method="post">
        <table id="html5-extension" class="table table-hover non-hover x" style="width:100%">
            <thead>
            <tr>
                <th class="text-center">ردیف</th>
                <th>شماره تیکت</th>
                <th> عنوان </th>
                <th> موضوع </th>
                <th> وضعیت </th>
                <th> مشاهده </th>
            </tr>
            </thead>
            <tbody>

            <?php
            $i=1;
            foreach ($ticket as $row){ ?>
                <tr>
                    <td class="text-center">
                        <?= $i; ?>
                    </td>
                    <td>
                        <?= $row['id']; ?>
                    </td>
                    <td>
                        <?= $row['title']; ?>
                    </td>
                    <td>
                        <?= mb_strimwidth($row['subject'], 0, 50, "..."); ?>
                    </td>
                    <td>
                        <?= $row['statusTitle']; ?>
                    </td>
                    <td>
                        <a href="ticket/detail/<?= $row['id']; ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                </tr>
                <?php $i++; } ?>

            </tbody>
        </table>
    </form>
</div>


</div>
</div>
</div>
</div>

</div>
</section>

</div>

