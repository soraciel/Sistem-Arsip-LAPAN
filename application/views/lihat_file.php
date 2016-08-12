<!DOCTYPE html>
<?php foreach ($h as $row){?>
<div class="page-header" style="text-align:center;">
<img src="<?php echo base_url();?>uploads/<?php echo $row->ISI; ?>" style="text-align:center;" width="90%">
</div>
<?php } ?>