<div id="pagination">
<?php
if ($current_page > 3) {
    $first_page = 1;
?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $first_page ?>">First</a>
    <?php
}
if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $prev_page ?>"><span>Trở về</span></a>
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
            <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $num ?>"><?= $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?= $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages) {
    $next_page = $current_page + 1;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $next_page ?>"><span>Kế tiếp</span></a>
<?php
}
if ($current_page < $totalPages - 3) {
    $end_page = $totalPages;
    ?>
    <a class="page-item" href="?per_page=<?= $item_per_page ?>&page=<?= $end_page ?>">Last</a>
    <?php
}
?>
</div>
<style>
    #pagination {
        text-align: center;
        padding: 6px;
        margin-top: 20px;
    }
    #pagination .page-item{
        padding: 5px 10px;
        border-radius: 3px;
        color: rgb(8, 8, 8);
        box-shadow: 0 0px 1px 1px rgba(63,106,216,0.2);
        
    }
    #pagination .current-page{
        background: #1949B5;
        color: #FFF;
    }
</style>