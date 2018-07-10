<div class="details">
<h1>Мои ссылки</h1>
<button class="button" onclick="addLink();">Добавить новую ссылку</button>

<div class="linkslist" id="linkslist">
  <div class="onelink" style="display: none;">
  <div class="sortbox"></div>
  <div class="info">
    <input type="text" name="lsname[]" placeholder="Название" />
    <input type="text" name="lslink[]" placeholder="Путь" />
    <input type="hidden" name="lspriority[]" />
    <div class="buttonbar">
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/active.png" /></a>
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/color.png" /></a>
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/stat.png" /></a>
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/shedule.png" /></a>
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/admins.png" /></a>
      <a href="/dellink" title=""><img src="<?=$__basepath?>style/delete.png" /></a>
    </div>
  </div>
  <div class="addbox">
    <h3>Удаление ссылки</h3>
    <div class="info">
      <p>
        Вы уверены, что хотите удалить эту ссылку?
      </p>
      <button class="button">Да</button>
      <button class="button">Нет</button>
    </div>
  </div>
</div>
</div>

<script>
  function addLink() {
    var obj = document.getElementById('linkslist').children[0];
    var cln = obj.cloneNode(true);

    if(obj.nextElementSibling!==null) {
      obj.parentNode.insertBefore(cln, obj.nextSibling);
    } else {
      obj.parentNode.appendChild(cln);
    }
    cln.style.display = 'block';
  }

  $("#linkslist").sortable({
    handle: ".sortbox"
  });
</script>
