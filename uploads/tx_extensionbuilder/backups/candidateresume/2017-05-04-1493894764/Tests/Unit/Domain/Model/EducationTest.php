<?php
namespace Softtodo\Candidateresume\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class EducationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Domain\Model\Education
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Softtodo\Candidateresume\Domain\Model\Education();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getSchoolReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSchool()
        );

    }

    /**
     * @test
     */
    public function setSchoolForStringSetsSchool()
    {
        $this->subject->setSchool('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'school',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDegreeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDegree()
        );

    }

    /**
     * @test
     */
    public function setDegreeForStringSetsDegree()
    {
        $this->subject->setDegree('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'degree',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFieldStudyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFieldStudy()
        );

    }

    /**
     * @test
     */
    public function setFieldStudyForStringSetsFieldStudy()
    {
        $this->subject->setFieldStudy('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fieldStudy',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getFromDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getFromDate()
        );

    }

    /**
     * @test
     */
    public function setFromDateForDateTimeSetsFromDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setFromDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'fromDate',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getToDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getToDate()
        );

    }

    /**
     * @test
     */
    public function setToDateForDateTimeSetsToDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setToDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'toDate',
            $this->subject
        );

    }
}
