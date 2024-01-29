<script>
    CKEDITOR.replace('editor1', {
      allowedContent: true
    });
    CKEDITOR.dtd.$removeEmpty['i'] = false
    </script>


<!-- For fixing (remove automatically icons from editor). -->

<div class="col-lg-12">
<div class="form-group">
    <label class="form-label" for="content">Content</label>
    <div class="form-control-wrap">
        <textarea class="form-control form-control-sm" name="content" id="editor1"><?php echo htmlspecialchars($row['content']); ?></textarea>
    </div>
</div>
</div>

<?php echo htmlspecialchars($row['content']); ?>

<!-- For fixing (form tag not working in text editor). -->



<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>