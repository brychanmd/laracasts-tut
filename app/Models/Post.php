<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post {
	
	public static function find( $slug ) {

		$path = __DIR__ . "/../resources/posts/{$slug}.html";
		$path = resource_path( "posts/{$slug}.html" );

		if ( ! file_exists($path) ) {
			
			throw new ModelNotFoundException();

		}

		$post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));

		return $post;

	}

}