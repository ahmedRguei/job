<?php
namespace Softtodo\Candidateresume\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class ExperienceControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Controller\ExperienceController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Softtodo\Candidateresume\Controller\ExperienceController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllExperiencesFromRepositoryAndAssignsThemToView()
    {

        $allExperiences = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $experienceRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\ExperienceRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $experienceRepository->expects(self::once())->method('findAll')->will(self::returnValue($allExperiences));
        $this->inject($this->subject, 'experienceRepository', $experienceRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('experiences', $allExperiences);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenExperienceToView()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('experience', $experience);

        $this->subject->showAction($experience);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenExperienceToExperienceRepository()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();

        $experienceRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\ExperienceRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $experienceRepository->expects(self::once())->method('add')->with($experience);
        $this->inject($this->subject, 'experienceRepository', $experienceRepository);

        $this->subject->createAction($experience);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenExperienceToView()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('experience', $experience);

        $this->subject->editAction($experience);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenExperienceInExperienceRepository()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();

        $experienceRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\ExperienceRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $experienceRepository->expects(self::once())->method('update')->with($experience);
        $this->inject($this->subject, 'experienceRepository', $experienceRepository);

        $this->subject->updateAction($experience);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenExperienceFromExperienceRepository()
    {
        $experience = new \Softtodo\Candidateresume\Domain\Model\Experience();

        $experienceRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\ExperienceRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $experienceRepository->expects(self::once())->method('remove')->with($experience);
        $this->inject($this->subject, 'experienceRepository', $experienceRepository);

        $this->subject->deleteAction($experience);
    }
}
