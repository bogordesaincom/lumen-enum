<?php

namespace Bogordesain\Enum\Test;

class EnumLabelsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->app->instance('path.lang', __DIR__.DIRECTORY_SEPARATOR.'lang');
    }

    /** @test */
    public function get_label()
    {
        $this->assertEquals(PostStatusEnum::PENDING()->label(), 'Pending Label');
    }

    /** @test */
    public function get_label_without_template()
    {
        $this->assertEquals(PostStatusEnum::DRAFT()->label(), 'draft');
    }

    /** @test */
    public function get_all_labels()
    {
        $this->assertSame(
            [
                'published' => 'Published Label',
                'pending' => 'Pending Label',
                'draft' => 'draft',
            ],
            PostStatusEnum::labels()
        );
    }
}
