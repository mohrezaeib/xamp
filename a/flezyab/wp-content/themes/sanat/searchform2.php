<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <div class="form-group">
        <input type="search" name="s" value="" placeholder="<?php esc_attr_e('Search', 'sanat');?>" required>
        <button type="submit"><span class="icon fa fa-search"></span></button>
    </div>
</form>