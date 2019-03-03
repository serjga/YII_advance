<?php
namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
   /**
    * @dataProvider pageProvider
    */
    public function staticPages(AcceptanceTester $I, \Codeception\Example $example)
    {
        $I->amOnPage($example['url']);
        $I->seeInField('.active', $example['title']);
    }

    /**
     * @return array
     */
    protected function pageProvider()
    {
        return [
        	['url'=>"/", 'title'=>"Home"],
            ['url'=>"/site/index", 'title'=>"Home"],
            ['url'=>"/site/about", 'title'=>"About"],
            ['url'=>"/site/contact", 'title'=>"Contact"],
            ['url'=>"/site/signup", 'title'=>"Singup"],
            ['url'=>"/site/login", 'title'=>"Login"]
        ];
    }
}