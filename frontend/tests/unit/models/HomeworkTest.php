<?php
namespace frontend\tests\unit\models;

use Yii;
use frontend\models\ContactForm;
use common\fixtures\UserFixture;

class HomeworkTest extends \Codeception\Test\Unit
{
    public function testAssertTrue()
    {
        $this->assertTrue(true);
    }

    public function testAssertEquals()
    {
        $var = 123;
        $this->assertEquals(123, $var);
    }

    public function testAssertLessThan()
    {
        $var = 4;
        $this->assertLessThan(5, $var);
    }

    public function testSendEmail()
    {
        $model = new ContactForm();

        $model->attributes = [
            'name' => 'guest1',
            'email' => 'name@mail.com',
            'subject' => 'hello',
            'body' => 'message',
        ];

        $this->assertAttributeEquals('guest1', 'name', $model);
        // $this->assertArrayHasKey('name', $model);

        expect($model)->hasKey('name');
    }
}