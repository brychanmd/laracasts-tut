<x-layout>
	
	<article>
		
		<h1>
		<?php echo $post->title; ?>
		</h1>

		<p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

		<?php echo $post->body; ?>

	</article>

	<a href="/">Go back</a>

</x-layout>
