<?php
namespace Softtodo\Candidateresume\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class ExperienceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Domain\Model\Experience
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Softtodo\Candidateresume\Domain\Model\Experience();
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
    public function getCompanyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCompany()
        );

    }

    /**
     * @test
     */
    public function setCompanyForStringSetsCompany()
    {
        $this->subject->setCompany('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'company',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getStartDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getStartDate()
        );

    }

    /**
     * @test
     */
    public function setStartDateForDateTimeSetsStartDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setStartDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'startDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEndDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getEndDate()
        );

    }

    /**
     * @test
     */
    public function setEndDateForDateTimeSetsEndDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setEndDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'endDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );

    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );

    }
}
