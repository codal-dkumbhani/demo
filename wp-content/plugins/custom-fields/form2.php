<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add or Remove Input Fields Dynamically using jQuery</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container"style="max-width: 700px;">
        <div class="text-center" style="margin: 20px 0px 20px 0px;">
            <span class="text-secondary">Add or Remove Input Fields Dynamically using jQuery</span>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                        <div class="input-group mb-3">
                        <?php  
                                    $img = get_post_meta( 259, 'img',true) ;
                                    $title1 = get_post_meta( 259, 'title1',true) ;
                                    $dis = get_post_meta( 259, 'dis',true) ;
                                    $i=0;
                                    foreach ($title1 as $test ){
                                        $url_to_my_attachment = $img[$i];
                                        $attachment_id = attachment_url_to_postid($url_to_my_attachment);
                                    ?>
                                        <input type="text" class="img" id="img" name="img[]" value="<?php echo $img[$i]; ?>" placeholder="http://">
                                        <button class="set_custom_logo button" style="vertical-align: middle;">Select Image</button>
                                        <input type="text" id = "title1" name="title1[]" class="form-control m-input" value="<?php echo $test; ?>" placeholder="Enter title" autocomplete="off">
                                        <input type="text" id = "dis" name="dis[]" class="form-control m-input" value="<?php echo $dis[$i]; ?>" placeholder="Enter Discripation" autocomplete="off">
                                        <div class="input-group-append">                
                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button><br>
                                        </div>
                                    <?php $i++; } ?>
                        </div>
                    </div>
                    <div id="newRow"></div>
                    <button id="addRow" type="button" class="btn btn-info">Add Row</button>
                </div>
            </div>
    </div>

    <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html += '<input type="text" class="img" id="img" name="img[]" value="" placeholder="http://">'
            html += '<button class="set_custom_logo button" style="vertical-align: middle;">Select Logo</button>'
            html += '<input type="text" id = "title1[]" name="title1[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
            html += '<input type="text" id = "dis[]" name="dis[]" class="form-control m-input" placeholder="Enter Discripation" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button><br>';
            html += '</div>';
            html += '</div>';
            

            $('#newRow').append(html);
        });
            
        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
        });
        
    </script>
</body>
</html>
<?php
    add_action ('admin_enqueue_scripts', function() {
        if(is_admin())
        wp_enqueue_media(); 
    });
?>

<script>
//“Add Media” button
jQuery(document).ready(function() {
    var $ = jQuery;
    if ($('.set_custom_logo').length > 0) {
        if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {
            $(document).on('click', '.set_custom_logo', function(e) {
                e.preventDefault();
                var button = $(this);
                var id = button.prev();
                wp.media.editor.send.attachment = function(props, attachment) {
                    id.val(attachment.url);
                };
                wp.media.editor.open(button);
                return false;
            });
        }
    }
});
</script>

