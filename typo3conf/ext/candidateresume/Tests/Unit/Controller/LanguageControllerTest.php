<?php
namespace Softtodo\Candidateresume\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Ahmed Rguei <ahmed.rguei@softtodo.com>
 */
class LanguageControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Softtodo\Candidateresume\Controller\LanguageController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Softtodo\Candidateresume\Controller\LanguageController::class)
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
    public function listActionFetchesAllLanguagesFromRepositoryAndAssignsThemToView()
    {

        $allLanguages = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $languageRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\LanguageRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $languageRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLanguages));
        $this->inject($this->subject, 'languageRepository', $languageRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('languages', $allLanguages);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLanguageToView()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('language', $language);

        $this->subject->showAction($language);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenLanguageToLanguageRepository()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();

        $languageRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\LanguageRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageRepository->expects(self::once())->method('add')->with($language);
        $this->inject($this->subject, 'languageRepository', $languageRepository);

        $this->subject->createAction($language);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenLanguageToView()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('language', $language);

        $this->subject->editAction($language);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenLanguageInLanguageRepository()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();

        $languageRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\LanguageRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageRepository->expects(self::once())->method('update')->with($language);
        $this->inject($this->subject, 'languageRepository', $languageRepository);

        $this->subject->updateAction($language);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenLanguageFromLanguageRepository()
    {
        $language = new \Softtodo\Candidateresume\Domain\Model\Language();

        $languageRepository = $this->getMockBuilder(\Softtodo\Candidateresume\Domain\Repository\LanguageRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageRepository->expects(self::once())->method('remove')->with($language);
        $this->inject($this->subject, 'languageRepository', $languageRepository);

        $this->subject->deleteAction($language);
    }
}
