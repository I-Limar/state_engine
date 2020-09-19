<main>
	<h1><?=$pageTitle?></h1>
	<form method="post">
		<div class="form-group">
			<label for="msgFormName">cat</label>
			<p><select name="id_cat">
    		<option <?=($fields['id_cat']?: 'selected') ?> disabled>Выберите категорию</option>
			<?foreach ($cats as $cat):?>
			<option <?=($fields['id_cat'] == $cat['id_cat'] ?  'selected':'') ?> value=<?=$cat['id_cat']?>><?=$cat['title']?></option>
			<?endforeach;?>
			</select></p>
		</div>
		<div class="form-group">
			<label for="msgFormName">title</label>
			<input type="text" name="title" class="form-control" id="msgFormName" value="<?=$fields['title']?>">
		</div>
		<div class="form-group">
			<label for="msgFormText">content</label>
			<textarea type="text" name="content" class="form-control" id="msgFormText"><?=$fields['content']?></textarea>
		</div>
		<button class="btn btn-success">Send</button>
		<div class="alert error-list">
		<? foreach($validateErrors as $error): ?>
			<p class="text-danger"><?=$error?></p>
		<? endforeach; ?>
		</div>		
	</form>
</main>