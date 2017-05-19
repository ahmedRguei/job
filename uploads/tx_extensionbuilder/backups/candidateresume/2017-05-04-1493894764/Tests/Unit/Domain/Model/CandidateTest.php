<?php
namespace Softtodo\Candidateresume\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class CandidateTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Domain\Model\Candidate
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Softtodo\Candidateresume\Domain\Model\Candidate();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );

    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );

    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
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

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );

    }

    /**
     * @test
     */
    public function setCityForStringSetsCity()
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'city',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );

    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );

    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getExperiencesReturnsInitialValueForExperience()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getExperiences()
        );

    }

    /**
     * @test
     */
    public function setExperiencesForObjectStorageContainingExperienceSetsExperiences()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();
        $objectStorageHoldingExactlyOneExperiences = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneExperiences->attach($experience);
        $this->subject->setExperiences($objectStorageHoldingExactlyOneExperiences);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneExperiences,
            'experiences',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addExperienceToObjectStorageHoldingExperiences()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();
        $experiencesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $experiencesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($experience));
        $this->inject($this->subject, 'experiences', $experiencesObjectStorageMock);

        $this->subject->addExperience($experience);
    }

    /**
     * @test
     */
    public function removeExperienceFromObjectStorageHoldingExperiences()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();
        $experiencesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $experiencesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($experience));
        $this->inject($this->subject, 'experiences', $experiencesObjectStorageMock);

        $this->subject->removeExperience($experience);

    }

    /**
     * @test
     */
    public function getEducationsReturnsInitialValueForEducation()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEducations()
        );

    }

    /**
     * @test
     */
    public function setEducationsForObjectStorageContainingEducationSetsEducations()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();
        $objectStorageHoldingExactlyOneEducations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEducations->attach($education);
        $this->subject->setEducations($objectStorageHoldingExactlyOneEducations);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEducations,
            'educations',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addEducationToObjectStorageHoldingEducations()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();
        $educationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($education));
        $this->inject($this->subject, 'educations', $educationsObjectStorageMock);

        $this->subject->addEducation($education);
    }

    /**
     * @test
     */
    public function removeEducationFromObjectStorageHoldingEducations()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();
        $educationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($education));
        $this->inject($this->subject, 'educations', $educationsObjectStorageMock);

        $this->subject->removeEducation($education);

    }

    /**
     * @test
     */
    public function getSkillsReturnsInitialValueForSkill()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getSkills()
        );

    }

    /**
     * @test
     */
    public function setSkillsForObjectStorageContainingSkillSetsSkills()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();
        $objectStorageHoldingExactlyOneSkills = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneSkills->attach($skill);
        $this->subject->setSkills($objectStorageHoldingExactlyOneSkills);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneSkills,
            'skills',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addSkillToObjectStorageHoldingSkills()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->addSkill($skill);
    }

    /**
     * @test
     */
    public function removeSkillFromObjectStorageHoldingSkills()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();
        $skillsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($skill));
        $this->inject($this->subject, 'skills', $skillsObjectStorageMock);

        $this->subject->removeSkill($skill);

    }

    /**
     * @test
     */
    public function getLanguagesReturnsInitialValueForLanguage()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLanguages()
        );

    }

    /**
     * @test
     */
    public function setLanguagesForObjectStorageContainingLanguageSetsLanguages()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();
        $objectStorageHoldingExactlyOneLanguages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLanguages->attach($language);
        $this->subject->setLanguages($objectStorageHoldingExactlyOneLanguages);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLanguages,
            'languages',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function addLanguageToObjectStorageHoldingLanguages()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();
        $languagesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $languagesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($language));
        $this->inject($this->subject, 'languages', $languagesObjectStorageMock);

        $this->subject->addLanguage($language);
    }

    /**
     * @test
     */
    public function removeLanguageFromObjectStorageHoldingLanguages()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();
        $languagesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $languagesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($language));
        $this->inject($this->subject, 'languages', $languagesObjectStorageMock);

        $this->subject->removeLanguage($language);

    }
}
