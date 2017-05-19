<?php
namespace Softtodo\Candidateresume\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class SkillControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Controller\SkillController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Softtodo\Candidateresume\Controller\SkillController::class)
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
    public function listActionFetchesAllSkillsFromRepositoryAndAssignsThemToView()
    {

        $allSkills = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $skillRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\SkillRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $skillRepository->expects(self::once())->method('findAll')->will(self::returnValue($allSkills));
        $this->inject($this->subject, 'skillRepository', $skillRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('skills', $allSkills);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenSkillToView()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('skill', $skill);

        $this->subject->showAction($skill);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenSkillToSkillRepository()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();

        $skillRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\SkillRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillRepository->expects(self::once())->method('add')->with($skill);
        $this->inject($this->subject, 'skillRepository', $skillRepository);

        $this->subject->createAction($skill);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenSkillToView()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('skill', $skill);

        $this->subject->editAction($skill);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenSkillInSkillRepository()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();

        $skillRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\SkillRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillRepository->expects(self::once())->method('update')->with($skill);
        $this->inject($this->subject, 'skillRepository', $skillRepository);

        $this->subject->updateAction($skill);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenSkillFromSkillRepository()
    {
        $skill = new \Softtodo\Candidateresume\Domain\Model\Skill();

        $skillRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\SkillRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $skillRepository->expects(self::once())->method('remove')->with($skill);
        $this->inject($this->subject, 'skillRepository', $skillRepository);

        $this->subject->deleteAction($skill);
    }
}
