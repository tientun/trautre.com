<?php echo $this->Html->css('/drag_drop_upload/css/upload_style.css') ?>
<link href='http://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet' type='text/css'>

<div class="row-fluid">
    <center><h1 class="title">Multiple Drag and Drop File Upload</h1></center>
    <div class="upload-status"></div>
    <div id="dragAndDropFiles" class="uploadArea">
        <h1>Drop Images Here</h1>
    </div>
    <form id="demoFiler" enctype="multipart/form-data">
        <input type="text" name="data[Image][category_id]" value="29" />
        <input type="file" name="data[Image][img_data]" id="multiUpload" multiple />
        <input type="submit"  value="Upload" class="buttonUpload" />
    </form>
    <div class="progressBar">
        <div class="status"></div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<?php echo $this->Html->script('/drag_drop_upload/js/multiupload') ?>
<script type="text/javascript">
    var config = {
        baseUrl: '<?php echo $this->params->webroot ?>drag_drop_upload/',
        support : "image/jpg,image/png,image/bmp,image/jpeg,image/gif",		// Valid file formats
        form: "demoFiler",					// Form ID
        dragArea: "dragAndDropFiles",		// Upload Area ID
        uploadUrl: "<?php echo $this->params->webroot ?>images/add" // Server side upload url
    }
    $(document).ready(function(){
        initMultiUploader(config);
    });
</script>