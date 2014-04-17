<!-- preloader -->
<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/preloader.php' ?>

<a class="sr-only" href="#content">본문으로</a>

<div class="snap-drawers">   
    <div class="snap-drawer snap-drawer-left scrollable" id="left-drawer">
    </div>
    <div class="snap-drawer snap-drawer-right scrollable"  id="right-drawer">
        <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/drawer-menu.php' ?>
    </div>
</div> 

<div class="snap-content" id="content-wrap">

    <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/header.php' ?>

    <!-- data-snap-ignore="true" 를 추가하면 플리킹을 통한 drawer 열기 안되게 함--> 
    <div class="rb-content-position rb-content-position-top scrollable" data-snap-ignore="true">
        <div class="container" id="content">
            <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/page-header.php' ?>
            <?php include __KIMS_CONTENT__ ?>
            <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/page-footer.php' ?>
        </div>
    </div>

    <?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/footer.php' ?>
</div>

<!-- modal -->
<?php include  $g['path_layout'].$d['layout']['dir'].'/_includes/modals.php' ?>

