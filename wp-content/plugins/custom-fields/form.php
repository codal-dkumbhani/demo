<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="title">Main Heading</label>
        <input id="title"
            type="text"
            name="title"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'title', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="crate">CREATE </label>
        <input id="crate"
            type="text"
            name="crate"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'crate', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="home-text">Home starting text </label>
        <input id="home-text"
            type="text"
            name="home-text"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'home-text', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="home-starting-button">Home starting Button  </label>
        <input id="home-starting-button"
            type="text"
            name="home-starting-button"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="home-starting-button-value">Home starting Button Link </label>
        <input id="home-starting-button-value"
            type="url"
            name="home-starting-button-value"
            value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'home-starting-button-value', true ) ); ?>">
    </p>
    
</div>
