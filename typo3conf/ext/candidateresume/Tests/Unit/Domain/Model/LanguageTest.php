<?php
namespace Softtodo\Candidateresume\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class LanguageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Domain\Model\Language
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Softtodo\Candidateresume\Domain\Model\Language();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProficiencyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProficiency()
        );

    }

    /**
     * @test
     */
    public function setProficiencyForStringSetsProficiency()
    {
        $this->subject->setProficiency('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'proficiency',
            $this->subject
        );

    }
}
