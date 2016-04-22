
<?php

class PostTableSeeder extends seeder
{
	public function run()
	{
	
		$post = new Post();
		$post->title = 'First Post';
		$post->body = 'Add me on aol messenger! it is hell fun';
		$post->user_id = User::first()->id;
		$post->save();

		$post1 = new Post();
		$post1->title = 'Got my cellphone back';
		$post1->body = 'Mr.Muller is so unfair!';
		$post1->user_id = User::first()->id;
		$post1->save();
	}
}