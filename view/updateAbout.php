<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<p class="mb-td">Cập nhật giới thiệu</p>
<div>
    <form action="index.php?controller=about&action=editAction" method="POST">
        <textarea id="editor" cols="80" rows="10" name="noidung"><?=$data['data']['noidung']?></textarea>
        <input type="submit" value="save">
    </form>
</div>
<script>
      tinymce.init({
        selector: '#editor',
      });
    </script>