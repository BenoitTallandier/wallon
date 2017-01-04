<div class="search-box">
    <form action="<?php echo esc_url(home_url('/')); ?>" class="search-form clearfix" method="get">

        <input type="text" onBlur="if (this.value == '')
                                this.value = this.defaultValue;" onFocus="if (this.value == this.defaultValue)
                                this.value = '';" value="<?php echo esc_html__('Search', 'garajez-lite'); ?>" name="s" class="search-text">
        <button type="submit" class="search-submit">
            <span class="fa fa-search"></span>
        </button>

    </form>
    <!-- search-form -->
</div>
