<?php

namespace Bogordesain\Enum\Test;

use InvalidArgumentException;
use Bogordesain\Enum\Rules\EnumRule;
use Bogordesain\Enum\Test\PostStatusEnum;

class EnumValidationRuleTest extends TestCase
{
    /** @test */
    public function validation_passes()
    {
        $result = (new EnumRule(PostStatusEnum::class))->passes('', 'pending');

        $this->assertTrue($result);
    }

    /** @test */
    public function validation_fails()
    {
        $result = (new EnumRule(PostStatusEnum::class))->passes('', 'invalid');

        $this->assertFalse($result);
    }

    /**
     * @test
     * @dataProvider validate_provider_passes_with_parameter
     *
     * @param $expectedResult the expected outcome
     * @param $useKey true if the enum key should be used to validate against, otherwise the value is used.
     * @param $inputValue the input value to test with
     */
    public function validate_with_parameter($expectedResult, $useKey, $inputValue)
    {
        $result = (new EnumRule(PostStatusEnum::class, $useKey))->passes('', $inputValue);

        $this->assertEquals($expectedResult, $result);
    }

    public function validate_provider_passes_with_parameter()
    {
        return [
            [true, false, 'pending'], // Does exists as value
            [true, true, 'PENDING'], // Does exists as key
            [false, false, 'invalid'], // Does not exists as value
            [false, false, 'PENDING'], // Uppercase value does not exist as value
            [false, true, 'pending'], // Lowercase value does not exist as key
        ];
    }

    /** @test */
    public function validation_passes_rule_method()
    {
        $result = PostStatusEnum::rule()->passes('', 'pending');

        $this->assertTrue($result);
    }

    /** @test */
    public function validation_fails_rule_method()
    {
        $result = PostStatusEnum::rule()->passes('', 'invalid');

        $this->assertFalse($result);
    }

    /** @test */
    public function validation_passes_rule_by_key_method()
    {
        $result = PostStatusEnum::ruleByKey()->passes('', 'PENDING');

        $this->assertTrue($result);
    }

    /** @test */
    public function validation_fails_rule_by_key_method()
    {
        $result = PostStatusEnum::ruleByKey()->passes('', 'PENDINGINVALID');

        $this->assertFalse($result);
    }

    /** @test */
    public function exception_on_invalid_enum_class()
    {
        $this->expectException(InvalidArgumentException::class);

        new EnumRule('InvalidEnumClass');
    }

    /** @test */
    public function exception_on_invalid_enum_class_with_use_key_parameter()
    {
        $this->expectException(InvalidArgumentException::class);

        new EnumRule('InvalidEnumClass', true);
    }
}
