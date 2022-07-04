<?php

namespace MadWeb\Enum\Test;

class EnumCastingTest extends TestCase
{
    /** @test */
    public function save_model_with_invalid_value()
    {
        $this->expectException(\UnexpectedValueException::class);

        Post::create(['title' => 'Some title', 'status' => 'invalid-value']);
    }

    /** @test */
    public function set_invalid_value_with_mass_assignment()
    {
        $this->expectException(\UnexpectedValueException::class);

        new Post(['title' => 'Some title', 'status' => 'invalid-value']);
    }

    /** @test */
    public function set_invalid_value_by_property()
    {
        $post = new Post(['title' => 'Some title']);

        $this->expectException(\UnexpectedValueException::class);

        $post->status = 5;
    }

    /** @test */
    public function get_enum_value_mass_assigned_by_string()
    {
        $post = Post::create(['title' => 'Some title', 'status' => PostStatusEnum::PUBLISHED]);

        $post = Post::where('id', $post->id)->first();

        $this->assertInstanceOf(PostStatusEnum::class, $post->status);
        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED);
    }

    /** @test */
    public function get_enum_value_mass_assigned_by_instance()
    {
        $post = Post::create(['title' => 'Some title', 'status' => PostStatusEnum::PUBLISHED()]);

        $post = Post::where('id', $post->id)->first();

        $this->assertInstanceOf(PostStatusEnum::class, $post->status);
        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED()->getValue());
    }

    /** @test */
    public function set_with_mass_assignment_with_string()
    {
        $post = new Post(['title' => 'Some title', 'status' => PostStatusEnum::PUBLISHED]);

        $this->assertInstanceOf(PostStatusEnum::class, $post->status);
        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED);
    }

    /** @test */
    public function set_with_mass_assignment_with_instance()
    {
        $post = new Post(['title' => 'Some title', 'status' => PostStatusEnum::PUBLISHED()]);

        $this->assertInstanceOf(PostStatusEnum::class, $post->status);
        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED()->getValue());
    }

    /** @test */
    public function set_attribute_directly()
    {
        $post = new Post(['title' => 'Some title']);

        $post->status = PostStatusEnum::PUBLISHED();

        $this->assertInstanceOf(PostStatusEnum::class, $post->status);
        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED()->getValue());
    }

    /** @test */
    public function set_attribute_directly_and_check_after_retrieve_from_db()
    {
        $post = new Post(['title' => 'Some title']);

        $post->status = PostStatusEnum::PUBLISHED();

        $post->save();

        $post = Post::where('id', $post->id)->first();

        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED()->getValue());
    }

    /** @test */
    public function change_value()
    {
        $post = Post::create(['title' => 'Some title', 'status' => PostStatusEnum::DRAFT]);

        $post->status = PostStatusEnum::PUBLISHED();

        $post->save();

        $post = Post::where('id', $post->id)->first();

        $this->assertEquals($post->status->getValue(), PostStatusEnum::PUBLISHED()->getValue());
    }
}
