<?php /* ?>
<div class="dropdown dropdown-format d-inline-block">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		Select Format
	</button>

	<div class="dropdown-menu">
		<?php
		foreach($book_buy_links as $book_format) {
			// Within the loop, store the Format, ISBN, Cover Image, Format specific synopsis & Buy Links repeater
			$book_format_ID = false;
			$book_format_ID = $book_format['book_format'];
			$book_format_name = get_the_title($book_format_ID);
			$book_format_object = get_post($book_format_ID);
			$book_format_postname = $book_format_object->post_name;
			?>
			<a class="dropdown-item dropdown-item-format" id="<?php echo $book_format_postname; ?>" href="#">
				<?php echo $book_format_name; ?>
			</a>

		<?php
		}

		?>
	</div>
</div>
<?php */ ?>

<div class="tf-dropdown tf-dropdown-<?php echo $id; ?>">
	<button type="button" class="tf-button" data-toggle="dropdown">
		Select Format
	</button>
	<div class="tf-dropdown-menu">
		<a class="tf-dropdown-item" id="postname-1" href="#">Format 1</a>
		<a class="tf-dropdown-item" id="postname-2" href="#">Format 2</a>
		<a class="tf-dropdown-item" id="postname-3" href="#">Format 3</a>
	</div>
</div>

<script>
	
</script>