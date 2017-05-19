<?php
namespace Softtodo\Candidateresume\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class SkillTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Domain\Model\Skill
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Softtodo\Candidateresume\Domain\Model\Skill();
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
    public function getLevelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLevel()
        );

    }

    /**
     * @test
     */
    public function setLevelForStringSetsLevel()
    {
        $this->subject->setLevel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'level',
            $this->subject
        );

    }
}
