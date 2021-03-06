<?php

namespace Tests\Unit\Http\Requests;

use Tests\TestCase;

/**
 * @see \App\Http\Requests\LeadTypeRequest
 */
class LeadTypeRequestTest extends TestCase
{
    /** @var \App\Http\Requests\LeadTypeRequest */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new \App\Http\Requests\LeadTypeRequest();
    }

    /**
     * @test
     */
    public function authorize()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->authorize();

        $this->assertTrue($actual);
    }

    /**
     * @test
     */
    public function rules()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->rules();

        $this->assertValidationRules([
            'name' => 'required|min:2|max:55|unique:lead_types',
        ], $actual);
    }

    /**
     * @test
     */
    public function attributes()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->attributes();

        $this->assertEquals([], $actual);
    }

    /**
     * @test
     */
    public function messages()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $actual = $this->subject->messages();

        $this->assertEquals([], $actual);
    }

    // test cases...
}
