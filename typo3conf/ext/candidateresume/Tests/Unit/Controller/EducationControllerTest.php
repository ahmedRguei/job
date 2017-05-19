<?php
namespace Softtodo\Candidateresume\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class EducationControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Controller\EducationController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Softtodo\Candidateresume\Controller\EducationController::class)
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
    public function listActionFetchesAllEducationsFromRepositoryAndAssignsThemToView()
    {

        $allEducations = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $educationRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\EducationRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $educationRepository->expects(self::once())->method('findAll')->will(self::returnValue($allEducations));
        $this->inject($this->subject, 'educationRepository', $educationRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('educations', $allEducations);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenEducationToView()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('education', $education);

        $this->subject->showAction($education);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenEducationToEducationRepository()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();

        $educationRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\EducationRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationRepository->expects(self::once())->method('add')->with($education);
        $this->inject($this->subject, 'educationRepository', $educationRepository);

        $this->subject->createAction($education);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenEducationToView()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('education', $education);

        $this->subject->editAction($education);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenEducationInEducationRepository()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();

        $educationRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\EducationRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationRepository->expects(self::once())->method('update')->with($education);
        $this->inject($this->subject, 'educationRepository', $educationRepository);

        $this->subject->updateAction($education);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenEducationFromEducationRepository()
    {
        $education = new \Softtodo\Candidateresume\Domain\Model\Education();

        $educationRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\EducationRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $educationRepository->expects(self::once())->method('remove')->with($education);
        $this->inject($this->subject, 'educationRepository', $educationRepository);

        $this->subject->deleteAction($education);
    }
}
