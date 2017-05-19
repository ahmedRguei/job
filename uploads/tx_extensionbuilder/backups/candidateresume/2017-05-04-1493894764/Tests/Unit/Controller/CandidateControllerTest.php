<?php
namespace Softtodo\Candidateresume\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class CandidateControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Controller\CandidateController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Softtodo\Candidateresume\Controller\CandidateController::class)
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
    public function listActionFetchesAllCandidatesFromRepositoryAndAssignsThemToView()
    {

        $allCandidates = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $candidateRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\CandidateRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $candidateRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCandidates));
        $this->inject($this->subject, 'candidateRepository', $candidateRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('candidates', $allCandidates);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCandidateToView()
    {
        $candidate = new \Softtodo\Candidateresume\Domain\Model\Candidate();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('candidate', $candidate);

        $this->subject->showAction($candidate);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCandidateToCandidateRepository()
    {
        $candidate = new \Softtodo\Candidateresume\Domain\Model\Candidate();

        $candidateRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\CandidateRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $candidateRepository->expects(self::once())->method('add')->with($candidate);
        $this->inject($this->subject, 'candidateRepository', $candidateRepository);

        $this->subject->createAction($candidate);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenCandidateToView()
    {
        $candidate = new \Softtodo\Candidateresume\Domain\Model\Candidate();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('candidate', $candidate);

        $this->subject->editAction($candidate);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenCandidateInCandidateRepository()
    {
        $candidate = new \Softtodo\Candidateresume\Domain\Model\Candidate();

        $candidateRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\CandidateRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $candidateRepository->expects(self::once())->method('update')->with($candidate);
        $this->inject($this->subject, 'candidateRepository', $candidateRepository);

        $this->subject->updateAction($candidate);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenCandidateFromCandidateRepository()
    {
        $candidate = new \Softtodo\Candidateresume\Domain\Model\Candidate();

        $candidateRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\CandidateRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $candidateRepository->expects(self::once())->method('remove')->with($candidate);
        $this->inject($this->subject, 'candidateRepository', $candidateRepository);

        $this->subject->deleteAction($candidate);
    }
}
